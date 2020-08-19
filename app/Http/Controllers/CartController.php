<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\DetalleVenta;
use App\ExtraDetalleVenta;
use App\ProductoTamano;
use App\Tamano;
use App\Cliente;
use App\MetodoPago;
use App\Venta;

class CartController extends Controller
{
    public function __construct(){
        $this->middleware('guest'); 
        if (!\Session::has('cart')) \Session::put('cart',array());
        if (!\Session::has('cart_detalle')) \Session::put('cart_detalle',array());
        if (!\Session::has('user')) \Session::put('user',null);
        if (!\Session::has('type')) \Session::put('type',null);
        if (!\Session::has('ubicacion')) \Session::put('ubicacion',null);
        if (!\Session::has('paymethod')) \Session::put('paymethod',null);
    }

    //show cart
    public function show(){
        $detalles=\Session::get('cart');
        $extras=\Session::get('cart_detalle');
        //dd($detalles);
        return view('cart',compact('detalles','extras'));
    }


    //Add item
    public function add(Request $request,$id_producto){
        //dd($request);
        
        $producto_tamano=ProductoTamano::find($request->id_tamano);

        $tamano=Tamano::find($producto_tamano->id_tamano);
        $producto=Producto::find($id_producto);
        $cart=\Session::get('cart');

        $detalle_venta=[
            'id_producto'=>$producto->id,
            'cantidad'=>$request->cantidad,
            'costo_extra_tamano'=>$producto_tamano->precio_extra,
            'costo_producto'=>$producto->precio,
            'instruccion_especial'=>$request->instruccion_especial,
            'nombre_producto'=>$producto->nombre,
            'id_producto'=>$producto->id,
            'id_tamano'=>$tamano->id,
            'nombre_tamano'=>$tamano->nombre,
            'total'=>($producto->precio+$producto_tamano->precio_extra)*$request->cantidad,
        ];
        $cart[]=$detalle_venta;

        $extra_detalle_venta=\Session::get('cart_detalle');
        $extra_array=array();
        if (!is_null($request->extras)){
            foreach ($request->extras as $extra){
                $nombre_extra=Producto::find($extra);
                $ext=[
                    'id_extra'=>$extra,
                    'nombre_extra'=>$nombre_extra->nombre,
                    'id_detalle_venta'=>0,
                    'cantidad'=>$request['cantidad'.$extra],
                    'total'=>Producto::find($extra)->precio*$request['cantidad'.$extra],
                ];
                array_push($extra_array,$ext);

            }
           
        }else{
            $ext=[
            'id_extra'=>null
            ];
            array_push($extra_array,$ext);
        }
        $extra_detalle_venta[]=$extra_array;
        \Session::put('cart_detalle',$extra_detalle_venta);
        \Session::put('cart',$cart);

        return redirect('/');
    }

    //delete item
    public function deleteItem(Request $request){

        $id_detalle=$request->id_detalle;
        //dd($request);

        $cart=\Session::get('cart');
        $extra_detalle_venta=\Session::get('cart_detalle');
                            //id desplazamiento    
        \array_splice($cart, $id_detalle, 1);
        \array_splice($extra_detalle_venta, $id_detalle, 1);

        \Session::put('cart',$cart);
        \Session::put('cart_detalle',$extra_detalle_venta);

        return redirect(route('cart.show'));
    }

    //update item

    //trash cart (vaciar carrito)
    public function trash(){
        \Session::forget('cart');
        \Session::forget('cart_detalle');
        return redirect('cart/mostrar');
    }

    public function buy(Request $request){
        $detalles=\Session::get('cart');
        $extras=\Session::get('cart_detalle');
        $usuario=\Session::get('user');
        $type=\Session::get('type');
        $location=\Session::get('ubicacion');
        $metodo=\Session::get('paymethod');

        if (count($detalles)==0){
         return redirect()->back()->withErrors('No tiene ningun producto para comprar.');
        }
        if (is_null($usuario)){
            return redirect()->back()->withErrors('Rellene sus datos personales.');
        }
        if (is_null($type)){
            return redirect()->back()->withErrors('Seleccione el tipo de pedido.');
        }elseif($type=='delivery'){
            if (is_null($location)){
                return redirect()->back()->withErrors('Seleccione su ubicacion.');
            }
        }
        if (is_null($metodo)){
            return redirect()->back()->withErrors('Seleccione el metodo de pago.');
        }

            $cliente=Cliente::where('email',$usuario['email'])->first();
            if (is_null($cliente)){
                $cliente=Cliente::create($usuario);
            }
            $metodo_pago=MetodoPago::find($metodo);


            if (is_null($request->comentario)){
                $comentario="";
            }else{
                $comentario=$request->comentario;
            }

            if ($type=='delivery'){
                $venta=Venta::create([
                    'comentario'=>$comentario,
                    'total'=>0,
                    'id_cliente'=>$cliente->id,
                    'id_metodo_pago'=>$metodo_pago->id,
                    'es_delivery'=>true,
                    'aceptado'=>false,
                    'rechazado'=>false,
                    'entregado'=>false,
                    'comentario_respuesta'=>''
                    ]);
            }else{
                $venta=Venta::create([
                    'comentario'=>$comentario,
                    'total'=>0,
                    'id_cliente'=>$cliente->id,
                    'id_metodo_pago'=>$metodo_pago->id,
                    'es_delivery'=>false,
                    'aceptado'=>false,
                    'rechazado'=>false,
                    'entregado'=>false,
                    'comentario_respuesta'=>''
                    ]);
            }
            $total_venta=0;
            $i=0;
            foreach ($detalles as $detalle){
                $total_venta+=$detalle['total'];
                $instruccion_especial="";
                if (!is_null($detalle['instruccion_especial'])){
                    $instruccion_especial=$detalle['instruccion_especial'];
                }

                $datos_detalle_venta=[
                    'cantidad'=>$detalle['cantidad'],
                    'costo_extra_tamano'=>$detalle['costo_extra_tamano'],
                    'costo_producto'=>$detalle['costo_producto'],
                    'instruccion_especial'=>$instruccion_especial,
                    'nombre_producto'=>$detalle['nombre_producto'],
                    'nombre_tamano'=>$detalle['nombre_tamano'],
                    'total'=>$detalle['total'],
                    'id_tamano'=>$detalle['id_tamano'],
                    'id_producto'=>$detalle['id_producto'],
                    'id_venta'=>$venta->id
                ];
                $detalle_venta=DetalleVenta::create($datos_detalle_venta);
                
                foreach ($extras[$i] as $extra){
                    //dd($extra);
                    if ($extra['id_extra']!=null){
                        $extra_detalle_venta=ExtraDetalleVenta::create([
                            'cantidad'=>$extra['cantidad'],
                            'nombre_extra'=>$extra['nombre_extra'],
                            'total'=>$extra['total'],
                            'id_extra'=>$extra['id_extra'],
                            'id_detalle_venta'=>$detalle_venta->id
                        ]);
                    }
                }
                $i++;
            }
            $venta->update(['total'=>$total_venta]);

        return redirect(route('cart.trash'));
    }







    //usuario
    public function getUser(){
        $usuario=\Session::get('user');
       // dd($usuario);
        return view('user',compact('usuario'));
    }

    public function editUser(Request $request){
        
        $usuario=$this->validate(request(),
        [
            'nombre'=>'required|string',
            'email'=>'email|required|string',
            'telefono'=>'required|string']);

       //dd($usuario);
       \Session::put('user',$usuario);
       return redirect('/cart/user');
    }

    public function getUserEdit(){
        $usuario=\Session::get('user');
        //dd($usuario);
        return view('user_edit',compact('usuario'));
    }


    //tipo

    public function getType(){
        $tipo=\Session::get('type');
        $ubicacion=\Session::get('ubicacion');

        return view('type',compact('tipo','ubicacion'));
    }

    public function editType(Request $request){
        $tipo=$request->tipo;
        \Session::put('type',$tipo);
        //dd($tipo);
        return redirect(route('type.edit'));
    }
 
    public function editUbicacion(Request $request){
        $ubicacion=$this->validate(request(),[
            'ubicacion'=>'required',
            'lat'=>'required',
            'lng'=>'required',
            'costo_envio'=>''
        ]);
        \Session::put('ubicacion',$ubicacion);
        return redirect(route('type'));
    }

    public function getTypeEdit(){
         $tipo=\Session::get('type');
         $ubicacion=\Session::get('ubicacion');

         return view('type_edit',compact('tipo','ubicacion'));
    }
 

    //metodopago

    public function getPaymethod(){
        $id_metodo=\Session::get('paymethod');
        $metodo=null;
        if (!is_null($id_metodo)){
            $metodo=MetodoPago::find($id_metodo);
        }
        return view('paymethod',compact('metodo'));
    }

    public function editPaymethod(Request $request){
        $metodo=$request->id;
        \Session::put('paymethod',$metodo);
        return redirect(route('paymethod'));
    }

    public function getPaymethodEdit(){
        $metodos=MetodoPago::all();

        return view('paymethod_edit',compact('metodos'));
    }


}

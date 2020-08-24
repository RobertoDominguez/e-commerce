<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Auth;
use App\Producto;
use App\Categoria;
use App\Tamano;
use App\Venta;
use App\Cliente;
use App\DetalleVenta;
use App\ExtraDetalleVenta;
use \Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PanelAdministrativoController extends Controller
{

    public function __construct(){
        $this->middleware('auth:administrador'); 
    }

    public function getMenuPedidos(){
       // dd(Auth::guard('administrador')->user()->id);       
       $actual =Carbon::now();

        $ganancia_mensual=Venta::whereMonth('created_at',$actual->format('m'))
        ->whereYear('created_at',$actual->format('Y'))
        ->select('total')->sum('total');
        $ganancia_anual=Venta::whereYear('created_at',$actual->format('Y'))->select('total')->sum('total');

        $pedidos_pendientes=Venta::where(function ($query) {$query->where('aceptado', false)
            ->orWhere('entregado',false);})->where('rechazado',false)->select('id')->count('id');

        return view('admin.menu',compact('ganancia_mensual','ganancia_anual'),compact('pedidos_pendientes'));
    }

    //productos
    public function getProducts(){
        $productos=Producto::where('eliminado',false)->where('es_extra',false)->get();
        return view('admin.products.index',compact('productos'));
    }

    public function getAddProduct(){
        $categorias=Categoria::where('eliminado',false)->get();
        return view('admin.products.add',compact('categorias'));
    }

    public function storeProduct(Request $request){
        $this->validate(request(),[
            'nombre'=>'required|string',
            'descripcion'=>'required|string',
            'precio'=>'required',
            'imagen'=>'required',
            'id_categoria'=>'required',
        ]);

        $datos=[
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
            'imagen'=>'',
            'imagen_icono'=>'',
            'id_categoria'=>$request->id_categoria,
            'disponible'=>true,
            'eliminado'=>false,
            'es_extra'=>false
        ];

        if ($request->has('imagen')) {
            $datos['imagen'] = $request->imagen->store('productos');
        }

        $producto=Producto::create($datos);

        return redirect()->route('admin.products')->with('success','Producto ha sido creado');
    }

    public function getEditProduct($id){
        $producto=Producto::find($id);
        $categorias=Categoria::where('eliminado',false)->get();
        return view('admin.products.edit',compact('producto','categorias'));
    }

    public function editProduct(Request $request,$id){
        $producto=Producto::find($id);

        $this->validate(request(),[
            'nombre'=>'required|string',
            'descripcion'=>'required|string',
            'precio'=>'required',
            'id_categoria'=>'required',
        ]);

        $datos=[
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
            'imagen'=>$producto->imagen,
            'imagen_icono'=>'',
            'id_categoria'=>$request->id_categoria,
        ];

        if ($request->has('imagen')) {
            Storage::delete($producto->imagen);
            $datos['imagen'] = $request->imagen->store('productos');
        }
        $producto->update($datos);
        return redirect()->route('admin.products')->with('success','Cliente ha sido actualizado');
    }

    public function deleteProduct($id){
        $producto=Producto::find($id);
        Storage::delete($producto->imagen);
        $producto->update(['eliminado'=>true]);
        return redirect()->route('admin.products')->with('success','Producto ha sido eliminado');
    }



    //categorias
    public function getCategories(){
        $categorias=Categoria::where('eliminado',false)->get();
        return view('admin.categories.index',compact('categorias'));
    }

    public function getAddCategorie(){
        return view('admin.categories.add');
    }

    public function storeCategorie(Request $request){
        $this->validate(request(),[
            'nombre'=>'required|string',
        ]);

        $datos=[
            'nombre'=>$request->nombre,
            'eliminado'=>false,
        ];

        $producto=Categoria::create($datos);

        return redirect()->route('admin.categories')->with('success','Categoria ha sido creada');
    }

    public function getEditCategorie($id){
        if ($id!=1 && $id!=2){
            $categoria=Categoria::find($id);
            return view('admin.categories.edit',compact('categoria'));
        }else{
            return redirect()->route('admin.categories'); 
        }
    }

    public function editCategorie(Request $request,$id){
        if ($id!=1 && $id!=2){
            $categoria=Categoria::find($id);
            $this->validate(request(),[
                'nombre'=>'required|string',
            ]);
            $categoria->update(['nombre'=>$request->nombre]);
        }
        return redirect()->route('admin.categories')->with('success','Categoria ha sido actualizada');
    }

    public function deleteCategorie($id){
        if ($id!=1 && $id!=2){
            $categoria=Categoria::find($id);
            $categoria->update(['eliminado'=>true]);
        }
        Producto::where('id_categoria',$id)->where('es_extra',false)->update(['id_categoria'=>1]);
        Producto::where('id_categoria',$id)->where('es_extra',true)->update(['id_categoria'=>2]);
        return redirect()->route('admin.categories')->with('success','Categoria ha sido eliminada');
    }


    //extras
    public function getExtras(){
        $extras=Producto::where('eliminado',false)->where('es_extra',true)->get();
        return view('admin.extras.index',compact('extras'));
    }

    public function getAddExtra(){
        $categorias=Categoria::where('eliminado',false)->get();
        return view('admin.extras.add',compact('categorias'));
    }

    public function storeExtra(Request $request){
        $this->validate(request(),[
            'nombre'=>'required|string',
            'precio'=>'required',
            'id_categoria'=>'required',
        ]);

        $datos=[
            'nombre'=>$request->nombre,
            'descripcion'=>'',
            'precio'=>$request->precio,
            'imagen'=>'',
            'imagen_icono'=>'',
            'id_categoria'=>$request->id_categoria,
            'disponible'=>true,
            'eliminado'=>false,
            'es_extra'=>true
        ];

        $extra=Producto::create($datos);

        return redirect()->route('admin.extras')->with('success','Extra ha sido creado');
    }

    public function getEditExtra($id){
        $extra=Producto::find($id);
        $categorias=Categoria::where('eliminado',false)->get();
        return view('admin.extras.edit',compact('extra','categorias'));
    }

    public function editExtra(Request $request,$id){
        $extra=Producto::find($id);

        $this->validate(request(),[
            'nombre'=>'required|string',
            'precio'=>'required',
            'id_categoria'=>'required',
        ]);

        $datos=[
            'nombre'=>$request->nombre,
            'precio'=>$request->precio,
            'id_categoria'=>$request->id_categoria,
        ];

        $extra->update($datos);
        return redirect()->route('admin.extras')->with('success','Cliente ha sido actualizado');
    }

    public function deleteExtra($id){
        $extra=Producto::find($id);
        $extra->update(['eliminado'=>true]);
        return redirect()->route('admin.extras')->with('success','Extra ha sido eliminado');
    }



    public function getPedidos(){
        $ventas=Venta::where('venta.rechazado',false)->where('entregado',false)
        ->orderBy('id','desc')->get();

        return view('admin.pedidos',compact('ventas'));
    }

    public function getDetallePedido($id){
        $venta=Venta::find($id);
        $cliente=Cliente::find($venta->id_cliente);
        if ($venta->es_delivery==true){
            $venta=Venta::join('delivery','venta.id','delivery.id_venta')->where('venta.id',$id)->get()->first();
        }
        
        $detalles=DetalleVenta::where('id_venta',$id)->get();
        $extras=array();
        foreach ($detalles as $detalle){
            $extra_array=ExtraDetalleVenta::where('id_detalle_venta',$detalle->id)->get();

            $extras[]=$extra_array;
        }

        return view('admin.detalle_pedido',compact('venta','cliente'),compact('detalles','extras'));
    }

    public function aceptarPedido($id){
        Venta::find($id)->update(['aceptado'=>true]);
        return redirect()->route('admin.detalle_pedido',$id);
    }

    public function rechazarPedido($id,Request $request){
        if (is_null($request->comentario)){
         return redirect()->back()->withErrors('Si va a rechazar un pedido tiene que especificar el motivo');
        }
        Venta::find($id)->update(['rechazado'=>true,'comentario_respuesta'=>$request->comentario]);
        return redirect()->route('admin.detalle_pedido',$id);
    }

    public function entregarPedido($id){
        Venta::find($id)->update(['entregado'=>true]);
        return redirect()->route('admin.detalle_pedido',$id);
    }

    public function reporteVentas(){
        $ventas=Venta::where('aceptado',true)->where('entregado',true)->get();
        return view('admin.reports.ventas',compact('ventas'));
    }

    public function reporteEstadisticas(){

        $producto_mas_vendido=Producto::find( DetalleVenta::select('id_producto',DB::raw('count(*) as total'))->groupBy('id_producto')->orderBy('total','desc')->first()->id_producto );

        return view('admin.reports.estadisticas',compact('producto_mas_vendido'));
    }

}

/*

                                        @if (($venta->aceptado==false) || ($venta->rechazado==false) || ($venta->entregado==false))
                                            @if ($venta->entregado==true)
                                                <p>Entregado.</p>
                                            @endif
                                            @if (($venta->aceptado==true) && ($venta->entregado==false))
                                                <p>En Camino</p>
                                            @endif
                                            @if ($venta->rechazado==true)
                                                <p>Rechazado.</p>
                                            @endif
                                        @else
                                        <p class="font-weight-bold">No Atendido!</p>
                                        @endif
*/
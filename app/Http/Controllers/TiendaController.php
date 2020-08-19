<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Tamano;
use App\ProductoTamano;
use App\Categoria;
use App\Tienda;

class TiendaController extends Controller
{
    public function __construct(){
        $this->middleware('guest'); 
    }


    public function get(){
        
        $productos=Producto::join('categoria','categoria.id','producto.id_categoria')->where('producto.eliminado',false)
        ->where('producto.disponible',true)->where('producto.es_extra',false)
        ->select('producto.id','producto.nombre as nombre_producto','categoria.nombre as nombre_categoria','producto.precio'
        ,'producto.imagen','producto.imagen_icono','producto.descripcion','producto.id_categoria')
        ->orderBy('categoria.nombre')->get();
        $tienda=Tienda::all()->first();
        return view('menu',compact('productos','tienda'));
    }

    public function getProducto($id_producto){
        $producto=Producto::find($id_producto);
        $tamanos=Tamano::join('producto_tamano','tamano.id','producto_tamano.id_tamano')
        ->where('producto_tamano.id_producto',$id_producto)
        ->where('eliminado',false)->get();

        $categorias_extras=Categoria::join('producto','producto.id_categoria','categoria.id')
        ->join('extra_producto','extra_producto.id_extra','producto.id')
        ->where('extra_producto.id_producto',$id_producto)
        ->where('producto.eliminado',false)->where('producto.disponible',true)
        ->where('producto.es_extra',true)
        ->select('categoria.id','categoria.nombre')->groupBy('categoria.id','categoria.nombre')->get();

        $extras=Producto::join('extra_producto','extra_producto.id_extra','producto.id')
        ->where('extra_producto.id_producto',$id_producto)
        ->where('eliminado',false)->where('disponible',true)
        ->where('es_extra',true)->get();

        return view('product_add',compact('producto','tamanos'),compact('categorias_extras','extras'));
    }

    public function getInformacion(){
        $tienda=Tienda::all()->first();
        return view('informacion',compact('tienda'));
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            [
            'nombre'=>'-',
            'eliminado'=>false
            ],
            [
                'nombre'=>'extras',
                'eliminado'=>false
            ],
            [
                'nombre'=>'Refrescos',
                'eliminado'=>false
            ],
            [
                'nombre' => 'Postre',
                'eliminado'=>false,
            ]
        ]);

        DB::table('tamano')->insert([
            [
            'nombre'=>'normal',
            'eliminado'=>false
            ],
            [
                'nombre'=>'cuarto',
                'eliminado'=>false
            ],
        ]);

        DB::table('producto')->insert([
            [
            'nombre'=>'coca-cola',
            'descripcion'=>'250 ml.',
            'imagen'=>'productos/comida-rapida-casera.jpg',
            'imagen_icono'=>'',
            'precio'=>5,
            'disponible'=>true,
            'eliminado'=>false,
            'es_extra'=>false,
            'id_categoria'=>'1',
            ],
            [
                'nombre'=>'Pollo frito',
                'descripcion'=>'con arroz, papas y platano.',
                'imagen'=>'productos/comida-rapida-casera.jpg',
                'imagen_icono'=>'',
                'precio'=>25,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>false,
                'id_categoria'=>'1',
            ],
            [
                'nombre'=>'salsa de tomate',
                'descripcion'=>'',
                'imagen'=>'',
                'imagen_icono'=>'',
                'precio'=>1,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>true,
                'id_categoria'=>'2',
            ],
            [
                'nombre'=>'mayonesa',
                'descripcion'=>'',
                'imagen'=>'',
                'imagen_icono'=>'',
                'precio'=>1,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>true,
                'id_categoria'=>'2',
            ],
            [
                'nombre'=>'Limonada',
                'descripcion'=>'',
                'imagen'=>'productos/comida-rapida-casera.jpg',
                'imagen_icono'=>'',
                'precio'=>3,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>false,
                'id_categoria'=>'3',
            ],
            [
                'nombre'=>'Hamburguesa',
                'descripcion'=>'',
                'imagen'=>'productos/comida-rapida-casera.jpg',
                'imagen_icono'=>'',
                'precio'=>30,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>false,
                'id_categoria'=>'1',
            ],
            [
                'nombre'=>'Pizza',
                'descripcion'=>'',
                'imagen'=>'productos/comida-rapida-casera.jpg',
                'imagen_icono'=>'',
                'precio'=>1,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>false,
                'id_categoria'=>'1',
            ],
            [
                'nombre'=>'Chancho',
                'descripcion'=>'',
                'imagen'=>'productos/comida-rapida-casera.jpg',
                'imagen_icono'=>'',
                'precio'=>1,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>false,
                'id_categoria'=>'1',
            ],
            [
                'nombre'=>'Milanesa',
                'descripcion'=>'',
                'imagen'=>'productos/comida-rapida-casera.jpg',
                'imagen_icono'=>'',
                'precio'=>1,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>false,
                'id_categoria'=>'1',
            ],
            [
                'nombre'=>'Spaguetti',
                'descripcion'=>'',
                'imagen'=>'productos/comida-rapida-casera.jpg',
                'imagen_icono'=>'',
                'precio'=>1,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>false,
                'id_categoria'=>'1',
            ],
            [
                'nombre'=>'Pollo a la brasa',
                'descripcion'=>'',
                'imagen'=>'productos/comida-rapida-casera.jpg',
                'imagen_icono'=>'',
                'precio'=>1,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>false,
                'id_categoria'=>'1',
            ],
            [
                'nombre'=>'Hamburguesa de pollo',
                'descripcion'=>'',
                'imagen'=>'productos/comida-rapida-casera.jpg',
                'imagen_icono'=>'',
                'precio'=>1,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>false,
                'id_categoria'=>'1',
            ],
            [
                'nombre'=>'Pipocas de pollo',
                'descripcion'=>'',
                'imagen'=>'productos/comida-rapida-casera.jpg',
                'imagen_icono'=>'',
                'precio'=>1,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>false,
                'id_categoria'=>'1',
            ],
            [
                'nombre'=>'Panchito',
                'descripcion'=>'',
                'imagen'=>'productos/comida-rapida-casera.jpg',
                'imagen_icono'=>'',
                'precio'=>1,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>false,
                'id_categoria'=>'1',
            ],
            [
                'nombre'=>'Lomo montado',
                'descripcion'=>'',
                'imagen'=>'productos/comida-rapida-casera.jpg',
                'imagen_icono'=>'',
                'precio'=>1,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>false,
                'id_categoria'=>'1',
            ],
            [
                'nombre'=>'Flan de coco',
                'descripcion'=>'',
                'imagen'=>'productos/comida-rapida-casera.jpg',
                'imagen_icono'=>'',
                'precio'=>1,
                'disponible'=>true,
                'eliminado'=>false,
                'es_extra'=>true,
                'id_categoria'=>'4', 
            ]
        ]);

        DB::table('producto_tamano')->insert([
            [
            'id_producto'=>'1',
            'id_tamano'=>'1',
            'precio_extra'=>0
            ],
            [
                'id_producto'=>'2',
                'id_tamano'=>'2',
                'precio_extra'=>8
            ],
            [
                'id_producto'=>'2',
                'id_tamano'=>'1',
                'precio_extra'=>0
            ],
            [
                'id_producto'=>'5',
                'id_tamano'=>'1',
                'precio_extra'=>0
            ],
            [
                'id_producto'=>'6',
                'id_tamano'=>'1',
                'precio_extra'=>0
            ],
            [
                'id_producto'=>'7',
                'id_tamano'=>'1',
                'precio_extra'=>0
            ],
            [
                'id_producto'=>'8',
                'id_tamano'=>'1',
                'precio_extra'=>0
            ],
            [
                'id_producto'=>'9',
                'id_tamano'=>'1',
                'precio_extra'=>0
            ],
            [
                'id_producto'=>'10',
                'id_tamano'=>'1',
                'precio_extra'=>0
            ],
            [
                'id_producto'=>'11',
                'id_tamano'=>'1',
                'precio_extra'=>0
            ],
            [
                'id_producto'=>'12',
                'id_tamano'=>'1',
                'precio_extra'=>0
            ],
            [
                'id_producto'=>'13',
                'id_tamano'=>'1',
                'precio_extra'=>0
            ],
            [
                'id_producto'=>'14',
                'id_tamano'=>'1',
                'precio_extra'=>0
            ],
            [
                'id_producto'=>'15',
                'id_tamano'=>'1',
                'precio_extra'=>0
            ],
        ]);

        DB::table('extra_producto')->insert([
            [
            'id_producto'=>'2',
            'id_extra'=>'3',
            ],
            [
                'id_producto'=>'2',
                'id_extra'=>'4',
            ],
            [
                'id_producto'=>'2',
                'id_extra'=>'16',
            ]
        ]);

        DB::table('administrador')->insert([
            [
            'email'=>'roberto@gmail.com',
            'password'=>Hash::make('12345678'),
            ],
        ]);
    
    
    
        DB::table('metodo_pago')->insert([
            [
            'nombre'=>'Visa',
            'descripcion'=>'tarjeta de credito.',
            'comision'=>'0.05'
            ],
        ]);
    
        DB::table('metodo_pago')->insert([
            [
            'nombre'=>'Efectivo',
            'descripcion'=>'pague al recibir el pedido.',
            'comision'=>'0'
            ],
        ]);
    

        DB::table('tienda')->insert([
            [
                'abierto'=>true,
                'nombre'=>'Las Vegas',
                'email'=>'example@gmail.com',
                'horario_atencion'=>'Lunes a Domingo de 8:00 a 22:00',
                'imagen_restaurante'=>'',
                'logo_restaurante'=>'',
                'precio_minimo_delivery'=>10,
                'precio_maximo_delivery'=>50,
                'lat'=>0.0,
                'long'=>0.0,
                'radio'=>50,
                'telefono'=>'78579772',
                'ubicacion'=>'Calle de ejemplo Av. Ejemplo #0',
            ],
        ]);

    }
}
/*
        DB::table('')->insert([
            [
            ''=>'',
            ],
        ]);
*/

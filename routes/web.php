<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','TiendaController@get')->name('menu');
Route::get('/cart/product/{id_producto}','TiendaController@getProducto')->name('get_producto');
Route::get('/cart/detalles')->name('get_detalles');
Route::post('/cart/add/{id_producto}','CartController@add')->name('add_detalle');
Route::post('/cart/delete/{nro_detalle}','CartController@delete')->name('delete_detalle');

Route::get('/informacion','TiendaController@getInformacion')->name('information');

Route::get('/cart/user_edit','CartController@getUserEdit')->name('user.get_edit');
Route::post('/cart/user_edit','CartController@editUser')->name('user.edit');
Route::get('/cart/user','CartController@getUser')->name('user');

Route::get('/cart/type_edit','CartController@getTypeEdit')->name('type.get_edit');
Route::post('/cart/type_edit','CartController@editType')->name('type.edit');
Route::post('/cart/ubicacion_edit','CartController@editUbicacion')->name('ubicacion.edit');
Route::get('/cart/type','CartController@getType')->name('type');

Route::get('/cart/paymethod_edit','CartController@getPaymethodEdit')->name('paymethod.get_edit');
Route::post('/cart/paymethod_edit','CartController@editPaymethod')->name('paymethod.edit');
Route::get('/cart/paymethod','CartController@getPaymethod')->name('paymethod');

Route::get('/cart/mostrar','CartController@show')->name('cart.show');
Route::post('/cart/delete_item','CartController@deleteItem')->name('cart.delete_item');
Route::post('/cart/buy','CartController@buy')->name('cart.buy');
Route::get('/cart/vaciar','CartController@trash')->name('cart.trash');

Route::get('/pedidos','CartController@getPedidos')->name('pedidos');
Route::get('/pedidos/estado/{id}','CartController@getPedido')->name('pedido.estado');

//admin

Route::get('/admin/login','AdministradorController@getLogin')->name('admin.view.login');
Route::post('/admin/login','AdministradorController@login')->name('admin.login');
Route::post('/admin/logout','AdministradorController@logout')->name('admin.logout');

route::get('admin/menu','PanelAdministrativoController@getMenuPedidos')->name('admin.menu');
route::get('/admin/pedidos','PanelAdministrativoController@getPedidos')->name('admin.pedidos');
route::get('/admin/pedido/{id}','PanelAdministrativoController@getDetallePedido')->name('admin.detalle_pedido');

Route::get('admin/productos','PanelAdministrativoController@getProducts')->name('admin.products');
Route::get('admin/productos/add','PanelAdministrativoController@getAddProduct')->name('admin.add_product');
Route::post('admin/productos/store','PanelAdministrativoController@storeProduct')->name('admin.store_product');
Route::get('admin/productos/edit/{id}','PanelAdministrativoController@getEditProduct')->name('admin.view_edit_product');
Route::post('admin/productos/edit/{id}','PanelAdministrativoController@editProduct')->name('admin.edit_product');
Route::post('admin/productos/delete/{id}','PanelAdministrativoController@deleteProduct')->name('admin.delete_product');

Route::get('admin/categorias','PanelAdministrativoController@getCategories')->name('admin.categories');
Route::get('admin/categorias/add','PanelAdministrativoController@getAddCategorie')->name('admin.add_categorie');
Route::post('admin/categorias/store','PanelAdministrativoController@storeCategorie')->name('admin.store_categorie');
Route::get('admin/categorias/edit/{id}','PanelAdministrativoController@getEditCategorie')->name('admin.view_edit_categorie');
Route::post('admin/categorias/edit/{id}','PanelAdministrativoController@editCategorie')->name('admin.edit_categorie');
Route::post('admin/categorias/delete/{id}','PanelAdministrativoController@deleteCategorie')->name('admin.delete_categorie');

Route::get('admin/extras','PanelAdministrativoController@getExtras')->name('admin.extras');
Route::get('admin/extras/add','PanelAdministrativoController@getAddExtra')->name('admin.add_extra');
Route::post('admin/extras/store','PanelAdministrativoController@storeExtra')->name('admin.store_extra');
Route::get('admin/extras/edit/{id}','PanelAdministrativoController@getEditExtra')->name('admin.view_edit_extra');
Route::post('admin/extras/edit/{id}','PanelAdministrativoController@editExtra')->name('admin.edit_extra');
Route::post('admin/extras/delete/{id}','PanelAdministrativoController@deleteExtra')->name('admin.delete_extra');


//symlink('../storage/app/public', '/public');
//db 123456
//usuario Passw0rd
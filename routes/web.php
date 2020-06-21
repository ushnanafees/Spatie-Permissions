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

Route::get('/', function () {
    return view('welcome');
});


Route::view('dashboard','dashboard');
Route::view('view_salesperson','view_salesperson');
Route::view('sales_funnel','sales_funnel');
Route::view('add_orders','add_orders');

Route::post('add_orders', 'SalesFunnelController@add_orders');

Route::post('add_funnel', 'SalesFunnelController@add_funnel');
Route::view('login2', 'login2');

//Route::view('add_user','add_user');
//Route::post('add_user', 'SalesFunnelController@add_user');

Route::post('login', 'SalesFunnelController@login');

Route::get('/logout', 'SalesFunnelController@logout');

Route::view('login', 'login');

Route::group(['middleware'=>['customAuth']],function(){
    Route::view('dashboard','dashboard');
    Route::view('view_salesperson','view_salesperson');
    Route::view('sales_funnel','sales_funnel');
    Route::view('add_orders','add_orders');

//    Route::view('add_user','add_user');
//    Route::post('add_user', 'SalesFunnelController@add_user');

   // Route::post('add_new_po','SlaController@add_new_po');
});

Route::get('dashboard','SalesFunnelController@view_sales');

Route::get('view_salesperson', 'SalesFunnelController@view_user');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::post('/login', 'LoginController@login')->name('login');

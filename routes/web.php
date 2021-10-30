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

Route::get('/', 'DashboardController@home');
Route::get('/reviews', 'ReviewsController@show');
Route::post('/reviews', 'ReviewsController@store');
Route::post('/contact_us', 'DashboardController@contact');
Route::get('/flowers', 'FlowersController@index');
Route::get('/flowers/{flower}/order', 'OrdersController@create');
Route::post('orders', 'OrdersController@store');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('', 'DashboardController@dashboard')->name('dashboard');
    Route::get('flowers/create', 'FlowersController@create')->name('add_flowers');
    Route::get('orders/confirm', 'OrdersController@confirmForm');
    Route::post('orders/confirm', 'OrdersController@confirm');
    Route::post('flowers', 'FlowersController@store');
});

require __DIR__ . '/auth.php';

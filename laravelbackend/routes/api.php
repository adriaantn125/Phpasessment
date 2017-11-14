<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(array('prefix' => 'v1', 'before' => 'auth.basic'), function()
{
    Route::resource('products','ProductsControllerApi');
    Route::resource('users','UserControllerApi');
    Route::get('users/find/{name}', 'UserControllerApi@findbyname')->name('findbyname');
    Route::post('users/check', 'UserControllerApi@cool')->name('cool');
    Route::post('transactions/add/{userid}', 'TransactionsControllerApi@store')->name('store');
    Route::get('transactions/{userid}', 'TransactionsControllerApi@index')->name('TransactionIndex');
    Route::post('transactions/buy/{id}/{amount}/{title}','TransactionsControllerApi@buy')->name('buy');
    //Route::resource('users', 'UsersController');
});
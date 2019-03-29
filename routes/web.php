<?php

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

Route::get('/app-secret/create', 'AppSecretController@create')->name('app-secret.create');
Route::post('/app-secret/create', 'AppSecretController@postCreate')->name('app-secret.post.create');

Route::get('/recharge-type/create', 'RechargeTypeController@create')->name('recharge-type.create');
Route::post('/recharge-type/create', 'RechargeTypeController@postCreate')->name('recharge-type.post.create');

Route::get('/withdrawal-type/create', 'WithdrawalTypeController@create')->name('withdrawal-type.create');
Route::post('/withdrawal-type/create', 'WithdrawalTypeController@postCreate')->name('withdrawal-type.post.create');

Route::get('/txn-type/create', 'TxnTypeController@create')->name('txn-type.create');
Route::post('/txn-type/create', 'TxnTypeController@postCreate')->name('txn-type.post.create');

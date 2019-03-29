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

Route::get('/recharge-type-amount/list', 'RechargeTypeAmountController@list')->name('recharge.amount.list')->middleware('jwt.auth');

Route::get('/recharge-type/list', 'RechargeTypeController@list')->name('recharge.type')->middleware('jwt.auth');

Route::post('/txn/caculate-fee', 'TxnController@caculateFee')->middleware('authenticate')->name('cal.fee');

Route::post('/txn/check-limit' , 'TxnController@checkLimit')->name('txn.check.limit');

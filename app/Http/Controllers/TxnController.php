<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\AppException;
use App\Config;

class TxnController extends Controller
{
    public function caculateFee(Request $request) {

    	$request->validate([
    		'amount' => 'required|numeric',
    	]);
   		$percentFee = Config::where('code', Config::FEE)->first();
    	$fee = $request->amount*$percentFee->value/100;

    	return $this->_responseJson([
    		'fee' => $fee,
    		'amount' => $request->amount,
    	]);
    }

    public function checkLimit(Request $request) {

    	$limitTxnDown = Config::where('code', Config::LIMIT_TXN_DOWN)->first();
    	$limitTxnUp = Config::where('code', Config::LIMIT_TXN_UP)->first();

    	return $this->_responseJson([
    		'limit_txn_down' => $limitTxnDown->value,
    		'limit_txn_up' => $limitTxnUp->value,
    	]);
    }
}

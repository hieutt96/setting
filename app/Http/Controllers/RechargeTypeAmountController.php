<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RechargeTypeAmount;

class RechargeTypeAmountController extends Controller
{
    
    public function list() {
    	$models = RechargeTypeAmount::pluck('amount');
    	return $this->_responseJson($models);
    }
}

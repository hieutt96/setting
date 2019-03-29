<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RechargeType;
use Session;

class RechargeTypeController extends Controller
{
    public function create(Request $request) {

    	return view('recharge_type.create');
    }

    public function postCreate(Request $request) {

    	$chargeType = new RechargeType;
    	$chargeType->name = $request->name;
    	$chargeType->save();
    	Session::flash('success', 'Thêm mới thành công');
    	return redirect()->route('recharge-type.create');
    }

    public function list() {
        $models = RechargeType::pluck('id', 'name');
        return $this->_responseJson($models);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WithdrawalType;
use Session;

class WithdrawalTypeController extends Controller
{
    public function create(Request $request) {

    	return view('recharge_type.create');
    }

    public function postCreate(Request $request) {

    	$chargeType = new WithdrawalType;
    	$chargeType->name = $request->name;
    	$chargeType->save();
    	Session::flash('success', 'Thêm mới thành công');
    	return redirect()->route('recharge-type.create');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TxnType;
use Session;

class TxnTypeController extends Controller
{
    public function create(Request $request) {

    	return view('txn_type.create');
    }

    public function postCreate(Request $request) {
    	
    	$txnType = new TxnType;
    	$txnType->name = $request->name;
    	$txnType->save();
    	Session::flash('success', 'Add Success');
    	return redirect()->route('txn-type.create');
    }
}

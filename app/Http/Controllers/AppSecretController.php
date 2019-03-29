<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppSecret;
use App\Libs\myUtils;
use Session;

class AppSecretController extends Controller
{
    
    public function create(Request $request) {

    	return view('app_secret.create');
    }

    public function postCreate(Request $request) {

    	$appSecret = new AppSecret;
    	$appSecret->name = $request->name;
    	$appSecret->app_id = myUtils::randomStr();
    	$appSecret->secret = myUtils::randomStr();
    	$appSecret->save();
    	Session::flash('success', 'Thêm thành công');
    	return redirect()->route('app-secret.create');
    }
}

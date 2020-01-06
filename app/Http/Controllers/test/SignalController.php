<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignalController extends Controller
{
    public function setsignal()
    {
    	$data= request()->get('n_data');
    	$data=base64_decode($data);
    	//加密方式
    	$method='AES-256-CBC';
    	//密钥
    	$key='iimapig';
    	//iv
    	$iv='WUSD8796IDjdxshd';

    	$info=openssl_decrypt($data,$method,$key,OPENSSL_RAW_DATA,$iv);
    	return $info;

    }
}

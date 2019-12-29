<?php

namespace Controller;

use App\Model\GateWayConfig;
use Illuminate\Http\Request;

class GatewayConfigController extends Controller
{
    public function store(Request $request){
        $config =   new GateWayConfig;
        $config->gateway = $request->gateway;
        $config->details = 
        [
            'merchantId'=> $request->merchantId,
            'merchantConfigId'=> $request->merchantConfigId,
            'username'  =>  $request->username,
            'password'   =>  $request->password,
            'key'   =>  $request->key,
            'iv'   =>  $request->iv,
            'callback-url'   =>  $request->callback,
        ];
        $config->save();
     
    }
}

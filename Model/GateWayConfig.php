<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
/**
 * @property array|mixed details
 * @property string      gateway
 */
class GateWayConfig extends Model

{
    

    protected $fillable =   ['gateway', 'details'];

    protected $casts    =   ['details'=>'array'];

    public function getgateway($gateway)
    {

        return  $this->where('gateway',$gateway)->first()->details;
        
    }
  
}

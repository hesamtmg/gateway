<?php

namespace App\Model;

use Illuminate\Support\Facades\Facade;

class GateWayConfigFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'GateWayConfig';
    }
}

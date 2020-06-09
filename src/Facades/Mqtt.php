<?php
/**
 * Created by PhpStorm.
 * User: sean810720
 * Date: 6/9/20
 * Time: 17:16 PM
 */

namespace sean810720\Mqtt\Facades;

use Illuminate\Support\Facades\Facade;

class Mqtt extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Mqtt';
    }

}

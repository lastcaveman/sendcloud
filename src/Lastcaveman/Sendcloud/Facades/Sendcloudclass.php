<?php
/**
 */
namespace Lastcaveman\Sendcloud\Facades;

use Illuminate\Support\Facades\Facade;

class  SendcloudClass extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sendcloud';
    }
}
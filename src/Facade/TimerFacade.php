<?php
/**
 * Created by PhpStorm.
 * User: pooria
 * Date: 12/17/2017
 * Time: 12:52 PM
 */

namespace Pooria\Time\Facade;


use Illuminate\Support\Facades\Facade;

class TimerFacade extends Facade
{
 protected static function getFacadeAccessor()
 {
    return 'MyTimer';
 }
}
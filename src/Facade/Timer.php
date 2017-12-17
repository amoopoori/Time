<?php
/**
 * Created by PhpStorm.
 * User: pooria
 * Date: 12/17/2017
 * Time: 12:35 PM
 */

namespace Pooria\Time\Facade;


use Carbon\Carbon;

class Timer
{
    public $time;
    public function  _construct()
    {
        $this->time=Carbon::now()->setTimezone('Asia/tehran');
    }
    public function HourAgo()
    {
        return $this->time.'1111';
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: pooria
 * Date: 12/16/2017
 * Time: 5:56 PM
 */
Route::get('time','Pooria\Time\Controllers\TimeController@showTime');

Route::get('fac',function ()
{
 // $timer=new Pooria\Time\Facade\Timer();
  //return $timer->HourAgo();

   // return app('MyTimer')->Hourago();

    return MyTimerFacade::Hourago();
});
<?php
/**
 * Created by PhpStorm.
 * User: Clement
 * Date: 23/06/2018
 * Time: 19:09
 */

namespace App\Http\Controllers;


use App\PeriodsProduct;
use AvoRed\Framework\Models\Database\Product;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class CalendarController extends Calendar
{

    public function index(){

     $periodes =    PeriodsProduct::all();

     foreach ($periodes as $periode)
         dd($periode->product());

        $events = [];

        $events[] = Calendar::event(
            'Event One', //event title
            false, //full day event?
            '2015-02-11T0800', //start time (you can also use Carbon instead of DateTime)
            '2015-02-12T0800', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
        );

        $events[] = Calendar::event(
            "Période d'utilisation", //event title
            true, //full day event?
            new \DateTime('2018-06-14'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2018-06-18'), //end time (you can also use Carbon instead of DateTime)
            'stringEventId' //optionally, you can specify an event ID
        );

        $calendar = Calendar::addEvents($events)->setOptions(['lang' => 'fr']);


        return view('calendar.view')->with('calendar', $calendar);
    }

}
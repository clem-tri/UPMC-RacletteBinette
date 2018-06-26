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
     $events = [];

     foreach ($periodes as $periode){
         $produit = Product::where('id', $periode->product_id)->first();

         $events[] = Calendar::event(
             $produit->name, //event title
             true, //full day event?
             new \DateTime($periode->date_db), //start time (you can also use Carbon instead of DateTime)
             new \DateTime($periode->date_fin), //end time (you can also use Carbon instead of DateTime)
             'stringEventId' //optionally, you can specify an event ID,
             ,
             ['textColor' => 'white']
         );
     }

        $calendar = Calendar::addEvents($events)->setOptions(['lang' => 'fr']);


        return view('calendar.view')->with('calendar', $calendar);
    }

}
<?php

namespace App\Http\Controllers;

use App\PeriodsProduct;
use AvoRed\Framework\Models\Database\Product;
use AvoRed\Framework\Models\Contracts\ProductInterface;
use Illuminate\Http\Request;
use AvoRed\Framework\Models\Contracts\ProductDownloadableUrlInterface;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class ProductViewController extends Controller
{
    /**
     * Product Repository
     * @var \AvoRed\Framework\Models\Repository\ProductRepository
     */
    protected $repository;

     /**
     * Product Downloadable Url Repository
     * @var \AvoRed\Framework\Models\Repository\ProductDownloadableUrlRepository
     */
    protected $downRep;

    public function __construct(ProductInterface $repository , ProductDownloadableUrlInterface $downRep)
    {
        $this->repository   = $repository;
        $this->downRep      = $downRep;
    }

    public function view($slug)
    {
        $product = $this->repository->findBySlug($slug);
        $title = (!empty($product->meta_title)) ?
                                            $product->meta_title :
                                            $product->name;

        $description = (!empty($product->meta_description)) ?
                                        $product->meta_description :
                                        substr($product->description, 0, 255);

        $periode = PeriodsProduct::where('product_id', $product->id)->first();
        $calendar = null;

        if($periode != null ){
            $event[] = Calendar::event(
                $product->name, //event title
                true, //full day event?
                new \DateTime($periode->date_db), //start time (you can also use Carbon instead of DateTime)
                new \DateTime($periode->date_fin), //end time (you can also use Carbon instead of DateTime)
                'stringEventId' //optionally, you can specify an event ID,
                ,
                ['textColor' => 'white',

                ]
            );

            $calendar = Calendar::addEvents($event)->setOptions(['lang' => 'fr', 'defaultDate' => $periode->date_db]);
        }


        return view('product.view')
                                ->with('product', $product)
                                ->with('title', $title)
                                ->with('description', $description)
                                ->with('calendar', $calendar);
    }

    public function downloadDemoProduct(Request $request) {

        $downModel  = $this->downRep->findByToken($request->get('product_token'));

        $path = storage_path('app/public' . DIRECTORY_SEPARATOR . $downModel->demo_path);
        return response()->download($path);

    }

    public function downloadMainProduct(Request $request) {

        $downModel  = $this->downRep->findByToken($request->get('product_token'));

        $path = storage_path('app/public' . DIRECTORY_SEPARATOR . $downModel->main_path);
        return response()->download($path);

    }
}

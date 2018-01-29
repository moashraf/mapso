<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boats;
use App\Slider;
use App\Sitesettings;
use App\Singleboatgallery;
use DB;

use App\Boats_cat;

class boatsController extends Controller
{

    public function References()
    {

        $slider = Slider::all();
        $References = Boats::limit(20)->get();
        $flight = Sitesettings::limit(1)->get();
        return view('References', ['References' => $References, 'getallnews' => $flight, 'slider' => $slider]);

    }

    /****************************************************************************************************/

    public function filters($id)
    {
        $boats_cat = DB::table('boats_cat')->pluck('boats_cat_text');

        $Brand = "";
        if (isset($_GET["Series"]))
        {
            $Brand = htmlspecialchars($_GET["Series"]);
        }
        $SingleBoat = Boats::where('id', "$id")->get();
        $cat = Boats::where('Boatscat', "$Brand")->paginate(2);
        $cat->appends(array(
            'Series' => "$Brand",
            'date-to' => "fgf",
        ));
        $slider = Slider::all();
        $flight = Sitesettings::limit(1)->get();

        return view('SingleBoat', ['SingleBoat' => $SingleBoat, 'boats_cat' => $boats_cat, 'getallnews' => $flight, 'slider' => $slider, 'cat' => $cat]);
    }

    /****************************************************************************************************/

    public function get1($id , $getcat=null)
    {
if($getcat!==null){

         $cat = Boats::where('Boatscat', "$getcat")->paginate(2);
        if($cat->isEmpty()) { return back(); }
         $SingleBoat = Boats::where('Boatscat', "$getcat")->first();
  }
 else  {
  $SingleBoat = Boats::where('id', "$id")->first();
 //dd(  $SingleBoat);
        $getcat = ($SingleBoat->Boatscat);
        $cat = Boats::where('Boatscat', "$getcat")->paginate(2);
}
             
        $flight = Sitesettings::limit(1)->get();
        $all_cat = Boats_cat::limit(15)->get();
        return view('SingleBoat',
         [
         'SingleBoat' => $SingleBoat, 
         'getallnews' => $flight, 
         'cat' => $cat,
         'all_cat' => $all_cat,
         ]);

    }

    /****************************************************************************************************/


    public function home()
    {

         $Boats = Boats::paginate(12);
        $flight = Sitesettings::limit(1)->get();
        return view('boats', ['Boats' => $Boats, 'getallnews' => $flight ]);

    }

}


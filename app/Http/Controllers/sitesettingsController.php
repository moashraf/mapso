<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitesettings;
use App\Slider;
use App\Brand;
use App\Boats;
use App\Propulsion;
use App\News;
use App\Testimonial;
 
class sitesettingsController extends Controller
{

    public function home()
    {
        $slider = Slider::limit(2)->get();
        $Brand = Brand::limit(6)->get();
        $Boats = Boats::limit(5)->get();
        $Propulsion = Propulsion::limit(4)->get();
        $flight = Sitesettings::limit(1)->get();
        $News = News::limit(5)->get();
        $Testimonial = Testimonial::limit(3)->get();

        //$data = DB::table('Boats')->pluck('Boatsname');
        return view('homepage',
         [
          'getallnews' => $flight, 
         'slider' => $slider, 
         'Brand' => $Brand, 
         'Boats' => $Boats, 
         'Propulsion' => $Propulsion,
          'News' => $News, 
          'Testimonial' => $Testimonial]);

    }

}


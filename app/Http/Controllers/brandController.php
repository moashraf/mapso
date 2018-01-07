<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Brand;
 use App\Sitesettings;
 use App\Slider;

class brandController extends Controller
{

 

	
	public function home ()
    {
      $slider =   Slider::all();

  $BRANDS =   Brand::limit(20)->get();

    $flight =   Sitesettings::all();

     return view('BRANDS', ['BRANDS' => $BRANDS ,'getallnews' => $flight , 'slider' => $slider]);

  

  
 
    }
	
}

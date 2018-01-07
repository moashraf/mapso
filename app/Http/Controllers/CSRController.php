<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
   use App\Slider;
 use App\Sitesettings;

class CSRController extends Controller
{

 public function  CSR ()
    {
  
 $slider =   Slider::all();

 
    $flight =   Sitesettings::all();

     return view('CSR', [ 'getallnews' => $flight , 'slider' => $slider]);

  
 
    }
	
	
 
	
}

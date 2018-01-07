<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
   use App\Slider;
 use App\Sitesettings;

class ProjectsController extends Controller
{

 public function Projects ()
    {
  
 $slider =   Slider::all();

 
    $flight =   Sitesettings::all();

     return view('Projects', [ 'getallnews' => $flight , 'slider' => $slider]);

  
 
    }
	
	
 
	
}

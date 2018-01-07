<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  use App\Sitesettings;
  use App\Services;

class ServicesController extends Controller
{

 public function Services ()
    {
  
    $Services =   Services::limit(20)->get();

    $flight =   Sitesettings::all();

     return view('Services', [ 'getallnews' => $flight , 'Services' => $Services  ]);

  
 
    }
	
	
 
	
}

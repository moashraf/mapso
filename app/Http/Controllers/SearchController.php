<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Boats;
 use App\News;
  use DB;
  use App\Slider;
 use App\Sitesettings;
class SearchController extends Controller
{
 
    
    
/****************************************************************************************************/



    
    
    	public function search ()
    {
 
		
 		

$q = $_GET["q"];
   $cat = Boats::where('Boatsname','LIKE','%'.$q.'%')->orWhere('Boatscat','LIKE','%'.$q.'%')->orWhere('Application','LIKE','%'.$q.'%')                ->limit(10) ->get();
   $News=  News::where('Title','LIKE','%'.$q.'%')->orWhere('content','LIKE','%'.$q.'%')  ->limit(10)->get();
   $flight =   Sitesettings::all();
            
  
        return view('search', ['getallnews' => $flight, 'cat' => $cat, 'News' => $News ]);

 
 


    }
    
    
	
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Boats;
 use App\Slider;
 use App\Sitesettings;
 use App\Singleboatgallery	;
  use DB;

class boatsController extends Controller
{

 public function References ()
    {
  
 $slider =   Slider::all();

  $References =   Boats::limit(20)->get();

    $flight =   Sitesettings::all();

     return view('References', ['References' => $References ,'getallnews' => $flight , 'slider' => $slider]);

  
 
    }

    /****************************************************************************************************/

  

	public function filters ($id)
    {
          $boats_cat =  DB::table('boats_cat')->pluck('boats_cat_text');

        
        $Brand=""; 
        

	if(isset($_GET["Series"]))	{ $Brand=   htmlspecialchars($_GET["Series"]);}
   $SingleBoat =   Boats::where('id', "$id")->get();
    $cat =   Boats::where('Boatscat', "$Brand")->paginate(2); 
   $cat->appends(array(
    'Series' => "$Brand",
    'date-to'   => "fgf",));
  $slider =   Slider::all();
    $flight =   Sitesettings::all();

     return view('SingleBoat', ['SingleBoat' => $SingleBoat , 'boats_cat' => $boats_cat ,'getallnews' => $flight , 'slider' => $slider , 'cat' => $cat]);

  
 
    }	

    
    
    /****************************************************************************************************/

    
	public function get1 ($id)
    {


   $slider =   Slider::all();
  $SingleBoat =   Boats::where('id', "$id")->get();
  $getcat=($SingleBoat[0]->Boatscat)  ;
   $cat =   Boats::where('Boatscat', "$getcat")->paginate(2); 
  $flight =   Sitesettings::all();

  return view('SingleBoat', ['SingleBoat' => $SingleBoat   ,'getallnews' => $flight , 'slider' => $slider , 'cat' => $cat]);

  
 
    }
	
    
    
    /****************************************************************************************************/

    
    
		public function getcat ( $cat)
    {

      
    $boats_cat =  DB::table('boats_cat')->pluck('boats_cat_text');
    $slider =   Slider::all();
    $cat = Boats::where('Boatscat', "$cat")->paginate(2); 
    $getid=($cat[0]->id)  ;
    $SingleBoat =   Boats::where('id', "$getid")->get(); 
    $flight =   Sitesettings::all();
    $nodata="No data";
     return view('SingleBoat', ['SingleBoat' => $SingleBoat ,'getallnews' => $flight ,'boats_cat' => $boats_cat , 'slider' => $slider , 'cat' => $cat, 'nodata' => $nodata]);

  
 
    }
	
	/****************************************************************************************************/

	public function home ()
    {
  
 $slider =   Slider::all();

  $Boats =   Boats::paginate(12);

    $flight =   Sitesettings::all();

     return view('boats', ['Boats' => $Boats ,'getallnews' => $flight , 'slider' => $slider]);

  
 
    }
	
}

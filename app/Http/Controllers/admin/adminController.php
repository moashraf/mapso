<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Boats;
 use App\Slider;
 use App\Sitesettings;
 use App\Singleboatgallery	;
 use App\News;
 use App\Brand;
  use DB;

  use App\Propulsion;
class adminController extends Controller
{
        /*************************************** *********** ************************************************************************/

 public function Sitesettings () 
    {
     $Sitesettings =   Sitesettings::all();
   $Boat =   Boats::get()->count();
      $News =   News::get()->count();
      $Brand =   Brand::get()->count();
      $Propulsion =   Propulsion::get()->count();

//dd( $Boat);
     return view('admin.home', [ 'Sitesettings' => $Sitesettings 
	 ,'News' => $News ,
	 'Brand' => $Brand ,
	 'Propulsion' => $Propulsion,
	 'Boat' => $Boat ]);

      }
    

 
 
 }
	























	
 
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\News;
 use App\Slider;
 use App\Sitesettings;
class newsController extends Controller
{


 public function shownews ()
    {
  
  $flight = new News();

        $flight->Title = 'dsd';
		        $flight->content = 'dsd';

		        $flight->cat = 'dsd';

        $flight->save();
  
 
    }
public function getallnews ()
    {
  
  
  $slider =   Slider::all();

   $news =   News::paginate(12); 
    $flight =   Sitesettings::all();

     return view('news', ['news' => $news ,'getallnews' => $flight , 'slider' => $slider]);
 }
	
	public function home ($id)
    {
  
   $slider =   Slider::all();

  $news =   News::where('id', "$id")->get();
 $getcat=($news[0]->cat)  ;

   $cat =   News::where('cat', "$getcat")->paginate(3); 
			   
    $flight =   Sitesettings::all();

     return view('Singlenews', ['news' => $news ,'getallnews' => $flight , 'slider' => $slider , 'cat' => $cat]);
	 
	 

  
 
    }
	
}

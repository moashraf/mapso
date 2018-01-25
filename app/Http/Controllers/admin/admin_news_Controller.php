<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
  use App\Sitesettings;
  use App\News;
   use DB;
 class admin_news_Controller extends Controller
{ 
    
    
 	
	   public function update_News (Request $request,$id)
    {
	   
  try {
      
                $Sitesettings =   Sitesettings::all();
                $Boats = News::where('id', $id)->first();
                return view('admin.news_update', [ 'Sitesettings' => $Sitesettings ,'Boats' => $Boats ]);

       
}  
        catch (customException $e) {
			// echo $e->errorMessage();
				return back();

			}
				return back();
	
	
	
	}
	
	    /*********************************************************************************************************************************/

	
     public function update_news_save (Request $request,$id)
    {
   try {
    
	    /***** logo****/

         if($request->file('photo')!==NULL){ 

 $namelogo = "photo".rand();

 $imageNamelogo = $namelogo . '.' . 
        $request->file('photo')->getClientOriginalExtension();

    $request->file('photo')->move(
        base_path() . '/public/wp-content/uploads/2017/05/', $imageNamelogo
    );

}
      
             $flight = News::find($id);

        $flight->cat = $request->cat;
         $flight->content = $request->details;
        $flight->Title = $request->Title;
       if($request->file('photo')!==NULL){    $flight->img = "wp-content/uploads/2017/05/$imageNamelogo" ; }
        $flight->save();
}  
        catch (customException $e) {
  echo $e->errorMessage();
     //return back();

}
    return back();

  
 
    }
    
    /****************************************************************************************************************/
    
    	 public function add_news_save (Request $request)
    {
   
  try {
    
 $namelogo = "photo".rand();

 $imageNamelogo = $namelogo . '.' . 
        $request->file('photo')->getClientOriginalExtension();

    $request->file('photo')->move(
        base_path() . '/public/wp-content/uploads/2017/05/', $imageNamelogo
    );


      
        $flight = new News;
        $flight->cat = $request->cat;
        $flight->img = "wp-content/uploads/2017/05/$imageNamelogo";
        $flight->content = $request->details;
        $flight->Title = $request->Title;

   
      $flight->save();
   
         
      if( $request->subscribe !=null){ 
      app('App\Http\Controllers\SendMailController')->news_send_Mail( $flight->content, $flight->img, $flight->Title, $flight->id);
  }
      
       
}  
        catch (customException $e) {
  echo $e->errorMessage();
     //return back();

}
    return back();

  
 
    }
    
        /**************************************************************************************************************************/

	 public function add_news ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
        return view('admin.news_add', [ 'Sitesettings' => $Sitesettings  ]);

  
 
    }
            /**************************************************************************************************************************/

		 public function All_news ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
     $Boats =  News::paginate(10);
 

     return view('admin.all_news', [ 'Sitesettings' => $Sitesettings,'Boats' => $Boats ]);

  
 
    }
	
	
	            /**************************************************************************************************************************/

 public function destroy($id) { 
     $nerd = News::find($id);
    $nerd->delete();
  
     return back(); 
 
 
 }
 
 
 }
	























	
 
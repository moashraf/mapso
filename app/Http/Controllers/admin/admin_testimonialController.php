<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
  use App\Sitesettings;
  use App\Testimonial;
 
class admin_testimonialController extends Controller
{ 
    
    
 	
	   public function update_testimonial (Request $request,$id)
    {
	   
  try {
      
                $Sitesettings =   Sitesettings::all();
                $Boats = Testimonial::where('id', $id)->first();
                return view('admin.Testimonial_update', [ 'Sitesettings' => $Sitesettings ,'Boats' => $Boats ]);

       
}  
        catch (customException $e) {
			// echo $e->errorMessage();
				return back();

			}
				return back();
	
	
	
	}
	
	    /*********************************************************************************************************************************/

	
     public function update_testimonial_save (Request $request,$id)
    {
   try {
    
	    /***** logo****/

         if($request->file('photo')!==NULL){ 

 $namelogo = "testimonial".rand();

 $imageNamelogo = $namelogo . '.' . 
        $request->file('photo')->getClientOriginalExtension();

    $request->file('photo')->move(
        base_path() . '/public/wp-content/uploads/2017/05/', $imageNamelogo
    );


}
      
             $flight = Testimonial::find($id);
        $flight->testimonial_tag = $request->tag;
       $flight->position = $request->position;
        $flight->company = $request->company;
      $flight->testimonial_text = $request->details; 

       
       if($request->file('photo')!==NULL){    $flight->testimonialimg = "wp-content/uploads/2017/05/$imageNamelogo" ; }
        $flight->save();
}  
        catch (customException $e) {
  echo $e->errorMessage();
     //return back();

}
    return back();

  
 
    }
    
    /****************************************************************************************************************/
    
    	 public function add_testimonial_save (Request $request)
    {
   
  try {
    
 $namelogo = "testimonial".rand();

 $imageNamelogo = $namelogo . '.' . 
        $request->file('photo')->getClientOriginalExtension();

    $request->file('photo')->move(
        base_path() . '/public/wp-content/uploads/2017/05/', $imageNamelogo
    );


      
        $flight = new Testimonial;
        $flight->testimonial_tag = $request->tag;
       $flight->position = $request->position;
        $flight->company = $request->company;
      $flight->testimonial_text = $request->details; 
        $flight->testimonialimg = "wp-content/uploads/2017/05/$imageNamelogo";
       
   
      $flight->save();
   
      
       
}  
        catch (customException $e) {
 // echo $e->errorMessage();
    return back();

}
    return back();

  
 
    }
    
        /*********************************************** add_testimonial**************** *************************/

	 public function add_testimonial ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
        return view('admin.testimonial_add', [ 'Sitesettings' => $Sitesettings  ]);

  
 
    }
            /**************************************************************************************************************************/

		 public function All_testimonial ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
     $Boats =  Testimonial::paginate(10);
 

     return view('admin.all_testimonial', [ 'Sitesettings' => $Sitesettings,'Boats' => $Boats ]);

  
 
    }
	
	
	            /**************************************************************************************************************************/

 public function destroy($id) { 
     $nerd = Testimonial::find($id);
    $nerd->delete();
  
     return back(); 
 
 
 }
 
 
 }
	























	
 
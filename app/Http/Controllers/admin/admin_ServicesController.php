<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
  use App\Sitesettings;
   use App\Services;

 class admin_ServicesController extends Controller
{ 
    
    
 	
	   public function edit ($id)
    {
	   
  try {
      
                $Sitesettings =   Sitesettings::all();
                $Boats = Services::where('id', $id)->first();
                return view('admin.Services_update', [ 'Sitesettings' => $Sitesettings ,'Boats' => $Boats ]);

       
}  
        catch (customException $e) {
			// echo $e->errorMessage();
				return back();

			}
				return back();
	
	
	
	}
	
	    /*********************************************************************************************************************************/

	
     public function update  (Request $request,$id)
    {
   try {
    
	    /***** logo****/

         if($request->file('photo')!==NULL){ 

 $namelogo = "Servicesphoto".rand();

 $imageNamelogo = $namelogo . '.' . 
        $request->file('photo')->getClientOriginalExtension();

    $request->file('photo')->move(
        base_path() . '/public/wp-content/uploads/2017/05/', $imageNamelogo
    );

}
      
             $flight = Services::find($id);

        $flight->titel_Services = $request->Title;
         $flight->details = $request->details;
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
    
    	 public function store  (Request $request)
    {
   
  try {
    
 $namelogo = "Services".rand();

 $imageNamelogo = $namelogo . '.' . 
        $request->file('photo')->getClientOriginalExtension();

    $request->file('photo')->move(
        base_path() . '/public/wp-content/uploads/2017/05/', $imageNamelogo
    );


      
        $flight = new Services;
        $flight->titel_Services = $request->Title;
        $flight->img = "wp-content/uploads/2017/05/$imageNamelogo";
        $flight->details = $request->details;
 
   
      $flight->save();
          
}  
        catch (customException $e) {
 // echo $e->errorMessage();
    return back();

}
    return back();

  
 
    }
    
        /**************************************************************************************************************************/

	 public function create ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
        return view('admin.Services_add', [ 'Sitesettings' => $Sitesettings  ]);

  
 
    }
            /**************************************************************************************************************************/

		 public function index ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
     $Services =  Services::paginate(10);
 

     return view('admin.all_Services', [ 'Sitesettings' => $Sitesettings,'Services' => $Services ]);

  
 
    }
	
	
	            /**************************************************************************************************************************/

 public function destroy($id) { 
     $nerd = Services::find($id);
    $nerd->delete();
  
     return back(); 
 
 
 }
 
 
 }
	























	
 
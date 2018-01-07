<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request; 
  use App\Sitesettings;
 use App\Subscribe	;

class admin_SubscribeController extends Controller
{
    
    
    	 public function add_subscribe_save (Request $request)
    {
  
  
  try {
      
         $flight = new Subscribe;

        $flight->email = $request->email;
        $flight->save();
            
}  
        catch (customException $e) {
    return back();

}
    return back();

  
 
    }
    
        /*********************************************add_Boats_cat***********************************************************/

	 public function add_subscribe ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
       return view('admin.subscribe_add', [ 'Sitesettings' => $Sitesettings]);

  
 
    }
            /*************************************************All_Boats_cat******************************************************/

		 public function All_subscribe ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
     $Boats =  Subscribe::paginate(10);
 

     return view('admin.all_subscribe', [ 'Sitesettings' => $Sitesettings,'Boats' => $Boats ]);

  
 
    }
	
	
	            /**************************************************************************************************************************/

 public function destroy($id) { 
     $nerd = Subscribe::find($id);
     $nerd->delete();
       return back(); }
 
 
 }
	























	
 
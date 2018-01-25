<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request; 
 use App\Boats;
 use App\Sitesettings;
 use App\Boats_cat	;

class admin_catt_boatsController extends Controller
{
    
    
    	 public function add_Boats_cat_save (Request $request)
    {
  
  
  try {
      
         $flight = new Boats_cat;

        $flight->boats_cat_text = $request->Title;
        $flight->save();
            
}  
        catch (customException $e) {
    return back();

}
    return back();

  
 
    }
    
        /*********************************************add_Boats_cat***********************************************************/

	 public function add_Boats_cat ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
       return view('admin.boots_cat_add', [ 'Sitesettings' => $Sitesettings]);

  
 
    }
            /*************************************************All_Boats_cat******************************************************/

		 public function All_Boats_cat ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
     $Boats =  Boats_cat::paginate(10);
 

     return view('admin.all_Boats_cat', [ 'Sitesettings' => $Sitesettings,'Boats' => $Boats ]);

  
 
    }
	
	
	            /**************************************************************************************************************************/

 public function destroy($id) { 
     $nerd = Boats_cat::find($id);
     $nerd->delete();
       return back(); }
 
 
 }
	























	
 
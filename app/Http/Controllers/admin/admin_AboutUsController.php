<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
  use App\Sitesettings;
  use App\AboutUs;
  class admin_AboutUsController extends Controller
{ 
     public function add_About_Us_save (Request $request)
    {
   
  try {

        $flight = new AboutUs;
        $flight->tit = $request->Title;
        $flight->percentage = $request->percentage;
        $flight->number = $request->number;
          $flight->save();
          
}  
        catch (customException $e) {
 // echo $e->errorMessage();
     return back();

}
    return back();

  
 
    }
    
        /*********************************************************    Brand   *****************************************************************/

	 public function add_About_Us ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
        return view('admin.AboutUs_add', [ 'Sitesettings' => $Sitesettings  ]);

  
 
    }
            /**************************************************************************************************************************/

		 public function All_About_Us ()
    {
       $Sitesettings =   Sitesettings::all();
     $Boats =  AboutUs::paginate(10);
      return view('admin.all_About_Us', [ 'Sitesettings' => $Sitesettings,'Boats' => $Boats ]);
  
    }
	
	
	            /**************************************************************************************************************************/

 public function destroy($id) { 
     $nerd = AboutUs::find($id);
    $nerd->delete();
  
     return back(); 
 
 
 }
 
 
 }
	























	
 
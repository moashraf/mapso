<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
  use App\Sitesettings;
  use App\ContactUs;

  class admin_ContactUs_Controller   extends Controller
{   
      
      
      public function add_Contact_Us_save (Request $request)
    {
   
  try {
    
 
        $flight = new ContactUs;
        $flight->map_link = $request->map;
         $flight->title_c = $request->Title;
        $flight->titel_type = $request->type;
        $flight->addr = $request->address;
         $flight->tel = $request->tel;
        $flight->fax = $request->fax;
        $flight->mail = $request->mail;

   
      $flight->save();
    
      
       
}  
        catch (customException $e) {
  //echo $e->errorMessage();
   return back();

}
    return back();

  
 
    }
    
        /**************************************************************************************************************************/

	 public function add_Contact_Us ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
        return view('admin.Contact_Us_add', [ 'Sitesettings' => $Sitesettings  ]);

  
 
    }
            /**************************************************************************************************************************/

		 public function All_Contact_Us ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
     $Boats =  ContactUs::paginate(10);
 

     return view('admin.all_Contact_Us', [ 'Sitesettings' => $Sitesettings,'Boats' => $Boats ]);

  
 
    }
	
	
	            /**************************************************************************************************************************/

 public function destroy($id) { 
     $nerd = ContactUs::find($id);
    $nerd->delete();
  
     return back(); 
 
 
 }
 
 
 }
	























	
 
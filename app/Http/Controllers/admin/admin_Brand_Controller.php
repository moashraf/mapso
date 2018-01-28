<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
  use App\Sitesettings;
  use App\Brand;
   use DB;
 class admin_Brand_Controller extends Controller
{ 
     public function store (Request $request)
    {
   
  try {
    
 $namelogo = "photologo".rand();

 $imageNamelogo = $namelogo . '.' . 
        $request->file('photo')->getClientOriginalExtension();

    $request->file('photo')->move(
        base_path() . '/public/wp-content/uploads/2017/05/', $imageNamelogo
    );


      
        $flight = new Brand;
        $flight->logolink = "wp-content/uploads/2017/05/$imageNamelogo";
        $flight->imgurl = "wp-content/uploads/2017/05/$imageNamelogo";
        $flight->save();
          
}  
        catch (customException $e) {
 // echo $e->errorMessage();
     return back();

}
    return back();

  
 
    }
    
        /*********************************************************    Brand   *****************************************************************/

	 public function create ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
        return view('admin.Brand_add', [ 'Sitesettings' => $Sitesettings  ]);

  
 
    }
            /**************************************************************************************************************************/

		 public function index ()
    {
       $Sitesettings =   Sitesettings::all();
     $Boats =  Brand::paginate(10);
      return view('admin.all_Brand', [ 'Sitesettings' => $Sitesettings,'Boats' => $Boats ]);
  
    }
	
	
	            /**************************************************************************************************************************/

 public function destroy($id) { 
     $nerd = Brand::find($id);
    $nerd->delete();
  
     return back(); 
 
 
 }
 
 
 }
	























	
 
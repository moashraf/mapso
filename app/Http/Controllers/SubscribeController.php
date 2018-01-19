<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 use App\Subscribe;

class SubscribeController extends Controller
{ 
  
    public function Subscribe (Request $request)
    {
   
 
   
    if(isset($request["Subscribe_email"]) & $request->ajax() )  { 
  
  $Subscribe_email=   htmlspecialchars($request["Subscribe_email"]);
      $user = Subscribe::where('email',$Subscribe_email)->first();
if (is_null($user)) {
   
    $Subscribe = new Subscribe();  
 
 $Subscribe->email = $Subscribe_email;
  $Subscribe->save();

   return "Done_  $Subscribe->email ";
   // return redirect("main?Done________");
}else{
 return "email______is_____exists ";
    //return redirect("main?email______is_____exists");

    
}

    
      }

   
 
    }
  
  
 
  
}

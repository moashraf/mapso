<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Mail;
 use App\Subscribe	;

 
class SendMailController extends Controller
{
    /**
     * Show the application sendMail.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMail(Request $request)
    { 
        	if ($request["your-email"]!=null) 	{ 
         	    
        	     $youremail=   htmlspecialchars($request["your-email"]);
        	    $phone=   htmlspecialchars($request["phone"]);
        	    $name=   htmlspecialchars($request["your-name"]);

        	    $messageForm=   htmlspecialchars($request["messageForm"]);

              
                
 $to = "mohamed.be4em@gmail.com";
$subject = "mapso email";

$message = "
<html>
 
<body>
<p> mapso.com </p>
<table style='
    border: solid 1px #394a58;
' >
<tr style='
    background: #a4a4a5;
'>
<th>Firstname</th>
<th>email</th>
<th>phone</th>
<th>message</th>
</tr>
<tr style='
    background: linear-gradient(141deg, #ffffff 0%, rgba(31, 200, 219, 0.42) 51%, #f3f3f3 75%);
'>
<td>$name</td>
<td>$youremail</td>
<td>$phone</td>
<td>$messageForm</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
// More headers
$headers .= 'From: <mapso@mapso.com>' . "\r\n";
 
mail($to,$subject,$message,$headers);
    return redirect("main?email______________________sent___________succesfully________________");

}else{
 
    return redirect("main?email______failed__________to_________send______________");

    
}


     }
/*********************************************************************************************/
 
 public function news_send_Mail( $content,$img,$Title,$id)
    { 
     
     
     
        	if ($Title !=null) 	{ 
                 
                
    $data=   Subscribe::all();
                 foreach ( $data as $value)
                 {
          $to = $value->email; 
$subject = "mapso email";

$message = "
<html>
 
<body>

<a href='https://be4em.info/laravel/blog/public/Singlenews/$id'> 

<p> mapso.com </p>
 <h1 style=' text-align: center; ' > $Title </h1>
  
  
  <p   style=' text-align: center; ' > $content </p>

 <p   style=' text-align: center; ' >

  <img style='     border-radius: 15px;
    width: 300px;
    height: 300px; ' src='https://be4em.info/laravel/blog/public/$img'  > </td>
  </p></a >
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
// More headers
$headers .= 'From: <mapso@mapso.com>' . "\r\n";
 
mail($to,$subject,$message,$headers);
 
                
                
            }
                
                
                 return back();
}
     
     else{
 return back();
 
    
}


     }
    
    
    
}


 
<?php

use Illuminate\Database\Seeder;
use App\Boats;
class Boatsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  



  for ($i=0; $i <10 ; $i++) { 
$add=new Boats;

$add->Boatscat='2';
$add->Boatsname="   NanoAir tag".rand(0,9);
$add->Boatsimg="wp-content/uploads/2017/05/Layer-18.jpg";
$add->Boats_logo="wp-content/uploads/2017/05/logo.png";
$add->Hull_Material="   Aluminium 5083
".rand(0,9);
$add->Length_Overall="  6.90 m	";
$add->Beam_Overall="  2.55 m (With fender)
" ;
$add->Draught="  0.75 m	";
$add->Max_Speed="  10 kn	"  ;
$add->Displacement="  2.8 t (Light ship)
" ;
$add->details_boats="  The NanoAir is a heavy duty versatile aluminium workboat with a Hatz air-cooled inboard diesel engine, with no thru-hull penetrations. Can be started outside the water and can operate in mud, oil slicks, or heavily contaminated waters. Designed by Lomocean of New Zealand
".rand(0,9);
$add->VIDO="  https://www.youtube.com/watch?v=HmpsOQuZ8So";
$add->DataSheet="  database".rand(0,9);
$add->Application="  Application".rand(0,9);

$add->save();
}



    }
}

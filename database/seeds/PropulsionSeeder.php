<?php

use Illuminate\Database\Seeder;
use App\Propulsion;
class PropulsionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <10 ; $i++) { 
$add=new Propulsion;
 
$add->propulsionname="Prop drive";
$add->propulsionimg="wp-content/uploads/2017/05/Layer-18.jpg";
$add->propulsionslogin="Typically supplied";
$add->propulsiondesc="Prop drive
Typically supplied with steering system as well, suitable for low to medium speed application where Fishing boat and Micromega.";
  
$add->save();
}
    }
}

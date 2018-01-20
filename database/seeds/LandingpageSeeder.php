<?php

use Illuminate\Database\Seeder;
use App\Landingpage;
class LandingpageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <4 ; $i++) { 
$add=new Landingpage;
 
$add->mainimg="wp-content/uploads/2017/05/l2.png";
$add->subimg="wp-content/uploads/2017/05/l2sub.png";
$add->tit="Components";
$add->sub_tit="Egypt";
$add->titlin2="Service";
$add->link="main"; 
 
$add->save();
}
    }
}

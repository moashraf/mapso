<?php

use Illuminate\Database\Seeder;
use App\Boats_cat;
class Boats_catSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <4 ; $i++) { 
$add=new Boats_cat;
 
$add->boats_cat_text="NanoAir ";
 
 

$add->save();
}
    }
}

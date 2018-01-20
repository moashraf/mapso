<?php

use Illuminate\Database\Seeder;
use App\Aboutus;
class AboutusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <4 ; $i++) { 
$add=new Aboutus;
 
$add->tit="VESSELS";
$add->number="80";
$add->percentage="80";
 

$add->save();
}
    }
}

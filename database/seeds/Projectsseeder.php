<?php

use Illuminate\Database\Seeder;
use App\projects;
class Projectsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <10 ; $i++) { 
$add=new projects;

$add->Year="2015";
$add->Boat_Type="   Suez Canal Authority	".rand(0,9);
$add->Yard_Name="   Port Said Engineering works	".rand(0,9);
$add->Series="   47 - CML	".rand(0,9);
$add->Boat_Name="   Fahd 1	".rand(0,9);
$add->Application="     Boat
".rand(0,9);


$add->save();
}
    }
}

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

$add->Year=rand(0,9);
$add->Boat_Type="   dis".rand(0,9);
$add->Yard_Name="   dis".rand(0,9);
$add->Series="   dis".rand(0,9);
$add->Boat_Name="   dis".rand(0,9);
$add->Application="   Application".rand(0,9);


$add->save();
}
    }
}

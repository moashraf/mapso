<?php

use Illuminate\Database\Seeder;
use App\Boats;

class boats_seeder extends Seeder
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

$add->Boatscat='1';
$add->Boatsname="   database".rand(0,9);
$add->Boatsimg="   databasedatabase".rand(0,9);
$add->Boats_logo="   databasedatabasedatabase".rand(0,9);
$add->Hull_Material="   tabase".rand(0,9);
$add->Length_Overall="  database".rand(0,9);
$add->Beam_Overall="  database".rand(0,9);
$add->Draught="  database".rand(0,9);
$add->Max_Speed="  database".rand(0,9);
$add->Displacement="  database".rand(0,9);
$add->details_boats="  database".rand(0,9);
$add->VIDO="  database".rand(0,9);
$add->DataSheet="  database".rand(0,9);
$add->Application="  database".rand(0,9);

$add->save();
}



    }
}

<?php

use Illuminate\Database\Seeder;
use App\Subscribe;
class SubscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <1 ; $i++) { 
$add=new Subscribe;
 
$add->email="mohamed.be4em@gmail.com";
 
 
 

$add->save();
}
    }
}

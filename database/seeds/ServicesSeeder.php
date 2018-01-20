<?php

use Illuminate\Database\Seeder;
use App\Services;
class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <10 ; $i++) { 
$add=new Services;
 
$add->titel_Services="Services";
$add->details="We are authorized service dealers for the following Services ";
$add->img="wp-content/uploads/2017/05/Layer-18.jpg"; 

$add->save();
}
    }
}

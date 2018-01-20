<?php

use Illuminate\Database\Seeder;
use App\News;
class Newsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <10 ; $i++) { 
$add=new News;

$add->Title="Mapso";
$add->content="   Mapso was established in 1976 in the wake of the Suez Canal re-opening in 1975. Mapso supplied the backbone of the tugs, ferries and floating cranes of the Suez Canal Authority back then. The SCA remains one of our strategic accounts and we are proud to be part of the New Suez Canal project in progress. We provid components, systems and services to shipyards and end users. See our references. We have developed vessel ranges in cooperation with the best design and naval architecture firms. See our portfolio. We can supply these proven vessels in the form of a CKD (completely knocked down kit), to partner yards worldwide Become a partner yard. We also provide turnkey vessels, in particular our smallest model the Nano.

" ;
$add->cat="  cat  dis";
$add->img="wp-content/uploads/2017/05/Layer-18.jpg";


$add->save();
}
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Sitesettings;
class SitesettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <1; $i++) { 
$add=new Sitesettings;
 
  $add->Websitename="Welcome to Mapso";
  $add->logo="wp-content/uploads/2017/05/logo.png";
  $add->disc="Welcome to Mapso disc ";
  
$add->save();
}
    }
}

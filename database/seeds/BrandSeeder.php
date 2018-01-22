<?php

use Illuminate\Database\Seeder;
use App\Brand;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <10 ; $i++) { 
$add=new Brand;
 
$add->imgurl="wp-content/uploads/logo/Voith.jpg";
$add->logolink="wp-content/uploads/logo/Voith.jpg";

$add->save();
}
    }
}

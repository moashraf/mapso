<?php

use Illuminate\Database\Seeder;
use App\Singleboatgallery;
class SingleboatGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <10; $i++) { 
$add=new Singleboatgallery;
 
 $add->img_url="wp-content/uploads/2017/05/Layer-18.jpg";
 $add->img_tit="Mapso";
 $add->boats_id_Gallery=1;
 
$add->save();
}
    }
}

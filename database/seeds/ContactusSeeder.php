<?php

use Illuminate\Database\Seeder;
use App\Contactus;
class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <4 ; $i++) { 
$add=new Contactus;
 
$add->title_c="Cairo";
$add->map_link="https://www.google.com/maps/d/embed?mid=17cyeVGAyWhaRv-5-JnptsxYVd3M";
$add->titel_type="HEAD OFFICE";
$add->addr="44, Industrial Zone , Cairo-Ismailia Desert Road, 11769 Cairo ";
$add->tel="+202 2182 0025 ";
$add->fax="+202 2182 0090 ";
$add->mail="mapso@mapso.com";
$add->save();
}
    }
}

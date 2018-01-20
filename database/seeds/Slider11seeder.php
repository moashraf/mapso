<?php

use Illuminate\Database\Seeder;
use App\Slider;
class Slider11seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    for ($i=0; $i <2 ; $i++) { 
$add=new Slider;

$add->buttonname="More info";
$add->sliderimg="wp-content/uploads/2017/05/Layer-18.jpg";
$add->slidertit="Welcome to Mapso
";
$add->slidersub_tit="Marine Technology
";
$add->slider_text="Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus
";
$add->button_link="https://www.google.com";
$add->slogan="MAKING WAVES SINCE 1976";

$add->save();
}



    }
}

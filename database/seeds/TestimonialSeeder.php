<?php

use Illuminate\Database\Seeder;
use App\Testimonial;
class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <3 ; $i++) { 
$add=new Testimonial;
 
$add->testimonialimg="wp-content/uploads/2017/05/testimonial-alastair1.jpg";
$add->testimonial_text="Mapso have produced 24 Camarc Pilot Boats since 2008, with many of these vessels to full Class. I am pleased to say that all boats have been successful and having seen them first hand, to a high standard";
$add->testimonial_tag="Alastair Cameron";
$add->position="Director";
$add->company="Camarc Design Ltd  UK";
 $add->save();
}
    }
}

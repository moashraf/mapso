<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Testimonial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  Schema::create('Testimonial', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('testimonialimg', 200);
            $table->text('testimonial_text', 255);
            $table->string('testimonial_tag', 200);
            $table->string('position', 200);
            $table->string('company', 200);
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

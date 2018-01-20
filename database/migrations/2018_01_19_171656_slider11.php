<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Slider11 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  Schema::create('Slider11', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('buttonname', 200);
          
            $table->string('sliderimg', 255);
            $table->string('slidertit', 200);
            $table->string('slidersub_tit', 200);
            $table->string('slider_text', 200);
            $table->text('button_link', 200);
            $table->string('slogan', 200);
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

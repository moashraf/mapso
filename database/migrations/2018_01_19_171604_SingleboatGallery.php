<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
 class SingleboatGallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  Schema::create('singleboat_gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('img_url', 255);
            $table->string('img_tit', 255);
            $table->integer('boats_id_Gallery');
         
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

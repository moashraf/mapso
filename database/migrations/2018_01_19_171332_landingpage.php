<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Landingpage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  Schema::create('Landingpage', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('mainimg', 200);
            $table->text('subimg', 200);
              $table->string('tit', 200);
            $table->string('sub_tit', 200);
            $table->string('titlin2', 200);
            $table->string('link', 255);
 
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

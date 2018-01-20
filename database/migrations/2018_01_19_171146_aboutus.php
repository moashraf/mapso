<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aboutus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   Schema::create('Aboutus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('tit', 200);
            $table->integer('number');
            $table->integer('percentage');
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

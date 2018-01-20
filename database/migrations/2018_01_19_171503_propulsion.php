<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Propulsion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  Schema::create('Propulsion', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('propulsionname', 200);
            $table->text('propulsionimg', 255);
         $table->string('propulsionslogin', 200);
            $table->text('propulsiondesc', 255);
 
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

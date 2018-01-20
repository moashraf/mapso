<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contactus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  Schema::create('Contactus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title_c', 200);
            $table->text('map_link', 200);
            $table->string('titel_type', 200);
            $table->string('addr', 200);
            $table->string('tel', 200);
            $table->string('fax', 200);
            $table->string('mail', 200);
       
 
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

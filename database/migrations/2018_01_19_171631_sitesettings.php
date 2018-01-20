<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sitesettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  Schema::create('Sitesettings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Websitename', 200);
            $table->string('logo', 200);
            $table->string('disc', 200);
 
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

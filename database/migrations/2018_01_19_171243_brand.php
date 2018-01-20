<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Brand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  Schema::create('Brand', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imgurl', 255);
            $table->string('logolink', 255);

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

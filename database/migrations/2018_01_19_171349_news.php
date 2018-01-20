<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  Schema::create('News', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Title', 200);
            $table->text('content', 200);
            $table->string('cat', 200);
            $table->string('img', 255);
  
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

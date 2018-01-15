<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Boats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Boatsname', 200);
            $table->string('Boatsimg', 200);
            $table->string('Boatscat', 200);
            $table->string('Boats_logo', 200);
            $table->string('Hull_Material', 200);
            $table->string('Length_Overall', 200);
            $table->string('Beam_Overall', 200);
            $table->string('Draught', 200);
            $table->string('Max_Speed', 200);
            $table->string('Displacement', 200);
            $table->string('details_boats', 200);
            $table->string('VIDO', 200);
            $table->string('DataSheet', 200);
            $table->string('Application', 200);
 
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

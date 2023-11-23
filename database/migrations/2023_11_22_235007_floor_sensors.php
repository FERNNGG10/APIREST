<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floor_sensors',function(Blueprint $table){

            $table->id();
            $table->unsignedBigInteger('floor_id');
            $table->unsignedBigInteger('sensor_id');
            $table->float('sensor_value');
            $table->foreign('floor_id')->references('id')->on('floors');
            $table->foreign('sensor_id')->references('id')->on('sensors');
            
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
};

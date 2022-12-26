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
     * @author FRANCESCO CIMINO
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 100);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 9);
            $table->tinyInteger('number_carriages')->unsigned();
            $table->tinyInteger('in_time')->default(1); //(true value--->boolean)
            $table->tinyInteger('deleted')->default(0); //(false value--->boolean)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @author FRANCESCO CIMINO
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};

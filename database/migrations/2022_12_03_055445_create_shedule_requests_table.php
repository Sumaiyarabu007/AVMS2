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
        Schema::create('shedule_requests', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->integer("vehicle_id");
            $table->integer("driver_id");
            $table->string("second_seater_name");
            $table->string("authority");
            $table->string("destination");
            $table->string("km_reading");
            $table->time("start_time");
            $table->time("probable_end_time");
            $table->string("present_mileage");
            $table->string("present_fuel");
            $table->string("status")->default('pending');
            $table->text("comment")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shedule_requests');
    }
};

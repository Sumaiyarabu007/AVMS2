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
        Schema::create('vdra_records', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_id_vdra');
            $table->integer('shedule_id_vdra');
            $table->text('meter_image_vdra')->nullable();
            $table->date('date_vdra');
            $table->time('when_check_in_vdra');
            $table->time('when_check_out_vdra');
            $table->string('km_reading_vdra');
            $table->string('present_fuel_vdra');
            $table->string('shedule_km_ride_vdra');
            $table->string('shedule_fuel_spend_vdra');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('vdra_records');
    }
};

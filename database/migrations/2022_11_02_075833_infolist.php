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
        Schema::create('infolists', function (Blueprint $table) {
            $table->id();
            $table->string("date");
            $table->string("authority");
            $table->string("destination");
            $table->string("km_reading");
            $table->string("when_in");
            $table->string("when_out");
            $table->string("present_fuel");
            $table->string("comment");
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
        //
    }
};


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
        Schema::create('requestlists', function (Blueprint $table) {
            $table->id();
            $table->string("date");
            $table->string("vehicle_type");
            $table->string("v_id");
            $table->string("drivers_name");
            $table->string("second_seater_name");
            $table->string("authority");
            $table->string("destination");
            $table->string("km_reading");
            $table->string("start_time");
            $table->string("probable_end_time");
            $table->string("present_fuel");
            $table->string("last_maintenance_date");
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
        Schema::dropIfExists('requestlists');
    }
};

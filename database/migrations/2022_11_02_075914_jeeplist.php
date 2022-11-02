

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
        
        Schema::create('jeeplists', function (Blueprint $table) {
            $table->id();
            $table->string("v_id");
            $table->string("v_name");
            $table->string("license_number");
            $table->string("authorized_mileage");
            $table->string("authorized_fuel");
            $table->string("collection_date");
            $table->string("last_maintenance_date");
            $table->string("last_refuelling_date");
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

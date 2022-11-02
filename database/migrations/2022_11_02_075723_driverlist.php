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
        Schema::create('driverlists', function (Blueprint $table) {
            $table->id();
            $table->string("snk_no");
            $table->string("rank");
            $table->string("name");
            $table->string("date_of_birth");
            $table->string("mobile_number");
            $table->string("license_expire_date");
            $table->string("able_to_drive");
            $table->string("experience_duration");
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

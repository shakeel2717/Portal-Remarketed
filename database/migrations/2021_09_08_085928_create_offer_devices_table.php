<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_devices', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->integer('device_id');
            $table->string('orderNumber');
            $table->string('amount');
            $table->string('status')->default("Open");
            $table->string('final')->nullable();
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
        Schema::dropIfExists('offer_devices');
    }
}

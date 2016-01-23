<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('food');
            $table->string('type');
            $table->integer('quantity');
            $table->integer('donor_id');
            $table->float('donor_latitude');
            $table->float('donor_longitude');
            $table->string('donor_address');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('donation');
    }
}

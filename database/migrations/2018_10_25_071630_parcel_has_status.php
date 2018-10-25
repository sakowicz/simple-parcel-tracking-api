<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParcelHasStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_status', function(Blueprint $table)
        {
            $table->integer('parcel_id')->unsigned()->nullable();
            $table->foreign('parcel_id')->references('id')
                ->on('parcels')->onDelete('cascade');

            $table->integer('status_id')->unsigned()->nullable();
            $table->foreign('status_id')->references('id')
                ->on('statuses')->onDelete('cascade');

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
        Schema::dropIfExists('parcel_status');
    }
}

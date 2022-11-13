<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_title')->nullable();
            $table->string('coupon_code')->nullable();
            $table->string('coupon_type')->nullable();
            $table->string('percentage')->nullable();
            $table->integer('flat_rate')->nullable();
            $table->dateTime('available_from')->nullable();
            $table->dateTime('available_to')->nullable();
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
        Schema::dropIfExists('offers');
    }
}

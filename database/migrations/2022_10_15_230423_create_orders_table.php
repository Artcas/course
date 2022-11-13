<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id');
            $table->unsignedBigInteger('customer_id')->index();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->bigInteger('coupon_id')->nullable();
            $table->string('marketer')->nullable();
            $table->string('payment_method')->nullable();
            $table->integer('qty');
            $table->string('status')->nullable();
            $table->decimal('price');
            $table->decimal('share_marketer')->nullable();
            $table->decimal('net_profit')->nullable();
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
        Schema::dropIfExists('orders');
    }
}

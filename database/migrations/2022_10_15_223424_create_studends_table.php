<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->index();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->string('username')->nullable();
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->boolean('active')->default(false);
            $table->boolean('email_confirmed')->default(false);
            $table->enum('role', ['staff', 'student']);
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
        Schema::dropIfExists('studends');
    }
}

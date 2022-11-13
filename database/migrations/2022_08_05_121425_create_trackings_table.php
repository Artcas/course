<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address')->nullable();
            $table->string('process_name')->nullable();
            $table->string('type')->nullable();
            $table->text('data')->nullable()->comment('Contain Serialized Tracking Information');
            $table->integer('status')->nullable()->comment('1 passed , 0 failure');
            $table->string('model_name')->nullable();
            $table->integer('model_id')->nullable();
            $table->string('causer_name')->nullable();
            $table->string('causer_role')->nullable();
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
        Schema::dropIfExists('trackings');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffilatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affilates', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('code')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('affilates');
    }
}

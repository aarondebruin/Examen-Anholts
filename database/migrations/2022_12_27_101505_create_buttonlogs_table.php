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
        Schema::create('button_logs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('lastseen');
            $table->integer('battery');
            $table->string('buttonid');
            $table->string('button_location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('button_logs');
    }
};

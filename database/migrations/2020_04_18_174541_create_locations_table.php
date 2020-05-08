<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('name');
            $table->string('email');
            $table->text('location');
            $table->text('photo');
            $table->boolean('bread');
            $table->boolean('milk');
            $table->boolean('eggs');
            $table->boolean('fruit');
            $table->boolean('tp');
            $table->boolean('pads');
            $table->boolean('soap');
            $table->boolean('cleaner');
            $table->boolean('gt10min');
            $table->boolean('10min');
            $table->boolean('5min');
            $table->boolean('nomin');
            $table->boolean('£');
            $table->boolean('££');
            $table->boolean('£££');
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
        Schema::dropIfExists('locations');
    }
}

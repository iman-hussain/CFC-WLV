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
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->text('location');
            $table->string('photo')->default('no')->nullable();
            $table->string('bread')->default('no')->nullable();
            $table->string('milk')->default('no')->nullable();
            $table->string('eggs')->default('no')->nullable();
            $table->string('fruit')->default('no')->nullable();
            $table->string('tp')->default('no')->nullable();
            $table->string('pads')->default('no')->nullable();
            $table->string('soap')->default('no')->nullable();
            $table->string('cleaner')->default('no')->nullable();
            $table->text('cost');
            $table->text('busy');
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

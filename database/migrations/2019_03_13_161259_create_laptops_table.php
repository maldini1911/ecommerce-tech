<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('desc')->nullable();
            $table->integer('price')->nullable();
            $table->string('cpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('battry')->nullable();
            $table->string('wifi')->nullable();
            $table->string('screen_size')->nullable();
            $table->string('hard_drive')->nullable();
            $table->string('laptop_image')->nullable();
            $table->string('processor_type')->nullable();
            $table->enum('os_type', ['DOS', 'Mac', 'Windows'])->nullable();
            $table->enum('offer_type', [1, 2, 3])->nullable();
            $table->integer('sale')->nullable();
            $table->integer('parent_lap')->unsigned()->nullable();
            $table->foreign('parent_lap')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('laptops');
    }
}

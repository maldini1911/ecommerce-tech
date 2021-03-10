<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desc')->nullable();
            $table->integer('price')->nullable();
            $table->string('cpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('camera')->nullable();
            $table->string('memory')->nullable();
            $table->string('screen_size')->nullable();
            $table->string('tablet_image')->nullable();
            $table->enum('offer_type', [1, 2, 3])->nullable();
            $table->integer('sale')->nullable();
            $table->integer('parent_tap')->unsigned()->nullable();
            $table->foreign('parent_tap')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tablets');
    }
}

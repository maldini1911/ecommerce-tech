<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_laptop')->unsigned()->nullable();
            $table->foreign('id_laptop')->references('id')->on('laptops')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_tablet')->unsigned()->nullable();
            $table->foreign('id_tablet')->references('id')->on('tablets')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_mobile')->unsigned()->nullable();
            $table->foreign('id_mobile')->references('id')->on('mobiles')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('count_shop');
            $table->enum('order_state', ['new', 'old'])->default('new');
            $table->enum('buy_state', ['no', 'yes'])->default('no');
            $table->enum('finsh', ['no', 'yes'])->defualt('no');
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
        Schema::dropIfExists('ordars');
    }
}

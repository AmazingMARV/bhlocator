<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBhousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bhouses', function (Blueprint $table) {
            $table->id('bhouse_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('bhouse_name')->nullable();
            $table->string('bhouse_desc')->nullable();
            $table->string('bhouse_img')->nullable();
            $table->string('loc_description')->nullable();
            $table->double('loc_x')->nullable();
            $table->double('loc_y')->nullable();
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
        Schema::dropIfExists('bhouses');
    }
}

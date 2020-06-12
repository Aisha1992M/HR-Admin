<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdatesFpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updates_fp', function (Blueprint $table) {
            $table->id('update_id');
            $table->unsignedBigInteger('user_id');            
            $table->foreign('user_id')->references('u_id')->on('users');
            $table->dateTime('in');
            $table->dateTime('out');
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
        Schema::dropIfExists('updates_fp');
    }
}

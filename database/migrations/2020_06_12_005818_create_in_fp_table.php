<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInFpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_fp', function (Blueprint $table) {
            $table->id('in_id');
            $table->unsignedBigInteger('user_id');            
            $table->foreign('user_id')->references('u_id')->on('users');
            $table->dateTime('in_date');
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
        Schema::dropIfExists('in_fp');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutFpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_fp', function (Blueprint $table) {
            $table->id('out_id');
            $table->unsignedBigInteger('user_id');            
            $table->foreign('user_id')->references('u_id')->on('users');
            $table->dateTime('out_date');
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
        Schema::dropIfExists('out_fp');
    }
}

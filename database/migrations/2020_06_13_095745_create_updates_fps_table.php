<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdatesFpsTable extends Migration
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
            $table->unsignedBigInteger('emp_id');            
            $table->foreign('emp_id')->references('emp_id')->on('employees')->onDelete('cascade');
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
        Schema::dropIfExists('updates_fps');
    }
}

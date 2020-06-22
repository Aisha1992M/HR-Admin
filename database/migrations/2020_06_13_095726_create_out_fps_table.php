<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutFpsTable extends Migration
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
            $table->unsignedBigInteger('emp_id');            
            $table->foreign('emp_id')->references('emp_id')->on('employees')->onDelete('cascade');
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
        Schema::dropIfExists('out_fps');
    }
}

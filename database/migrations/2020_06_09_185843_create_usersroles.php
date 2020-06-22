<?php

use App\Usersrole;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersroles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersroles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('u_id');
            $table->foreign('u_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('r_id');
            $table->foreign('r_id')->references('id')->on('roles')->onDelete('cascade');
            $table->timestamps();
        });
        DB::table('usersroles')->insert([
            ['u_id' => '1', 'r_id' => '1'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersroles');
    }
}

<?php

use App\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name');
            $table->string('description');
            $table->timestamps();
        });
        DB::table('roles')->insert([
            ['role_name' => 'Admin', 'description' => 'Admin will has a super control'],
            ['role_name' => 'HR', 'description' => 'The human resource employee will has a specific roles'],
            ['role_name' => 'User', 'description' => 'The user will has ability edit his profile, add, and view the attendance history']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}

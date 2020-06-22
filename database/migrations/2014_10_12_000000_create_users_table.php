<?php

use App\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile')->unique();
            $table->string('gender');
            $table->string('attachment');
            $table->text('fingerprint');
            $table->boolean('status');
            $table->rememberToken();
            $table->timestamps();
        });
        $user = User::create([
            'f_name' => 'admin',
            'l_name' => 'nawara',
            'email' => 'n@n.n',
            'password' => bcrypt('12345678'),
            'mobile' => '0555555555',
            'gender' => 'female',
            'attachment' => 'default.png',
            'fingerprint' => '123456789',
            'status' => '1',
        ]);
//        $user = User::create([
//            'name' => env('ADMIN_NAME'),
//            'email' => env('ADMIN_EMAIL'),
//            'password' => bcrypt(env('ADMIN_PASSWORD')),
//            'mobile' => env('ADMIN_MOBILE'),
//            'gender' => env('ADMIN_GENDER'),
//            'attachment' => env('ADMIN_ATTACH'),
//            'fingerprint' => env('ADMIN_FINGERPRINT'),
//            'status' => env('ADMIN_STATUS'),
//        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

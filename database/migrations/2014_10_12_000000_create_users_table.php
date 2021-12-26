<?php

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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable(); //nullable karena kita akan pake OAuth google
            $table->string('avatar')->nullable(); //nullable karena admin tidak punya avatar
            $table->string('occupation')->nullable(); //nullable karena ketika sign in menggunakan OAuth google, user tidak menggunakan occupation, digunakan untuk checkout
            $table->boolean('is_admin')->default(false); //karena defaultnya user, jadi is_admin = false
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
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

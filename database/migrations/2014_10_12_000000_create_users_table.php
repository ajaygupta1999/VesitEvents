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
//          $table->string('name');
//            $table->integer('phone number');
//            $table->string("department");
//            $table->integer("current year");
//            $table->string("class");
//            $table->integer("roll no");
            $table->string('email')->unique();
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->integer('isVerified')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

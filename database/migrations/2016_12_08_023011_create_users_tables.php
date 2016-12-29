<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profile_img'); // set default value
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('register_type');
            $table->string('user_status');
            $table->string('phone_number');

          /*
          -------------------------------------------------
          | userstatus
          -------------------------------------------------
          |
          | active // current active KUSA member
          | nolonger // no longer active KUSA member
          | general // registered general user
          | admin
          | invalid // user that is not verfied via email
          | blocked
          |
          */

          $table->string('kusa_team');
            $table->string('kusa_role');
            $table->rememberToken();
            $table->string('reset_token')->index();
            $table->string('confirmation_code')->nullable();
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
        //
        Schema::dropIfExists('users');
    }
}

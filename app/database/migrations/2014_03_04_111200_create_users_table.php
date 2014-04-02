<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
  
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function($t) {
      $t->increments('id');
      $t->string('username', 80);
      $t->string('real_name', 80);
      $t->string('email', 64);
      $t->string('password', 64);
      $t->timestamps();
    });
  }
  
  public function down()
  {
    Schema::drop('users');
  }

}

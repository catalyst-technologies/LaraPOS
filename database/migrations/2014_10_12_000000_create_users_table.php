<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('username',150);
            $table->string('email',150)->unique();
            $table->string('password', 60);
            $table->smallInteger('user_type')->default(1);  # TEMPORARY
            $table->integer('branch')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();
            
            $table->foreign('branch')->references('id')->on('branch')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');
    }

}

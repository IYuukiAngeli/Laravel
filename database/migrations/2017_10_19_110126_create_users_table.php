<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->mediumIncrements('id');
            $table->string('username', 80)->unique();
            $table->string('fullname', 180);
            $table->text('password');
            $table->tinyInteger('retries')->default(0);
            $table->tinyInteger('usertype');
            $table->text('remember_token')->nullable();
            $table->string('created_by', 80)->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('edited_by', 80)->nullable();
            $table->dateTime('edited_date')->nullable();
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

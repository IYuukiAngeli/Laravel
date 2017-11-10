<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heis', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumInteger('user_id');
            $table->integer('school_id');
            $table->integer('program_id');
            $table->integer('tool_id');
            $table->integer('usertype_id');
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
        Schema::dropIfExists('heis');
    }
}

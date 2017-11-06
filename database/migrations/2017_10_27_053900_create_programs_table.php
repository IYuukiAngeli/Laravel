<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('program_code', 80);
            $table->string('program_desc', 180);
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
        Schema::dropIfExists('programs');
    }
}

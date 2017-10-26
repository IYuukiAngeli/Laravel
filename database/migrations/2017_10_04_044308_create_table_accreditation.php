<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAccreditation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_accreditation', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('acc_code', 180)->unique();
            $table->string('acc_desc', 180)->nullable();
            $table->string('created_by', 180)->nullable();
            $table->dateTime('created_date')->nullable();
            $table->text('edited_by')->nullable();
            $table->date('edited_date')->nullable();
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
        Schema::dropIfExists('tbl_accreditation');
    }
}

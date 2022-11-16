<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_students', function (Blueprint $table) {
            $table->id('studentId');
            $table->string("studentFullName",255);
            $table->string("studentUserName",255);
            $table->string("studentEmail",255);
            $table->bigInteger("studentPhoneNumber");
            $table->enum("studentGender",["M","F","O"]);
            $table->text("studentAddress");
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
        Schema::dropIfExists('tbl_students');
    }
}

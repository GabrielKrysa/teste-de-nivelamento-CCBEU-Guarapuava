<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->date('born_date');
            $table->integer('age');
            $table->string('phone_number');
            $table->string('job');
            $table->string('profission');
            $table->string('study')->default('nunca estudou');
            $table->string('schooling')->default('null');
            $table->string('studiedEnglish')->default('null');
            $table->string('studiedTime')->default('null');
            $table->string('change')->default('null');
            $table->string('why');
            $table->integer('basicOne');
            $table->integer('basicTwo');
            $table->integer('highInterOne');
            $table->integer('highInterTwo');
            $table->integer('interOne');
            $table->integer('interTwo');
            $table->integer('teensOne');
            $table->integer('teensTwo');
            $table->integer('teensThree');

            $table->string('updated_at');
            $table->string('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

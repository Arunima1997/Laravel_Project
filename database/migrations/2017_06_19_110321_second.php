<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Second extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('second', function (Blueprint $table) {
            $table->increments('Class_Roll');
            $table->integer('Roll');
            $table->string('Name')->nullable(false);
            $table->integer('IT/T/211')->default(0);
            $table->integer('IT/MATH/T/212')->default(0);
            $table->integer('IT/T/213')->default(0);
            $table->integer('IT/T/214')->default(0);
            $table->integer('IT/T/215')->default(0);
            $table->integer('IT/S/216')->default(0);
            $table->integer('IT/S/211')->default(0);
            $table->integer('IT/S/212')->default(0);
            $table->integer('IT/S/213')->default(0);
            $table->integer('IT/T/221')->default(0);
	    $table->integer('IT/MATH/T/222')->default(0);
	    $table->integer('IT/T/223')->default(0);
	    $table->integer('IT/T/224')->default(0);
	    $table->integer('IT/T/225')->default(0);
	    $table->integer('IT/T/226')->default(0);
	    $table->integer('IT/S/221')->default(0);
	    $table->integer('IT/S/222')->default(0);
	    $table->integer('IT/S/223')->default(0);
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
        Schema::dropIfExists('second');
    }
}


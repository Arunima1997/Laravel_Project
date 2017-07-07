<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fourth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fourth', function (Blueprint $table) {
            $table->increments('Class_Roll');
            $table->integer('Roll');
            $table->string('Name')->nullable(false);
            $table->integer('IT/T/411')->default(0);
            $table->integer('IT/T/412')->default(0);
            $table->integer('IT/T/413')->default(0);
            $table->integer('IT/T/414')->default(0);
            $table->integer('IT/S/411')->default(0);
            $table->integer('IT/S/312')->default(0);
            $table->integer('IT/S/313')->default(0);
            $table->integer('IT/T/421')->default(0);
	    $table->integer('IT/T/422')->default(0);
	    $table->integer('IT/T/423')->default(0);
	    $table->integer('IT/T/424')->default(0);
	    $table->integer('IT/S/421')->default(0);
	    $table->integer('IT/S/422')->default(0);
	    $table->integer('IT/S/423')->default(0);
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
        Schema::dropIfExists('fourth');
    }
}


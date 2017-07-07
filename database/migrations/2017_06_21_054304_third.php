<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Third extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('third', function (Blueprint $table) {
            $table->increments('Class_Roll');
            $table->integer('Roll');
            $table->string('Name')->nullable(false);
            $table->integer('IT/T/311')->default(0);
            $table->integer('IT/T/312')->default(0);
            $table->integer('IT/T/313')->default(0);
            $table->integer('IT/T/314')->default(0);
            $table->integer('IT/T/315')->default(0);
            $table->integer('IT/S/316')->default(0);
            $table->integer('IT/S/311')->default(0);
            $table->integer('IT/S/312')->default(0);
            $table->integer('IT/S/313')->default(0);
            $table->integer('IT/T/321')->default(0);
	    $table->integer('IT/T/322')->default(0);
	    $table->integer('IT/T/323')->default(0);
	    $table->integer('IT/T/324')->default(0);
	    $table->integer('IT/T/325')->default(0);
	    $table->integer('IT/T/326')->default(0);
	    $table->integer('IT/S/321')->default(0);
	    $table->integer('IT/S/322')->default(0);
	    $table->integer('IT/S/323')->default(0);
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
        Schema::dropIfExists('third');
    }
}


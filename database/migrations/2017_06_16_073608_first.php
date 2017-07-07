<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class First extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first', function (Blueprint $table) {
            $table->increments('Class_Roll');
	    $table->integer('Roll');
	    $table->string('Name')->nullable(false);
	    $table->integer('IT/T/111')->default(0);
	    $table->integer('IT/PHY/T/112')->default(0);
	    $table->integer('IT/IEE/T/113')->default(0);
	    $table->integer('IT/MATH/T/114')->default(0);
	    $table->integer('IT/PE/T/115')->default(0);
	    $table->integer('IT/PE/T/116')->default(0);
	    $table->integer('IT/IEE/S/111')->default(0);
	    $table->integer('IT/S/112')->default(0);
	    $table->integer('IT/PE/S/113')->default(0);
	    $table->integer('IT/PE/S/114')->default(0);	
            $table->integer('IT/T/121')->default(0);
	    $table->integer('IT/MATH/T/122')->default(0);
	    $table->integer('IT/IEE/T/123')->default(0);
	    $table->integer('IT/PE/T/124')->default(0);
	    $table->integer('IT/PHY/T/125')->default(0);
	    $table->integer('IT/Hum/T/126')->default(0);
	    $table->integer('IT/S/121')->default(0);
	    $table->integer('IT/IEE/S/122')->default(0);
	    $table->integer('IT/PE/S/123')->default(0);
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
        Schema::dropIfExists('first');
    }
}

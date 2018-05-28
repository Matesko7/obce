<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villages', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nazov');
			$table->string('linka');
			$table->string('starosta');
			$table->string('adresa');
			$table->string('telefon');
			$table->string('fax');
			$table->string('email');
			$table->string('web');
			$table->string('obrazok');
			$table->index('nazov');
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
        Schema::dropIfExists('villages');
    }
}

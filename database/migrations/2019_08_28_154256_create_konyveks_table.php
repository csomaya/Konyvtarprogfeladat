<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonyveksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konyveks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('szerzo');
            $table->string('cim');
            $table->string('isbn');
            $table->date('bevdatum');
            $table->date('selejtdatum');
            $table->tinyInteger('kolcson');
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
        Schema::dropIfExists('konyveks');
    }
}

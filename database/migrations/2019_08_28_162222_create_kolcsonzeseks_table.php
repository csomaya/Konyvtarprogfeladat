<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKolcsonzeseksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kolcsonzeseks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tagok_id');
            $table->string('konyvek_id');
            $table->date('kolcsondatum');
            $table->date('lejaratdatum');
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
        Schema::dropIfExists('kolcsonzeseks');
    }
}

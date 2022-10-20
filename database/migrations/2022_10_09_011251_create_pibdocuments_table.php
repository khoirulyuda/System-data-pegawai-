<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePibdocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pibdocuments', function (Blueprint $table) {
            $table->id();
            $table->string('Car')->nullable();
            $table->string('Serial')->nullable();
            $table->string('KdFasDtl')->nullable();
            $table->integer('NoUrut')->nullable();
            $table->string('DokKd')->nullable();
            $table->string('DokNo')->nullable();
            $table->string('DokTg')->nullable();
            $table->string('KdGroupDok')->nullable();
           
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
        Schema::dropIfExists('pibdocuments');
    }
}

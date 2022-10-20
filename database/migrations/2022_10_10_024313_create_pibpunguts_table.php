<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePibpungutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pibpunguts', function (Blueprint $table) {
            $table->id();
            $table->string('Car');
            $table->string('KdBeban');
            $table->string('KdFasil');
            $table->string('NilBeban');
            
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
        Schema::dropIfExists('pibpunguts');
            
    }
}

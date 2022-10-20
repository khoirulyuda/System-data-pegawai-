<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePibcontainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pibcontainers', function (Blueprint $table) {
            $table->id();
            $table->string('Car')->nullable();
            $table->string('ContNo')->nullable();
            $table->string('ContUkur')->nullable();
            $table->string('ContTipe')->nullable();
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
        Schema::dropIfExists('pibcontainers');
    }
}

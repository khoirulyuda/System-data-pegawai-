<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePibdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pibdetails', function (Blueprint $table) {
            $table->id();
            $table->string('Car')->nullable();
            $table->string('Serial')->nullable();
            $table->string('NoHs')->nullable();
            $table->string('SeriTr')->nullable();
            $table->string('BrgUrai')->nullable();
            $table->string('Merk')->nullable();
            $table->string('Tipe')->nullable();
            $table->string('SpfLain')->nullable();
            $table->string('BrgAsal')->nullable();
            $table->string('DNilInv')->nullable();
            $table->string('DCif')->nullable();
            $table->string('KdSat')->nullable();
            $table->string('JmlSat')->nullable();
            $table->string('KemasJn')->nullable();
            $table->integer('KemasJm')->nullable();
            $table->integer('SatBmJm')->nullable();
            $table->integer('SatCukJm')->nullable();
            $table->integer('NettoDtl')->nullable();
            $table->string('KdFasDtl')->nullable();
            $table->string('DtlOk')->nullable();
            $table->string('FlBarangBaru')->nullable();
            $table->string('FlLartas')->nullable();
            $table->string('KatLartas')->nullable();
            $table->string('SpekTarif')->nullable();
            $table->string('DNilCuk')->nullable();
            $table->integer('JmPC')->nullable();
            $table->integer('SaldoAwalPc')->nullable();
            $table->string('SaldoAkhirPc')->nullable();
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
        Schema::dropIfExists('pibdetails');
    }
}

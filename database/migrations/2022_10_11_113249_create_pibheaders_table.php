<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePibheadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pibheaders', function (Blueprint $table) {
            $table->id();
            $table->string('Car')->nullable();
            $table->string('KdKpbc')->nullable();
            $table->string('PibNo')->nullable();
            $table->unsignedBigInteger('incomings_id');            
            $table->unsignedBigInteger('productions_id');            
            $table->unsignedBigInteger('outgoings_id');            
            $table->string('PibTg')->nullable();
            $table->string('JnPib')->nullable();
            $table->string('JnImp')->nullable();
            $table->string('JkWaktu')->nullable();
            $table->string('CrByr')->nullable();
            $table->string('DokTupKd')->nullable();
            $table->string('DokTupNo')->nullable();
            $table->string('DokTupTg')->nullable();
            $table->string('PosNo')->nullable();
            $table->string('PosSub')->nullable();
            $table->string('PosSubSub')->nullable();
            $table->string('ImpId')->nullable();
            $table->string('ImpNpwp')->nullable();
            $table->string('ImpNama')->nullable();
            $table->string('ImpAlmt')->nullable();
            $table->string('ImpStatus')->nullable();
            $table->string('ApiKd')->nullable();
            $table->string('ApiNo')->nullable();
            $table->string('PpjkId')->nullable();
            $table->string('PpjkNpwp')->nullable();
            $table->string('PpjkNama')->nullable();
            $table->string('PpjkAlmt')->nullable();
            $table->string('PpjkNo')->nullable();
            $table->string('PpjkTg')->nullable();
            $table->string('IndId')->nullable();
            $table->string('IndNpwp')->nullable();
            $table->string('IndNama')->nullable();
            $table->string('IndAlmt')->nullable();
            $table->string('PasokNama')->nullable();
            $table->string('PasokAlmt')->nullable();
            $table->string('PasokNeg')->nullable();
            $table->string('PelBkr')->nullable();
            $table->string('PelMuat')->nullable();
            $table->string('PelTransit')->nullable();
            $table->string('TmpTbn')->nullable();
            $table->string('Moda')->nullable();
            $table->string('AngkutNama')->nullable();
            $table->string('AngkutNo')->nullable();
            $table->string('AngkutFl')->nullable();
            $table->string('TgTiba')->nullable();
            $table->string('KdVal')->nullable();
            $table->string('Ndpbm')->nullable();
            $table->string('NilInv')->nullable();
            $table->string('Freight')->nullable();
            $table->string('BTambahan')->nullable();
            $table->string('Diskon')->nullable();
            $table->string('KdAss')->nullable();
            $table->string('Asuransi')->nullable();
            $table->string('KdHrg')->nullable();
            $table->string('Fob')->nullable();
            $table->string('Cif')->nullable();
            $table->string('Bruto')->nullable();
            $table->string('Netto')->nullable();
            $table->string('JmCont')->nullable();
            $table->string('JmBrg')->nullable();
            $table->string('Status')->nullable();
            $table->string('Snrf')->nullable();
            $table->string('KdFas')->nullable();
            $table->string('Lengkap')->nullable();
            $table->string('BillNpwp')->nullable();
            $table->string('BillNama')->nullable();
            $table->string('BillAlmt')->nullable();
            $table->string('PenjualNama')->nullable();
            $table->string('PenjualAlmt')->nullable();
            $table->string('PenjualNeg')->nullable();
            $table->string('Pernyataan')->nullable();
            $table->string('JnsTrans')->nullable();
            $table->string('VD')->nullable();
            $table->string('VersiModul')->nullable();
            $table->string('NilVd')->nullable();
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
        Schema::dropIfExists('pibheaders');
    }
}

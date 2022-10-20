<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomings', function (Blueprint $table) {
            $table->id();
            $table->string('OwnerCust')->nullable();
            $table->string('Abbr')->nullable();
            $table->string('MossiNo')->nullable();
            $table->string('MC')->nullable();
            $table->string('SpecGroup')->nullable();
            $table->string('SpecCode')->nullable();
            $table->string('SpecName')->nullable();
            $table->string('Coating')->nullable();
            $table->string('Thick')->nullable();
            $table->string('Width')->nullable();
            $table->string('Lenght1')->nullable();
            $table->string('Lenght2')->nullable();
            $table->string('EnterDate')->nullable();
            $table->string('MatEnterDate')->nullable();
            $table->string('Qty')->nullable();
            $table->string('Weight')->nullable();
            $table->string('StoreFlag')->nullable();
            $table->string('RDMno')->nullable();
            $table->string('CaseNo')->nullable();
            $table->string('CoilNo')->nullable();
            $table->string('ContainerNo')->nullable();
            $table->string('Maker')->nullable();
            $table->string('Shipper')->nullable();
            $table->string('InvoiceNo')->nullable();
            $table->string('DamageFlag')->nullable();
            $table->string('Price')->nullable();
            $table->string('EPTEflag')->nullable();
            $table->string('KanbanNo')->nullable();
            $table->string('Remark')->nullable();
            $table->string('Vessel')->nullable();
            $table->string('ContractNo')->nullable();
            $table->string('UserCust')->nullable();
            $table->string('LineSJ')->nullable();
            $table->string('OutDate')->nullable();
            $table->string('UsedWeight')->nullable();
            $table->string('RewindWeight')->nullable();
            $table->string('MatWidht')->nullable();
            $table->string('EPAflag')->nullable();
            $table->string('Bookflag')->nullable();
            $table->string('GentaiNo')->nullable();
            $table->string('PartNo')->nullable();
            $table->string('PartName')->nullable();
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
        Schema::dropIfExists('incomings');
    }
}

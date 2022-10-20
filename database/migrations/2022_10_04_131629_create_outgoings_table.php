<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutgoingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outgoings', function (Blueprint $table) {
            $table->id();
            $table->string('SJnumber')->nullable();
            $table->string('SJdate')->nullable();
            $table->string('CustomerName')->nullable();
            $table->string('MainCustomer')->nullable();
            $table->string('KanbanNo')->nullable();
            $table->string('SPC')->nullable();
            $table->string('MC')->nullable();
            $table->string('MossiNo')->nullable();
            $table->string('GentaiNo')->nullable();
            $table->string('Thick')->nullable();
            $table->string('X1')->nullable();
            $table->string('Width')->nullable();
            $table->string('X2')->nullable();
            $table->string('Length1')->nullable();
            $table->string('X3')->nullable();
            $table->string('Length2')->nullable();
            $table->string('PCS')->nullable();
            $table->string('Case')->nullable();
            $table->string('KgPcs')->nullable();
            $table->string('Weight')->nullable();
            $table->string('SpecName')->nullable();
            $table->string('Coating')->nullable();
            $table->string('Usumebiki')->nullable();
            $table->string('EPTEflag')->nullable();
            $table->string('Remark')->nullable();
            $table->string('ContractNo')->nullable();
            $table->string('Maker')->nullable();
            $table->string('DeliveryTo')->nullable();
            $table->string('PoNo')->nullable();
            $table->string('RemarkOrderRefNo')->nullable();
            $table->string('Transportir')->nullable();
            $table->string('Truck')->nullable();
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
        Schema::dropIfExists('outgoings');
    }
}

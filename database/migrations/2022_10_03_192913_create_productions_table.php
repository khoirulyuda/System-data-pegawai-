<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->string('CustomerCode')->nullable();
            $table->string('CustomerName')->nullable();
            $table->string('SpecGroup')->nullable();
            $table->string('Group')->nullable();
            $table->string('CutLine')->nullable();
            $table->string('CutDate')->nullable();
            $table->string('MC')->nullable();
            $table->string('MossiNo')->nullable();
            $table->string('Rank')->nullable();
            $table->string('EPAflag')->nullable();
            $table->string('SpecCode')->nullable();
            $table->string('SpecName')->nullable();
            $table->string('Coating')->nullable();
            $table->string('Thick')->nullable();
            $table->string('Width')->nullable();
            $table->string('Lenght1')->nullable();
            $table->string('Lenght2')->nullable();
            $table->string('MaterialWeight')->nullable();
            $table->string('RewindWeight')->nullable();
            $table->string('MaterialUsed')->nullable();
            $table->string('SemiFweight')->nullable();
            $table->string('RewindSemiFweight')->nullable();
            $table->string('SemiFused')->nullable();
            $table->string('ProductWeight')->nullable();
            $table->string('RewindProductWeight')->nullable();
            $table->string('ProductUsed')->nullable();
            $table->string('TotalUsed')->nullable();
            $table->string('Qty1')->nullable();
            $table->string('Product')->nullable();
            $table->string('Qty2')->nullable();
            $table->string('SemiF')->nullable();
            $table->string('TotalProdSemi')->nullable();
            $table->string('Scrap')->nullable();
            $table->string('Yields')->nullable();
            $table->string('TonyuPcs')->nullable();
            $table->string('Maker')->nullable();
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
        Schema::dropIfExists('productions');
    }
}

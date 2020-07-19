<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpDetailBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_DetailBill', function (Blueprint $table) {
            $table->increments('det_id');
            $table->int('det_amount');
            $table->date('det_unitprice');
            $table->integer('det_product' , '')->unsigned;
            $table->foreign('det_product')
                  ->references('prod_id')
                  ->on('vp_products')
                  ->onDelete('cascade'); 
            $table->integer('det_bill' , '')->unsigned;
            $table->foreign('det_bill')
                  ->references('bill_id')
                  ->on('vp_bill')
                  ->onDelete('cascade'); 
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
        Schema::dropIfExists('vp_DetailBill');
    }
}

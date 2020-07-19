<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_Bill', function (Blueprint $table) {
            $table->increments('bil_id');
            $table->date('bil_ngaydat');
            $table->date('bil_ngaygiao');
            $table->string('bil_payments');
            $table->integer('bil_product')->unsigned;
            $table->foreign('bil_product')
                  ->references('prod_id')
                  ->on('vp_products')
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
        Schema::dropIfExists('vp_Bill');
    }
}

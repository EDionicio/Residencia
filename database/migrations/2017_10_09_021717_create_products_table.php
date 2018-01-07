<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nInvoice');
            $table->string('TProducts');
            $table->string('initials');
            $table->string('provider');
            $table->string('checkin');
            $table->string('quantity');
            $table->string('unit');
            $table->string('priceList');
            $table->string('cost');
            $table->string('description');
            $table->string('priceSales1');
            $table->string('priceSales2');
            $table->string('priceSales3');
            $table->string('priceSales4');
            $table->string('priceSales5');
            $table->string('coin');
            $table->string('stock');
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
        Schema::dropIfExists('products');
    }
}

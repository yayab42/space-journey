<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateOrdersHasProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_has_products', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->char('title', 100);
            $table->decimal('price');
            $table->integer('weight');
            $table->decimal('vat');
            $table->foreignId('orders_id');
            $table->foreign('orders_id')->references('id')->on('orders');
            $table->foreignId('products');
            $table->foreign('products')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_has_products');
    }
}


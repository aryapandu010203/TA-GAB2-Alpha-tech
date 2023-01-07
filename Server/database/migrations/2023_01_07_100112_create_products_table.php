<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('id_kategory');
            $table->integrt('id_subkategory');
            $table->string('nama_produk');
            $table->string('nama_produk');
            $table->string('nama_produk');
            $table->string('nama_produk');
            $table->string('nama_produk');
            $table->string('nama_produk');
            $table->string('nama_produk');
            $table->string('nama_produk');
            $table->string('nama_produk');
            $table->string('nama_produk');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->integer('harga')->unsigned();
            $table->integer('stok')->unsigned();
            $table->string('warna');
            $table->string('ukuran');
            $table->string('cover')->nullable();
            $table->bigInteger('id_supplier')->unsigned();
            // fk id_supplier
            $table->foreign('id_supplier')->references('id')
                ->on('suppliers')->onUpdate('cascade');
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
        Schema::dropIfExists('barangs');
    }
}

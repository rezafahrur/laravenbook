<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bukus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_buku');
            $table->string('judul');
            $table->string('pengarang');
            $table->integer('tahun_terbit');
            $table->unsignedInteger('id_kategori');
            $table->foreign('id_kategori')
                  ->references('id')
                  ->on('kategoris')
                  ->onDelete('cascade');  
            $table->unsignedInteger('id_supplier');
            $table->foreign('id_supplier')
                  ->references('id')
                  ->on('suppliers')
                  ->onDelete('cascade');
            $table->bigInteger('harga');
            $table->integer('quantity');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')
                  ->references('id')
                  ->on('users')
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
        //
        Schema::dropIfExists('bukus');
    }
}

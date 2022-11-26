<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_kamars', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->integer('kamar_id');
            $table->string('Nama_Customer');
            $table->integer('No_kamar');
            $table->integer('Harga');
            $table->integer('Durasi');
            $table->date('Start');
            $table->date('End');
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
        Schema::dropIfExists('pemesanan_kamars');
    }
};

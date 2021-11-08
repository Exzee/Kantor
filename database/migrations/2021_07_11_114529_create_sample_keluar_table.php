<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSampleKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sample_keluar', function (Blueprint $table) {
            $table->id();
            $table
                ->string('id_sample_keluar')
                ->unique()
                ->nullable();
            $table->enum('segment', ['Domestic', 'Export'])->nullable();
            $table->date('tanggal_kirim_sample')->nullable();
            $table->string('pengirim_sample')->nullable();
            $table->string('tujuan_sample')->nullable();
            $table->enum('jenis_sample', ['Market', 'Complaint'])->nullable();
            $table->string('tipe_benang')->nullable();
            $table->string('lot_number')->nullable();
            $table->text('rincian_sample_keluar')->nullable();
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
        Schema::dropIfExists('sample_keluar');
    }
}

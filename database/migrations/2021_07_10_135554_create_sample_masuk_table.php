<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSampleMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sample_masuk', function (Blueprint $table) {
            $table->id();
            $table
                ->string('id_sample')
                ->unique()
                ->nullable();
            $table->date('tanggal_terima_sample')->nullable();
            $table->string('pengirim_sample')->nullable();
            $table->enum('jenis_sample', ['Market', 'Complaint'])->nullable();
            $table->string('tipe_benang')->nullable();
            $table->string('lot_number')->nullable();
            $table->string('problem_sample')->nullable();
            $table->text('rincian_sample_masuk')->nullable();
            $table->enum('segment', ['Domestic', 'Export'])->nullable();
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
        Schema::dropIfExists('sample_masuk');
    }
}

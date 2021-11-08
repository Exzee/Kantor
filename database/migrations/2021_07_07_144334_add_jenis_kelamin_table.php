<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisKelaminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pegawai', function (Blueprint $table) {
            // $table
            //     ->integer('nik')
            //     ->unique()
            //     ->first()
            //     ->change();
            // $table
            //     ->string('email')
            //     ->unique()
            //     ->change();
            // $table
            //     ->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan'])
            //     ->nullable()
            //     ->after('nama');
            // $table
            //     ->string('status_pernikahan')
            //     ->nullable()
            //     ->after('tanggal_lahir');
            // $table
            //     ->integer('jumlah_anak')
            //     ->nullable()
            //     ->after('status_pernikahan');
            // $table
            //     ->string('agama')
            //     ->nullable()
            //     ->after('jumlah_anak');
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
    }
}

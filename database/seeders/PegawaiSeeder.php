<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            [
                'nama' => 'Fifit Ruwanto',
                'email' => 'fifitruwanto@gmail.com',
                'tanggal_lahir' => '1989-03-20',
                'tahun_masuk' => '2010',
                'jabatan' => 'Operator',
            ],
            [
                'nama' => 'Nur Hidayat',
                'email' => 'nurhidayat@gmail.com',
                'tanggal_lahir' => '1987-08-28',
                'tahun_masuk' => '2012',
                'jabatan' => 'Operator',
            ],
        ]);
    }
}

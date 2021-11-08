<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\SampleMasuk;
use App\Models\SampleKeluar;
use Illuminate\Support\Facades\File;

class CetakController extends Controller
{
    public function cetak_pegawai($id)
    {
        
        $model = Pegawai::find($id);
        return view('pegawai.cetak.cetak', compact('model'));

    }

    public function cetak_samplemasuk($id)
    {
        $model = SampleMasuk::find($id);
        return view('samplemasuk.cetak.cetak', compact('model'));

    }

    public function cetak_samplekeluar($id)
    {
        $model = SampleKeluar::find($id);
        return view('samplekeluar.cetak.cetak', compact('model'));

    }
}

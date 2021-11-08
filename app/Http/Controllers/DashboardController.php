<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\SampleMasuk;
use App\Models\SampleKeluar;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        $jumlah_pegawai = Pegawai::all()->count();
        $jumlah_sm = SampleMasuk::all()->count();
        $jumlah_sk = SampleKeluar::all()->count();
        return view('layout/dashboard', compact('jumlah_pegawai','jumlah_sm','jumlah_sk'));
    }
  
}

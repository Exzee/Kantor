<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\File;
//use App\Http\Requests\PegawaiRequest;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        // $datas = Pegawai::all();
        $datas = Pegawai::where('nik', 'LIKE', '%' . $keyword . '%')
            ->orWhere('nama', 'LIKE', '%' . $keyword . '%')
            ->orWhere('email', 'LIKE', '%' . $keyword . '%')
            ->paginate(10);
        $datas->appends($request->all());
        return view('pegawai.index', compact('datas', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pegawai();
        return view('pegawai.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Pegawai();
        $model->nik = $request->nik;
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->email = $request->email;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->status_pernikahan = $request->status_pernikahan;
        $model->jumlah_anak = $request->jumlah_anak;
        $model->agama = $request->agama;
        $model->tahun_masuk = $request->tahun_masuk;
        $model->jabatan = $request->jabatan;
        //Upload File Foto
        if ($request->file('foto_pegawai')) {
            $file = $request->file('foto_pegawai');

            $nama_file =
                time() . str_replace(' ', '', $file->getClientOriginalName());

            $file->move('images/pegawai', $nama_file);
            $model->foto_pegawai = $nama_file;
        }

        $model->save();

        return redirect('pegawai')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Pegawai::find($id);
        return view('pegawai.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Pegawai::find($id);
        return view('pegawai.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Pegawai::find($id);
        $model->nik = $request->nik;
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->email = $request->email;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->status_pernikahan = $request->status_pernikahan;
        $model->jumlah_anak = $request->jumlah_anak;
        $model->agama = $request->agama;
        $model->tahun_masuk = $request->tahun_masuk;
        $model->jabatan = $request->jabatan;
        //Update File Foto
        if ($request->file('foto_pegawai')) {
            $file = $request->file('foto_pegawai');

            $nama_file =
                time() . str_replace(' ', '', $file->getClientOriginalName());

            $file->move('images/pegawai', $nama_file);
            File::delete('images/pegawai/' . $model->foto_pegawai);
            $model->foto_pegawai = $nama_file;
        }
        $model->save();

        return redirect('pegawai')->with('sukses', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Pegawai::find($id);
        $model->delete();

        return redirect('pegawai')->with('hapus', 'Data Berhasil Dihapus');
    }
}

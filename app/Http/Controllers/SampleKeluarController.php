<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SampleKeluar;
use Illuminate\Support\Facades\File;

class SampleKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        // $datas = SampleKeluar::all();
        $datas = SampleKeluar::where(
            'id_sample_keluar',
            'LIKE',
            '%' . $keyword . '%'
        )->paginate(4);
        $datas->appends($request->all());
        return view('samplekeluar.index', compact('datas', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new SampleKeluar();
        return view('samplekeluar.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new SampleKeluar();
        $model->segment = $request->segment;
        $model->id_sample_keluar = $request->id_sample_keluar;
        $model->tanggal_kirim_sample = $request->tanggal_kirim_sample;
        $model->pengirim_sample = $request->pengirim_sample;
        $model->tujuan_sample = $request->tujuan_sample;
        $model->jenis_sample = $request->jenis_sample;
        $model->tipe_benang = $request->tipe_benang;
        $model->lot_number = $request->lot_number;
        $model->rincian_sample_keluar = $request->rincian_sample_keluar;

        //Upload File Foto Sample
        if ($request->file('foto_sample_keluar')) {
            $file = $request->file('foto_sample_keluar');

            $nama_file =
                time() . str_replace(' ', '', $file->getClientOriginalName());

            $file->move('images/samplekeluar', $nama_file);
            $model->foto_sample_keluar = $nama_file;
        }

        $model->save();

        return redirect('samplekeluar')->with(
            'sukses',
            'Data Berhasil Ditambahkan'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = SampleKeluar::find($id);
        return view('samplekeluar.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = SampleKeluar::find($id);
        return view('samplekeluar.edit', compact('model'));
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
        $model = SampleKeluar::find($id);
        $model->segment = $request->segment;
        $model->id_sample_keluar = $request->id_sample_keluar;
        $model->tanggal_kirim_sample = $request->tanggal_kirim_sample;
        $model->pengirim_sample = $request->pengirim_sample;
        $model->tujuan_sample = $request->tujuan_sample;
        $model->jenis_sample = $request->jenis_sample;
        $model->tipe_benang = $request->tipe_benang;
        $model->lot_number = $request->lot_number;
        $model->rincian_sample_keluar = $request->rincian_sample_keluar;

        //Update File Foto Sample Keluar
        if ($request->file('foto_sample_keluar')) {
            $file = $request->file('foto_sample_keluar');

            $nama_file =
                time() . str_replace(' ', '', $file->getClientOriginalName());

            $file->move('images/samplekeluar', $nama_file);
            File::delete('images/samplekeluar/' . $model->foto_sample_keluar);
            $model->foto_sample_keluar = $nama_file;
        }

        $model->save();

        return redirect('samplekeluar')->with(
            'sukses',
            'Data Berhasil Dirubah'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = SampleKeluar::find($id);
        $model->delete();

        return redirect('samplekeluar')->with('hapus', 'Data Berhasil Dihapus');
    }
}

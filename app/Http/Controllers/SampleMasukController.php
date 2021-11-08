<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SampleMasuk;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Multipleuploads;
use App\Models\SampleKeluar;

class SampleMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        // $datas = SampleMasuk::all();
        $datas = SampleMasuk::where(
            'id_sample',
            'LIKE',
            '%' . $keyword . '%'
        )->orWhere('lot_number', 'LIKE', '%' . $keyword . '%')->paginate(4);
        $datas->appends($request->all());
        return view('samplemasuk.index', compact('datas', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new SampleMasuk();
        return view('samplemasuk.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new SampleMasuk();
        $model->segment = $request->segment;
        $model->id_sample = $request->id_sample;
        $model->tanggal_terima_sample = $request->tanggal_terima_sample;
        $model->pengirim_sample = $request->pengirim_sample;
        $model->jenis_sample = $request->jenis_sample;
        $model->tipe_benang = $request->tipe_benang;
        $model->lot_number = $request->lot_number;
        $model->problem_sample = $request->problem_sample;
        $model->rincian_sample_masuk = $request->rincian_sample_masuk;

        //Upload File Foto Sample
        if ($request->file('foto_sample')) {
            $file = $request->file('foto_sample');

            $nama_file =
                time() . str_replace(' ', '', $file->getClientOriginalName());

            $file->move('images/samplemasuk', $nama_file);
            $model->foto_sample = $nama_file;
        }
            

        $model->save();

        return redirect('samplemasuk')->with(
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
        $model = SampleMasuk::find($id);
        return view('samplemasuk.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = SampleMasuk::find($id);
        return view('samplemasuk.edit', compact('model'));
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
        $model = SampleMasuk::find($id);
        $model->segment = $request->segment;
        $model->id_sample = $request->id_sample;
        $model->tanggal_terima_sample = $request->tanggal_terima_sample;
        $model->pengirim_sample = $request->pengirim_sample;
        $model->jenis_sample = $request->jenis_sample;
        $model->tipe_benang = $request->tipe_benang;
        $model->lot_number = $request->lot_number;
        $model->problem_sample = $request->problem_sample;
        $model->rincian_sample_masuk = $request->rincian_sample_masuk;

            //Upload File Foto Sample
            if ($request->file('foto_sample')) {
                $file = $request->file('foto_sample');

                $nama_file =
                    time() . str_replace(' ', '', $file->getClientOriginalName());

                $file->move('images/samplemasuk', $nama_file);
                File::delete('images/samplemasuk/' . $model->foto_sample);
                $model->foto_sample = $nama_file;
            }   
      
            $model->save();

        return redirect('samplemasuk')->with('sukses', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = SampleMasuk::find($id);
        $model->delete();

        return redirect('samplemasuk')->with('hapus', 'Data Berhasil Dihapus');
    }
}

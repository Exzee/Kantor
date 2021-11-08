<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Pegawai</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    
    {{-- Table Start --}}
    <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th colspan="3" class="btn-warning"><h4>Cetak Data Pegawai</h4></th>
        </tr>
      </thead>
        <tbody>
          {{-- ID Badge --}}
          <tr>
            <th scope="row">ID Badge</th>
            <td>: {{ old('id',$model->nik) }}</td>
            <td rowspan="10">
          <!-- sisipkan foto -->
          @if(strlen($model->foto_pegawai)>0)
          <img class="img-thumbnail mx-auto" width="400px" src="{{ asset('images/pegawai/'.$model->foto_pegawai) }}"/>
          @endif
          @if(strlen($model->foto_pegawai)<1)
          <img class="img-thumbnail mx-auto" width="400px" src="{{ asset('images/pegawai/picture_null.png') }}"/>
          @endif
            </td>
          </tr>
          {{-- Nama  --}}
        <tr>
          <th scope="row">Nama Pegawai</th>
          <td >: {{ old('nama',$model->nama) }}</td>
        </tr>
         {{-- Alamat  --}}
         <tr>
          <th scope="row">Alamat Pegawai</th>
          <td >: {{ old('alamat',$model->alamat) }}</td>
        </tr>
        {{-- Jenis Kelamin --}}
        <tr>
          <th scope="row">Jenis Kelamin</th>
          <td>: {{ old('jenis_kelamin',$model->jenis_kelamin) }}</td>
        </tr>
        {{-- Email --}}
        <tr>
          <th scope="row">Email</th>
          <td>: {{ old('email',$model->email) }}</td>
        </tr>
        {{-- Tanggal Lahir --}}
        <tr>
          <th scope="row">Tanggal Lahir</th>
          <td>: {{ date('d-M-Y', strtotime(old('tanggal_lahir',$model->tanggal_lahir))) }}</td>
        </tr>
        {{-- Status Pernikahan --}}
        <tr>
          <th scope="row">Status Pernikahan</th>
          <td>: {{ old('status_pernikahan',$model->status_pernikahan) }}</td>
        </tr>
        {{-- Jumlah Anak --}}
        <tr>
          <th scope="row">Jumlah Anak</th>
          <td>: {{ old('jumlah_anak',$model->jumlah_anak) }}</td>
        </tr>
        {{-- Agama --}}
        <tr>
          <th scope="row">Agama</th>
          <td>: {{ old('agama',$model->agama) }}</td>
        </tr>
        {{-- Tahun Masuk --}}
        <tr>
          <th scope="row">Tahun Masuk</th>
          <td>: {{ old('tahun_masuk',$model->tahun_masuk) }}</td>
        </tr>
        </tr>
        {{-- Jabatan --}}
        <tr>
          <th scope="row">Tahun Masuk</th>
          <td>: {{ old('jabatan',$model->jabatan) }}</td>
        </tr>
        </tr>
      </tbody>
    </table>
  </div>
{{-- Table End --}}
</div>

<script type="text/javascript">
  window.onload = function() { window.print(); }
</script>

</body>
</html>
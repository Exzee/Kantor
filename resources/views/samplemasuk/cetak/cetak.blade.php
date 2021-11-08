<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Sample Masuk</title>
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
          <th colspan="3" class="btn-warning"><h4>Cetak Data Sample Masuk</h4></th>
        </tr>
      </thead>
        <tbody>
          {{-- Segment --}}
          <tr>
            <th scope="row">Segment</th>
            <td>: {{ old('id',$model->segment) }}</td>
            
          </tr>
          {{-- ID Sample  --}}
        <tr>
          <th scope="row">Kode Sample</th>
          <td >: {{ old('id',$model->id_sample) }}</td>
        </tr>
        {{-- Tanggal Terima Sample --}}
        <tr>
          <th scope="row">Tanggal Terima Sample</th>
          <td>: {{ date('d-M-Y', strtotime( old('tanggal_terima_sample',$model->tanggal_terima_sample))) }}</td>
        </tr>
        {{-- Pengirim Sample --}}
        <tr>
          <th scope="row">Pengirim Sample</th>
          <td>: {{ old('pengirim_sample',$model->pengirim_sample) }}</td>
        </tr>
        {{-- Jenis Sample --}}
        <tr>
          <th scope="row">Jenis Sample</th>
          <td>: {{ old('jenis_sample',$model->jenis_sample) }}</td>
        </tr>
        {{-- Tipe Benang --}}
        <tr>
          <th scope="row">Tipe Benang</th>
          <td>: {{ old('tipe_benang',$model->tipe_benang) }}</td>
        </tr>
        {{-- Lot Number --}}
        <tr>
          <th scope="row">Lot Number</th>
          <td>: {{ old('lot_number',$model->lot_number) }}</td>
        </tr>
        {{-- Problem Sample --}}
        <tr>
          <th scope="row">Problem</th>
          <td>: {{ old('problem_sample',$model->problem_sample) }}</td>
        </tr>
        {{-- Rincian Sample Masuk --}}
        <tr>
          <th scope="row">Deskripsi Sample</th>
          <td>: {{ old('rincian_sample_masuk',$model->rincian_sample_masuk) }}</td>
        </tr>
        </tr>
        {{-- Foto --}}
        <tr>
          <th scope="row">Foto Sample</th>
          <td rowspan="10">
            <!-- sisipkan foto -->
            @if(strlen($model->foto_sample)>0)
            <img class="img-thumbnail" width="400px" src="{{ asset('images/samplemasuk/'.$model->foto_sample) }}"/>
            @endif
            @if(strlen($model->foto_sample)<1)
            <img class="img-thumbnail" width="400px" src="{{ asset('images/samplemasuk/blank-img.jpg') }}"/>
            @endif
              </td>
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
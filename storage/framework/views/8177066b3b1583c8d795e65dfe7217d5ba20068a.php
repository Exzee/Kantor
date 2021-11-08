<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data</title>
    <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.ico')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    
    
    <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th colspan="3" class="btn-warning"><h4>Cetak Data Pegawai</h4></th>
        </tr>
      </thead>
        <tbody>
          
          <tr>
            <th scope="row">ID Badge</th>
            <td>: <?php echo e(old('id',$model->nik)); ?></td>
            <td rowspan="10">
          <!-- sisipkan foto -->
          <?php if(strlen($model->foto_pegawai)>0): ?>
          <img class="img-thumbnail mx-auto" width="400px" src="<?php echo e(asset('images/pegawai/'.$model->foto_pegawai)); ?>"/>
          <?php endif; ?>
          <?php if(strlen($model->foto_pegawai)<1): ?>
          <img class="img-thumbnail mx-auto" width="400px" src="<?php echo e(asset('images/pegawai/picture_null.png')); ?>"/>
          <?php endif; ?>
            </td>
          </tr>
          
        <tr>
          <th scope="row">Nama Pegawai</th>
          <td >: <?php echo e(old('id',$model->nama)); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Jenis Kelamin</th>
          <td>: <?php echo e(old('jenis_kelamin',$model->jenis_kelamin)); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Email</th>
          <td>: <?php echo e(old('email',$model->email)); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Tanggal Lahir</th>
          <td>: <?php echo e(old('tanggal_lahir',$model->tanggal_lahir)); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Status Pernikahan</th>
          <td>: <?php echo e(old('status_pernikahan',$model->status_pernikahan)); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Jumlah Anak</th>
          <td>: <?php echo e(old('jumlah_anak',$model->jumlah_anak)); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Agama</th>
          <td>: <?php echo e(old('agama',$model->agama)); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Tahun Masuk</th>
          <td>: <?php echo e(old('tahun_masuk',$model->tahun_masuk)); ?></td>
        </tr>
        </tr>
        
        <tr>
          <th scope="row">Tahun Masuk</th>
          <td>: <?php echo e(old('jabatan',$model->jabatan)); ?></td>
        </tr>
        </tr>
      </tbody>
    </table>
  </div>

</div>

<script type="text/javascript">
  window.onload = function() { window.print(); }
</script>

</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\kantor\resources\views/pegawai/cetak-pegawai.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Sample Masuk</title>
    <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.ico')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    
    
    <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th colspan="3" class="btn-warning"><h4>Cetak Data Sample Masuk</h4></th>
        </tr>
      </thead>
        <tbody>
          
          <tr>
            <th scope="row">Segment</th>
            <td>: <?php echo e(old('id',$model->segment)); ?></td>
            
          </tr>
          
        <tr>
          <th scope="row">Kode Sample</th>
          <td >: <?php echo e(old('id',$model->id_sample)); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Tanggal Terima Sample</th>
          <td>: <?php echo e(date('d-M-Y', strtotime( old('tanggal_terima_sample',$model->tanggal_terima_sample)))); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Pengirim Sample</th>
          <td>: <?php echo e(old('pengirim_sample',$model->pengirim_sample)); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Jenis Sample</th>
          <td>: <?php echo e(old('jenis_sample',$model->jenis_sample)); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Tipe Benang</th>
          <td>: <?php echo e(old('tipe_benang',$model->tipe_benang)); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Lot Number</th>
          <td>: <?php echo e(old('lot_number',$model->lot_number)); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Problem</th>
          <td>: <?php echo e(old('problem_sample',$model->problem_sample)); ?></td>
        </tr>
        
        <tr>
          <th scope="row">Deskripsi Sample</th>
          <td>: <?php echo e(old('rincian_sample_masuk',$model->rincian_sample_masuk)); ?></td>
        </tr>
        </tr>
        
        <tr>
          <th scope="row">Foto Sample</th>
          <td rowspan="10">
            <!-- sisipkan foto -->
            <?php if(strlen($model->foto_sample)>0): ?>
            <img class="img-thumbnail" width="400px" src="<?php echo e(asset('images/samplemasuk/'.$model->foto_sample)); ?>"/>
            <?php endif; ?>
            <?php if(strlen($model->foto_sample)<1): ?>
            <img class="img-thumbnail" width="400px" src="<?php echo e(asset('images/samplemasuk/blank-img.jpg')); ?>"/>
            <?php endif; ?>
              </td>
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
</html><?php /**PATH C:\xampp\htdocs\laravel\kantor\resources\views/samplemasuk/cetak/cetak.blade.php ENDPATH**/ ?>
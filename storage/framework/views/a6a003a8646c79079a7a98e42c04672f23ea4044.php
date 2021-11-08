

<?php $__env->startSection('title', 'Rubah Data Sample Masuk'); ?>
    

<?php $__env->startSection('breadcrumbs'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Rubah Data</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">                   
                    <li><a href="#">Sample Masuk</a></li>
                    <li class="active">Edit Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
           
            <div class="card-header">
                <div class="pull-header">
                    <div class="pull-left">
                        <strong>Masukkan Data Perubahan Sample Masuk</strong>
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo e(url('samplemasuk')); ?>" class="btn btn-warning btn-sm">
                            <i class="ti ti-back-right"></i> Back
                        </a>
                    </div>                     
                </div>
            </div>
            
                <div class="card-body table-responsive">
                <div class="card-body card-block">
                    
                      <form action="<?php echo e(url('samplemasuk/'.$model->id)); ?>" method="post" enctype="multipart/form-data" class="form-horizontal needs-validation" >
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="_method" value="patch">

                        <?php echo $__env->make('samplemasuk._FormCreate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
                        
                        
                      </form>
                    </div>                    
                  </div>
            </div>
        </div>             
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\kantor\resources\views/samplemasuk/edit.blade.php ENDPATH**/ ?>
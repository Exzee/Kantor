

<?php $__env->startSection('title', 'Tambah Data Sample Masuk'); ?>
    

<?php $__env->startSection('breadcrumbs'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">                   
                    <li><a href="#">Sample Masuk</a></li>
                    <li class="active">Tambah Data</li>
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
                        <strong>Masukkan Sample Masuk Baru</strong>
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
                    
                      <form action="<?php echo e(url('samplemasuk')); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <?php echo csrf_field(); ?>

                        <?php echo $__env->make('samplemasuk._FormCreate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
                        
                        
                      </form>
                    </div>                    
                  </div>
            </div>
        </div>             
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\kantor\resources\views/samplemasuk/create.blade.php ENDPATH**/ ?>
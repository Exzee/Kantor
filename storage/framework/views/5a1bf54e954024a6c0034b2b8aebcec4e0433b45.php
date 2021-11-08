

<?php $__env->startSection('title', 'Data Pegawai'); ?>
    

<?php $__env->startSection('breadcrumbs'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>MyOffice</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>




<?php $__env->startSection('contents'); ?>

<div class="content mt-3">
    
    <?php if(Session::has('sukses')): ?>
    <p class="alert alert-success"><?php echo e(Session::get('sukses')); ?></p>
    <?php endif; ?>
    <?php if(Session::has('hapus')): ?>
    <p class="alert alert-danger"><?php echo e(Session::get('hapus')); ?></p>
    <?php endif; ?>

    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-header">
                    <div class="pull-left">
                        <strong>Data Pegawai</strong>
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo e(url('pegawai/create')); ?>" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i> Add
                        </a>
                    </div>
                    <div class="pull-right">
                        
                        <div class="form-inline">
                            <form class="search-form" action="<?php echo e(url('pegawai')); ?>" method="GET">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." value="<?php echo e($keyword); ?>" name="keyword">
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Tanggal Lahir</th>
                            <th>Tahun Masuk</th>
                            <th>Jabatan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($item->nik); ?></td>
                                <td><?php echo e($item->nama); ?></td>
                                <td><?php echo e($item->alamat); ?></td>
                                <td><?php echo e($item->email); ?></td>
                                <td><?php echo e(date('d-M-Y', strtotime($item->tanggal_lahir))); ?></td>
                                <td><?php echo e($item->tahun_masuk); ?></td>
                                <td><?php echo e($item->jabatan); ?></td>
                                <td class="text-center">
                                    
                                    <a href="<?php echo e(url('pegawai/'.$item->id)); ?>" class="btn btn-warning btn-sm">
                                        <i class="ti ti-new-window"></i>
                                    </a>
                                    
                                    <a href="<?php echo e(url('pegawai/'.$item->id.'/edit')); ?>" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    
                                    
                                    <form action="<?php echo e(url('pegawai/'.$item->id)); ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                        <?php echo method_field('delete'); ?>
                                        <?php echo csrf_field(); ?>
                                        
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i>                                        
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>      
                </table>
                <!--Pagination-->    
                <?php echo e($datas->links('pagination::bootstrap-4')); ?>

            </div>
        </div>             
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kantor\resources\views/pegawai/index.blade.php ENDPATH**/ ?>
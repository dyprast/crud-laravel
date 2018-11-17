<?php $__env->startSection('content'); ?>

<div class="container page">
    <div class="header" style="display: flex;justify-content: space-between; align-items: center; margin: 20px 0;">
            <div class="header-indicator">
                <p class="h5"><i class="fas fa-home"></i> Halaman Utama</p>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-tachometer-alt"></i> Navigasi Menu</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <a href="<?php echo e(url('jurusan')); ?>" class="btn btn-success">Jurusan</a>
                    <a href="<?php echo e(url('kelas')); ?>" class="btn btn-success">Kelas</a>
                    <a href="<?php echo e(url('siswa')); ?>" class="btn btn-success">Siswa</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
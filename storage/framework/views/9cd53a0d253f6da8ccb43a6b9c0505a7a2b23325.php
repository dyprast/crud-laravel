<?php $__env->startSection('content'); ?>
	<div class="container page" style="padding-top: 70px;">
		<div class="card">
			<div class="card-header"><i class="fab fa-grav"></i> Edit Jurusan</div>
			<div class="card-body">
				<a href="<?php echo e(url('jurusan')); ?>" class="btn btn-success">Kembali</a>
				<?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<form method="POST" action="<?php echo e(url('jurusan/update_jurusan/'.$key->id)); ?>" class="form">
					<?php echo csrf_field(); ?>
					<div class="form-group row">
					    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
						     <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?php echo e($key->nama); ?>">
						</div>
					</div>
					<div class="form-group row">
					    <label for="kajur" class="col-sm-2 col-form-label">Kajur</label>
						<div class="col-sm-10">
						     <input type="text" class="form-control" id="kajur" placeholder="Kajur" name="kajur" value="<?php echo e($key->kajur); ?>">
						</div>
					</div>

					<div class="action-form">
						<button type="submit" class="btn btn-primary">Ubah Data</button>
					</div>
				</form>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
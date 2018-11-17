<?php $__env->startSection('content'); ?>
	<div class="container page" style="padding-top: 70px;">
		<div class="card">
			<div class="card-header"><i class="fas fa-door-open"></i> Edit Kelas</div>
			<div class="card-body">
				<a href="<?php echo e(url('kelas')); ?>" class="btn btn-success">Kembali</a>
				<form method="POST" action="<?php echo e(url('kelas/update_kelas/'.$kelas->id)); ?>" class="form">
					<?php echo csrf_field(); ?>
					<div class="form-group row">
					    <label for="Kelas_id" class="col-sm-2 col-form-label">Jurusan ID</label>
						<div class="col-sm-10">
						     <select class="form-control" id="jurusan_id" name="jurusan_id">
						     	<option value="<?php echo e($kelas->jurusan_id); ?>"><?php echo e($kelas->jurusan_id); ?> ( Tidak Diubah )</option>
						     	<?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						     	<option value="<?php echo e($key->id); ?>"><?php echo e($key->id); ?> ( <?php echo e($key->nama); ?> )</option>
						     	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						     </select>
						</div>
					</div>
					<div class="form-group row">
					    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
						     <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?php echo e($kelas->nama); ?>">
						</div>
					</div>
					<div class="action-form">
						<button type="submit" class="btn btn-primary">Ubah Data</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
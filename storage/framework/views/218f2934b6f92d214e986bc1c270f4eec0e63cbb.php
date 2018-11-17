<?php $__env->startSection('content'); ?>
	<div class="container page" style="padding-top: 70px;">
		<div class="card">
			<div class="card-header"><i class="fas fa-graduation-cap"></i> Tambah Siswa Baru</div>
			<div class="card-body">
				<a href="<?php echo e(url('siswa')); ?>" class="btn btn-success">Kembali</a>
				<form method="POST" action="<?php echo e(url('siswa/simpan_siswa')); ?>" class="form">
					<?php echo csrf_field(); ?>
					<div class="form-group row">
					    <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
						<div class="col-sm-10">
						     <input type="text" class="form-control" id="nama" placeholder="Nama Siswa" name="nama">
						</div>
					</div>
					<div class="form-group row">
					    <label for="Kelas_id" class="col-sm-2 col-form-label">Kelas ID</label>
						<div class="col-sm-10">
						     <select class="form-control" id="Kelas_id" name="kelas_id">
						     	<?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						     	<option value="<?php echo e($key->id); ?>"><?php echo e($key->id); ?> ( <?php echo e($key->nama); ?> )</option>
						     	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						     </select>
						</div>
					</div>
					<div class="form-group row">
					    <label for="jurusan_id" class="col-sm-2 col-form-label">Jurusan ID</label>
						<div class="col-sm-10">
						     <select class="form-control" id="jurusan_id" name="jurusan_id">
						     	<?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						     	<option value="<?php echo e($key->id); ?>"><?php echo e($key->id); ?> ( <?php echo e($key->nama); ?> )</option>
						     	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						     </select>
						</div>
					</div>
					<div class="action-form">
						<button type="submit" class="btn btn-primary">Tambah Baru</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
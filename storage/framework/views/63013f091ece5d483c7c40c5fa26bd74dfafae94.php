<?php $__env->startSection('content'); ?>
	<div class="container page" style="padding-top: 70px">
		<div class="card">
			<div class="card-header"><i class="fab fa-grav"></i> Tambah Jurusan Baru</div>
			<div class="card-body">
				<a href="<?php echo e(url('jurusan')); ?>" class="btn btn-success">Kembali</a>
				<form method="POST" action="<?php echo e(url('jurusan/simpan_jurusan')); ?>" class="form">
					<?php echo csrf_field(); ?>
					<div class="form-group row">
					    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
						     <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
						</div>
					</div>
					<div class="form-group row">
					    <label for="kajur" class="col-sm-2 col-form-label">Kajur</label>
						<div class="col-sm-10">
						     <input type="text" class="form-control" id="kajur" placeholder="Kajur" name="kajur">
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
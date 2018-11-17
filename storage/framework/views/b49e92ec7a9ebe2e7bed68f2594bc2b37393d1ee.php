<?php $__env->startSection('content'); ?>
	<div class="container page">
		<div class="header" style="display: flex;justify-content: space-between; align-items: center; margin: 20px 0;">
			<div class="header-indicator">
				<p class="h5"><i class="fab fa-grav"></i> Halaman Jurusan</p>
			</div>
			<a href="<?php echo e(url('jurusan/tambah_jurusan')); ?>" class="btn btn-success">Tambah Baru</a>
		</div>
		<div class="wrap-table">
		<table class="table table-light table-bordered">
	      <thead class="thead">
	        <tr>
	            <th scope="col" style="text-align: center;">ID</th>
	            <th scope="col" style="text-align: center;">Nama</th>
	            <th scope="col" style="text-align: center;">Jumlah Siswa</th>
	            <th scope="col" style="text-align: center;">Kajur</th>
	            <th scope="col" style="text-align: center;">Created at</th>
	            <th scope="col" style="text-align: center;">Updated at</th>
	            <th scope="col" style="text-align: center;">Action</th>
	        </tr>
	      </thead>
	        <tbody>
	          <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	          <tr>
	            <td style="text-align: center;"><?php echo e($row->id); ?></td>
	            <td><?php echo e($row->nama); ?></td>
	            <td><?php echo e($row->jumlah_siswa); ?></td>
	            <td><?php echo e($row->kajur); ?></td>
	            <td><?php echo e($row->created_at); ?></td>
	            <td><?php echo e($row->updated_at); ?></td>
	            <td style="text-align: center;">
	              <a href="<?php echo e(url('jurusan/ubah_jurusan/'.$row->id)); ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
	              <a onclick="return confirm('Apakah Anda yakin ingin menghapus jurusan <?php echo e($row->nama); ?>?')" href="<?php echo e(url('jurusan/delete/'.$row->id)); ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
	            </td>
	          </tr>
	          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        </tbody>
	    </table>
	    </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
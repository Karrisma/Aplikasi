

<?php $__env->startSection('konten'); ?>
  <a href='/guru' class="btn btn-secondary"><< Kembali </a>
<form method="post" action="<?php echo e('/guru/'.$data->nomor_induk); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="mb-3">
      <h1>Nomor Induk: <?php echo e($data->nomor_induk); ?></h1>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name='nama' id="nama" value="<?php echo e($data->nama); ?>">    
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat"> <?php echo e($data->alamat); ?> </textarea>
      </div>

      <?php if($data->foto): ?>
        <div class="mb3">
          <img style="max-width: 100px;max-height:100px "  src="<?php echo e(url ('foto').'/'.$data->foto); ?>"/>
        </div>
          
      <?php endif; ?>
      <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
       <input type="file" class="form-control" name="foto" id="foto">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">UPDATE</button>
      </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/Aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi\coba-laravel\resources\views/guru/edit.blade.php ENDPATH**/ ?>
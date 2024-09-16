

<?php $__env->startSection('konten'); ?>
<form method="post" action="/guru" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
      <label for="nomor_induk" class="form-label">Nomor Induk</label>
      <input type="text" class="form-control" name='nomor_induk' id="nomor_induk"  value="<?php echo e(Session::get('nomor_induk')); ?>">    
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name='nama' id="nama" value="<?php echo e(Session::get('nama')); ?>">    
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat"> <?php echo e(Session::get('alamat')); ?> </textarea>
      </div>
      <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
       <input type="file" class="form-control" name="foto" id="foto">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">SIMPAN</button>
      </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/Aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi\coba-laravel\resources\views/guru/create.blade.php ENDPATH**/ ?>
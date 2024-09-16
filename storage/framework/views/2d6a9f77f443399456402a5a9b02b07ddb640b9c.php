

<?php $__env->startSection('konten'); ?>
   
   <div>
        <a href='/guru' class="btn btn-secondary"><< Back</a>
        <h1><?php echo e($data->nama); ?></h1>
        <p>
            <b>Nomor Induk</b> <?php echo e($data->nomor_induk); ?>

        </p>
        <p>
            <b>Alamat</b> <?php echo e($data->alamat); ?>

        </p>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/Aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi\coba-laravel\resources\views/guru/show.blade.php ENDPATH**/ ?>
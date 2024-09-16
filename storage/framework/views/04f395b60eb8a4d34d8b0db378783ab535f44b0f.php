

<?php $__env->startSection('konten'); ?>

<h1><?php echo e($judul); ?> </h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dolorem quo labore magnam iure doloribus molestias? Qui, ex,
     earum dolores reiciendis sed pariatur architecto, praesentium obcaecati nihil aut dolorem quasi.</p>
<p> 
    <ul>
        <li>Email: <?php echo e($kontak['email']); ?></li>
        <li>Instagram: <?php echo e($kontak['instagram']); ?></li>
    </ul>
</p>
<?php $__env->stopSection(); ?>
    
   
<?php echo $__env->make('layout/Aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi\coba-laravel\resources\views/Halaman/kontak.blade.php ENDPATH**/ ?>
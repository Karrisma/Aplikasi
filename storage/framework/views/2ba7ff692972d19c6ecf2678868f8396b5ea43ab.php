

<?php $__env->startSection('konten'); ?>
    <div class="w-50 text-center border rounded px-5 py-5 mx-auto">
        <h1>SELAMAT DATANG</h1>
                <P>Silahkan Login atau Register untuk masuk ke Aplikasi</P>
                <a href="/guru/sesi" class="btn btn-primary btn-lg">LOGIN</a>
                <a href="/sesi/register" class="btn btn-success btn-lg">REGISTER</a>
            </div>
            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/Aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi\coba-laravel\resources\views/sesi/welcome.blade.php ENDPATH**/ ?>
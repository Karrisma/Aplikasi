

<?php $__env->startSection('konten'); ?>
    <div class="w-40 center border rounded px-5 py-5 mx-auto">
        <h1>Login</h1>
        <form action="/sesi/login" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="<?php echo e(Session::get('email')); ?> "name="email"class="form-control">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password"class="form-control">
            </div>

            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/Aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi\coba-laravel\resources\views/sesi/index.blade.php ENDPATH**/ ?>
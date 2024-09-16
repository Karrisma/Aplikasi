

<?php $__env->startSection('konten'); ?>
        <a href="/guru/create" class="btn btn-primary">+Tambah Data Guru</a>
   <table class="table">
    <thead>
        <tr>
            <th>Foto</th>
            <th>Nomer Induk</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>   
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php if($item->foto): ?>
                    <img style="max-width:70px;max-height:70px" src="<?php echo e(url('foto').'/'.$item->foto); ?>"/>
                        
                    <?php endif; ?>
                </td>
                <td><?php echo e($item->nomor_induk); ?></td>
                <td><?php echo e($item->nama); ?></td>
                <td><?php echo e($item->alamat); ?></td>
                <td>
                    <a class='btn btn-secondary btn-sm' href='<?php echo e(url('/guru/' .$item->nomor_induk)); ?>'>Detail</a>
                    <a class='btn btn-warning btn-sm' href='<?php echo e(url('/guru/' .$item->nomor_induk. '/edit')); ?>'>Edit</a>
                    <form onsubmit="return confirm('Anda Yakin Hapus data?')" class='d-inline' action="<?php echo e('/guru/'.$item->nomor_induk); ?>" method='post'>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
    <?php echo e($data->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/Aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi\coba-laravel\resources\views/guru/index.blade.php ENDPATH**/ ?>
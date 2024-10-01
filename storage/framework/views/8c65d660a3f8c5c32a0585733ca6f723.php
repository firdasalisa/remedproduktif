<?php $__env->startSection('title', 'Detail Merk'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Detail Merk</h3>
        </div>
        <div class="card-body">
            <p><strong>Brand:</strong> <?php echo e($merk->merk_barang); ?></p>
            <a href="<?php echo e(route('merk.index')); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\inventaris\resources\views/merk/show.blade.php ENDPATH**/ ?>
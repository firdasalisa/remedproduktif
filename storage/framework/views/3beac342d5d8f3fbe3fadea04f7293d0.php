<?php $__env->startSection('title'); ?>
    edit merek
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-8 offset-2">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Merk</h4>
                <hr>
                <form action="<?php echo e(route('merk.update', $merk->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <input type="hidden" name="id" id="id" value="<?php echo e($merk->id); ?>">
                    <div class="mb-3">
                        <label for="">merk barang</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="" placeholder="Masukkan merk barang"
                            name="merk" value="<?php echo e($merk->merk_barang); ?>">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning btn-sm">edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\inventaris\resources\views/merk/edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
Merk Barang
<?php $__env->stopSection(); ?>
<?php $__env->startSection('judul'); ?>
List Brand
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="mb-3">
        <a href="<?php echo e(route('merk.create')); ?>" class="btn btn-primary">Tambah Merk</a>
    </div>
    <div class="row">
        <div class="col-12 col-lg-11 col-xxl-11 d-flex ">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">Latest Projects</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="d-none d-xl-table-cell">Brand</th>
                            <th class="d-none d-xl-table-cell">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $merk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $merk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td class="d-none d-xl-table-cell"><?php echo e($merk->merk_barang); ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="<?php echo e(route('merk.edit', $merk->id)); ?>" class="btn btn-warning btn-sm">Edit</a>

                                    <form action="<?php echo e(route('merk.destroy', $merk->id)); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus merk ini?')">Delete</button>
                                    </form>

                                    <a href="<?php echo e(route('merk.show', $merk->id)); ?>" class="btn btn-success btn-sm">Show</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\inventaris\resources\views/merk/index.blade.php ENDPATH**/ ?>
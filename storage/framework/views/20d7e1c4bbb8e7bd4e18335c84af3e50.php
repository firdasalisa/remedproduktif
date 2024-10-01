<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>halaman beranda</title>
</head>

<body>
    <div>
        <center>
            <h2>Ini adalah halaman beranda</h3>
                <h4>List User</h4>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($value['id']); ?>

                <?php echo e($value['nama']); ?><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php
                $today = Carbon\Carbon::now()->translatedFormat('d M Y');
                echo $today;
                ?>



        </center>
    </div>
</body>

</html><?php /**PATH C:\laragon\www\inventaris\resources\views/home.blade.php ENDPATH**/ ?>
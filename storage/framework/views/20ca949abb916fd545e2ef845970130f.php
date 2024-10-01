<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elegant Dashboard | Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.min.css')); ?>" />
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <?php echo $__env->make('partial.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="main-wrapper">
            <!-- ! Main nav -->
            <?php echo $__env->make('partial.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- ! Main -->
            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    <h2 class="main-title"><?php echo $__env->yieldContent('title'); ?></h2>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="users-table table-wrapper">
                                
                                <?php if($message = Session::get('success')): ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert"
                                        id="myAlert">
                                        <strong>Success!</strong> <?php echo e($message); ?>

                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <?php echo $__env->yieldContent('content'); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
            <!-- ! Footer -->
            <footer class="footer">
                <div class="container footer--flex">
                    <div class="footer-start">
                        <p>
                            2021 © Elegant Dashboard -
                            <a href="elegant-dashboard.com" target="_blank"
                                rel="noopener noreferrer">elegant-dashboard.com</a>
                        </p>
                    </div>
                    <ul class="footer-end">
                        <li><a href="##">About</a></li>
                        <li><a href="##">Support</a></li>
                        <li><a href="##">Puchase</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    <!-- Chart library -->
    <script src="<?php echo e(asset('assets/plugins/chart.min.js')); ?>"></script>
    <!-- Icons library -->
    <script src="<?php echo e(asset('assets/plugins/feather.min.js')); ?>"></script>
    <!-- Custom scripts -->
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>

    


    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\inventaris\resources\views/layouts/app.blade.php ENDPATH**/ ?>
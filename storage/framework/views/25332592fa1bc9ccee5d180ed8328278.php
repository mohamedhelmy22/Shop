<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->




    <ul class="navbar-nav mr-auto-navbav">
        <!-- Messages Dropdown Menu -->

























































        <!-- Notifications Dropdown Menu -->


























        <div class="btn-group mb-1">
            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php if( Config::get('app.locale')  == 'ar'): ?>
                    <?php echo e(LaravelLocalization::getCurrentLocaleName()); ?>

                    <img src="<?php echo e(asset('assets/img/flags/ar.png')); ?>" alt="ar" style="max-width: 20px">
                <?php else: ?>
                    <?php echo e(LaravelLocalization::getCurrentLocaleName()); ?>

                    <img src="<?php echo e(asset('assets/img/flags/en.png')); ?>" alt="en" style="max-width: 20px">
                <?php endif; ?>
            </button>
            <div class="dropdown-menu">
                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                        <?php echo e($properties['native']); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="btn-group mb-1">
            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

            </a>
            <div class="dropdown-menu">
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>

    </ul>
</nav>
<?php /**PATH C:\xampp\htdocs\shop\resources\views/admin/layout/main_header.blade.php ENDPATH**/ ?>
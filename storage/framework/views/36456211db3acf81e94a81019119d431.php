<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo e($route == 'index_page' ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(url('/')); ?>"><?php echo e(trans('website_navbar.Home')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e($route == 'categories_page' ? 'active' : ''); ?>"  href="<?php echo e(route('get_categories')); ?>"><?php echo e(trans('website_navbar.category')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e($route == 'cart_page' ? 'active' : ''); ?>"  href="<?php echo e(route('cart.index')); ?>"><?php echo e(trans('website_navbar.cart')); ?></a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(trans('website_navbar.login')); ?></a>
                        </li>
                    <?php endif; ?>

                    <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(trans('website_navbar.register')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?>

                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php if( Config::get('app.locale')  == 'ar'): ?>
                            <?php echo e(LaravelLocalization::getCurrentLocaleName()); ?>

                            <img src="<?php echo e(asset('assets/img/flags/ar.png')); ?>" alt="ar" style="max-width: 20px">
                        <?php else: ?>
                            <?php echo e(LaravelLocalization::getCurrentLocaleName()); ?>

                            <img src="<?php echo e(asset('assets/img/flags/en.png')); ?>" alt="en" style="max-width: 20px">
                        <?php endif; ?>
                    </button>
                    <ul class="dropdown-menu">
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                <?php echo e($properties['native']); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\shop\resources\views/website/layouts/navbar.blade.php ENDPATH**/ ?>
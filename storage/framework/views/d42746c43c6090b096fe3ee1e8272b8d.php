<?php $__env->startSection('title'); ?>
    <?php echo e($category->slug); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row py-4 bg-warning">
    <nav aria-label="breadcrumb" >
        <ol class="breadcrumb px-5">
            <li class="breadcrumb-item"><a href="<?php echo e(route('get_categories')); ?>"><?php echo e(trans('website_trans.category')); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e($category->slug); ?></li>
        </ol>
    </nav>
</div>


    <div class="py-5">
        <div class="container">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo e(Storage::url($category->image)); ?>" class="card-img-top img-responsive" style= "height: 250px; width: 100%;" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($category->name); ?></h5>
                            <p class="card-text"><?php echo e($category->description); ?></p>
                            <hr>
                            <p class="card-text"><?php echo e($category->meta_description); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="py-5">
        <div class="container">
            <h2><?php echo e(trans('website_trans.product')); ?></h2>

            <div class="row">
                <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-4">
                        <div class="card my-5" style="width: 18rem;">
                            <img src="<?php echo e(Storage::url($product->image)); ?>" class=" card-img-top img-responsive"
                                 style="height: 250px; width: 100%;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($product->meta_title); ?></h5>
                                <p class="card-text"><?php echo e($product->meta_description); ?></p>
                                <span class=float-start">
                                <?php echo e($product->selling_price); ?>

                            </span>
                                <span class="float-end">
                                <s><?php echo e($product->price); ?></s>
                            </span>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>

    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\elalrayanshop\resources\views/website/category.blade.php ENDPATH**/ ?>
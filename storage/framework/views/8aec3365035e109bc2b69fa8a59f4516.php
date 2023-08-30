<?php $__env->startSection('title'); ?>
    <?php echo e(trans('website_trans.category')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="py-5">
        <div class="container">
            <h2 class="text-center"><?php echo e(trans('website_trans.category')); ?></h2>
            <div class="row">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <a href="<?php echo e(route('get_category_slug',$category->slug)); ?>">
                            <div class="card my-5" style="width: 18rem;">
                                <img src="<?php echo e(Storage::url($category->image)); ?>" class=" card-img-top img-responsive" style= "height: 250px; width: 100%;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($category->meta_title); ?></h5>
                                    <p class="card-text"><?php echo e($category->meta_description); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            </div>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\elalrayanshop\resources\views/website/categories.blade.php ENDPATH**/ ?>
<div class="py-5">
    <div class="container">
        <h2 class="text-center"><?php echo e(trans('website_trans.trend_category')); ?></h2>

        <div class="owl-carousel trend_category trend_product owl-theme py-5">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <a href="<?php echo e(route('get_category_slug',$category->slug)); ?>">
                        <div class="card my-5" style="width: 18rem;">
                            <img src="<?php echo e(Storage::url($category->image)); ?>" class=" card-img-top img-responsive"
                                 style="height: 250px; width: 100%;" alt="...">
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
<?php /**PATH C:\xampp\htdocs\shop\resources\views/website/sections/trend_category.blade.php ENDPATH**/ ?>
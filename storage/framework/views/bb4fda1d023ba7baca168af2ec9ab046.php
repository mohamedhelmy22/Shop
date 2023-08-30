<div class="py-5">
    <div class="container">
        <h2 class="text-center"><?php echo e(trans('website_trans.trend_product')); ?></h2>

        <div class="owl-carousel trend_product owl-theme py-5">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('get_product_slug',[$product->category->slug,$product->slug])); ?>">
                <div class="item">
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
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\shop\resources\views/website/sections/trend_product.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(trans('admin_title_page_trans.show_category')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo e(trans('admin_title_page_trans.show_category')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="card-body">
        <?php if(session('error_catch')): ?>
        <div class="bg-danger"><?php echo e(session('error_catch')); ?></div>
        <?php endif; ?>
        <form>

            <div class="row">
                <div class="col">
                    <label for="name_ar"><?php echo e(trans('category_trans.name_ar')); ?></label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name_ar" value="<?php echo e($category->getTranslation('name','ar')); ?>" readonly>
                    </div>
                </div>
                <div class="col">
                    <label for="name_en"><?php echo e(trans('category_trans.name_en')); ?></label>
                    <div class="input-group mb-3 col">
                        <input type="text" class="form-control " name="name_en" value="<?php echo e($category->getTranslation('name','en')); ?>" readonly>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="slug"><?php echo e(trans('category_trans.slug')); ?></label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="slug" value="<?php echo e($category->slug); ?>" readonly>
                    </div>
                </div>
                <div class="col">
                    <label for="image"><?php echo e(trans('category_trans.image')); ?></label>
                    <div class="input-group mb-3 col">
                        <img src="<?php echo e(Storage::url($category->image)); ?>" alt="" class="img-thumbnail" style="max-width:200px;">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="description_ar"><?php echo e(trans('category_trans.description_ar')); ?></label>
                    <div class="input-group mb-3">
                        <textarea name="description_ar" rows="3" cols="3"
                                  class="form-control" readonly><?php echo e($category->getTranslation('description','ar')); ?></textarea>
                    </div>

                </div>
                <div class="col">
                    <label for="description_en"><?php echo e(trans('category_trans.description_en')); ?></label>
                    <div class="input-group mb-3">
                        <textarea name="description_en" rows="3" cols="3"
                                  class="form-control" readonly><?php echo e($category->getTranslation('description','en')); ?></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="is_showing"><?php echo e(trans('category_trans.is_showing')); ?></label>
                    <div class="input-group mb-3">
                        <?php if($category->is_showing == 1): ?>
                            <span class="badge badge-success"><?php echo e(trans('category_trans.showing')); ?></span>
                        <?php else: ?>
                            <span class="badge badge-danger"><?php echo e(trans('category_trans.hidden')); ?></span>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="col">
                    <label for="is_popular"><?php echo e(trans('category_trans.is_popular')); ?></label>
                    <div class="input-group mb-3 col">
                        <?php if($category->is_popular == 1): ?>
                            <span class="badge badge-success"><?php echo e(trans('category_trans.popular')); ?></span>
                        <?php else: ?>
                            <span class="badge badge-danger"><?php echo e(trans('category_trans.no_popular')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="meta_title_ar"><?php echo e(trans('category_trans.meta_title_ar')); ?></label>
                    <div class="input-group mb-3">
                        <input type="text" name="meta_title_ar"
                               class="form-control" value="<?php echo e($category->getTranslation('meta_title','ar')); ?>" readonly>
                    </div>
                </div>
                <div class="col">
                    <label for="meta_title_en"><?php echo e(trans('category_trans.meta_title_en')); ?></label>
                    <div class="input-group mb-3">
                        <input type="text" name="meta_title_en"
                               class="form-control" value="<?php echo e($category->getTranslation('meta_title','en')); ?>" readonly>
                    </div>
                    <?php $__errorArgs = ['meta_title_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="meta_description_ar"><?php echo e(trans('category_trans.meta_description_ar')); ?></label>
                    <div class="input-group mb-3">
                    <textarea name="meta_description_ar" rows="3" cols="3"
                              class="form-control" readonly><?php echo e($category->getTranslation('meta_description','ar')); ?></textarea>
                    </div>
                </div>
                <div class="col">
                    <label for="meta_description_en"><?php echo e(trans('category_trans.meta_description_en')); ?></label>
                    <div class="input-group mb-3">
                    <textarea name="meta_description_en" rows="3" cols="3"
                              class="form-control" readonly><?php echo e($category->getTranslation('meta_description','en')); ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="meta_keywords"><?php echo e(trans('category_trans.meta_keyword')); ?></label>
                    <div class="input-group mb-3">
                    <textarea name="meta_keywords" rows="3" cols="3"
                              class="form-control" readonly><?php echo e($category->meta_keywords); ?></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\elalrayanshop\resources\views/admin/category/show.blade.php ENDPATH**/ ?>
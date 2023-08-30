<?php $__env->startSection('title'); ?>
    <?php echo e(trans('admin_title_page_trans.category')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo e(trans('admin_title_page_trans.category')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Content Wrapper. Contains page content -->
   <div class="card-header">
       <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-outline-primary"><?php echo e(trans('buttons_trans.create')); ?></a>
   </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th><?php echo e(trans('category_trans.name')); ?></th>
                <th><?php echo e(trans('category_trans.image')); ?></th>
                <th><?php echo e(trans('category_trans.is_showing')); ?></th>
                <th><?php echo e(trans('category_trans.is_popular')); ?></th>
                <th><?php echo e(trans('buttons_trans.Actions')); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($category->name); ?></td>
                <td><img src="<?php echo e(Storage::url($category->image)); ?>" alt="" class="img-thumbnail" style="max-width:100px;"></td>
                <td>
                    <?php if($category->is_showing == 1): ?>
                        <span class="badge badge-success"><?php echo e(trans('category_trans.showing')); ?></span>
                    <?php else: ?>
                        <span class="badge badge-danger"><?php echo e(trans('category_trans.hidden')); ?></span>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if($category->is_popular == 1): ?>
                        <span class="badge badge-success"><?php echo e(trans('category_trans.popular')); ?></span>
                    <?php else: ?>
                        <span class="badge badge-danger"><?php echo e(trans('category_trans.no_popular')); ?></span>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route('categories.show',$category->id)); ?>" class="btn btn-sm btn-outline-success"><?php echo e(trans('buttons_trans.show')); ?></a>
                    <a href="<?php echo e(route('categories.edit',$category->id)); ?>" class="btn btn-sm btn-outline-warning"><?php echo e(trans('buttons_trans.edit')); ?></a>
                   <?php echo $__env->make('admin.includes.delete_modal',['type'=>'category','data'=>$category,'routes'=>'categories.destroy'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assets/plugins/datatables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')); ?>"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            // });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop\resources\views/admin/category/index.blade.php ENDPATH**/ ?>
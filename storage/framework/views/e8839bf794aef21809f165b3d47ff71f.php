
<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#delete_<?php echo e($type); ?>_<?php echo e($data->id); ?>">
    <?php echo e(trans('buttons_trans.delete')); ?>

</button>

<!-- Modal -->
<div class="modal fade" id="delete_<?php echo e($type); ?>_<?php echo e($data->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route($routes,$data->id)); ?>" method="post">
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <h3><?php echo e(trans('messages_trans.delete_sure')); ?></h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><?php echo e(trans('buttons_trans.delete')); ?></button>
                </div>

            </form>


        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\elalrayanshop\resources\views/admin/includes/delete_modal.blade.php ENDPATH**/ ?>
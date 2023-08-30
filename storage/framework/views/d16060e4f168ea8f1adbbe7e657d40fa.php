<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_<?php echo e($type); ?>_<?php echo e($data->id); ?>">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#b33737}</style><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
</button>

<!-- Modal -->
<div class="modal fade" id="delete_<?php echo e($type); ?>_<?php echo e($data->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
<?php /**PATH C:\xampp\htdocs\shop\resources\views/website/includes/delete_modal.blade.php ENDPATH**/ ?>
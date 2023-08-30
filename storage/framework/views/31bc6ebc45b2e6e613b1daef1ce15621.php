<?php $__env->startSection('title'); ?>
<?php echo e(trans('website_trans.category')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100" id="cart_div">
            <div class="col-10">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                    <div>


                    </div>
                </div>

                <?php $total_price = 0; ?>
                <?php $__empty_1 = true; $__currentLoopData = $cart_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="card rounded-3 mb-4">
                    <div class="card-body p-4">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                    src="<?php echo e(Storage::url($product_cart->Product->image)); ?>"
                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2"><?php echo e($product_cart->Product->name); ?></p>

                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateCart(<?php echo e($product_cart->id); ?>)">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="qty" value="<?php echo e($product_cart->qty); ?>" type="number"
                                       class="form-control form-control-sm qty_<?php echo e($product_cart->id); ?>" />

                                <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateCart(<?php echo e($product_cart->id); ?>)">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h5 class="mb-0" id="">
                                    <?php $product_total = $product_cart->Product->selling_price *  $product_cart->qty; ?>
                                    <?php echo e($product_total); ?>

                                </h5>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">

                                <?php echo $__env->make('website.includes.delete_modal',['type'=>'cart','data'=>$product_cart,'routes'=>'cart.destroy'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php $total_price += $product_cart->Product->selling_price * $product_cart->qty ; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h6>there are no products</h6>

                <?php endif; ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <h3 id="total"><?php echo e($total_price); ?></h3>
                </div>
                <div class="col-4">
                    <a href="<?php echo e(route('checkout.index')); ?>" class="btn btn-success "><?php echo e(trans('website_trans.checkout')); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        function updateCart(id){
            var qty = $('.qty_'+id).val();

            $.ajax({
                method : 'POST',
                url : "<?php echo e(route('cart.update')); ?>",
                dataType : 'json',
                data : {
                    id  : id,
                    qty : qty
                },
                success : function (response){
                    console.log(response.msg)
                    $('#cart_div').load(location.href + " #cart_div");
                }
            })
        }
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\elalrayanshop\resources\views/website/cart/index.blade.php ENDPATH**/ ?>
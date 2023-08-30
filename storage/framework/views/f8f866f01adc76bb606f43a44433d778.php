<?php $__env->startSection('title'); ?>
<?php echo e(trans('website_navbar.Home')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <style>
        .card{
            box-shadow: 10px 10px 20px;
        }
        .owl-carousel .card { overflow: hidden;}
        .owl-carousel .item img{ transition: all .2s ease-in-out; }
        .owl-carousel .item img:hover { transform: scale(1.1);  }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<?php echo $__env->make('website.sections.trend_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('website.sections.trend_category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script>
        $('.trend_product').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            rtl:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })

        $('.trend_category').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            rtl:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })
    </script>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\elalrayanshop\resources\views/website/index.blade.php ENDPATH**/ ?>
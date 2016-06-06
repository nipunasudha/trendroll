 <?php $__env->startSection('content'); ?>
<link href="<?php echo e(URL::asset('css/major_style.css')); ?>" rel="stylesheet">
<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Contact us</div>

                <div class="panel-body">
                    This is a dummy of an contact us page.
                </div>
            </div>
        </div>
        <div class="col-md-4 slider-box-demo" style="background-color:#a0a0a0;"></div>
     <div class="col-md-8 slider-box-demo" style="background-color:#edba2f;"></div>
     

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
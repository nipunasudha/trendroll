 <?php $__env->startSection('content'); ?>
<link href="<?php echo e(URL::asset('css/major_style.css')); ?>" rel="stylesheet">
<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to <?php echo e($forwhome); ?> page.</div>

                <div class="panel-body">
                    This is a dummy of <?php echo e($forwhome); ?> page.
                </div>
            </div>
        </div>
        <div class="col-xs-12 slider-box-demo" style="background-color:<?php echo e(($forwhome=='her')? '#ff8096':'#75d9f7'); ?>;"></div>
        <div class="box-outer-demo col-md-3">
            <div class="item-boxes-demo"></div>
        </div>
        <div class="box-outer-demo col-md-3">
            <div class="item-boxes-demo"></div>
        </div>
        <div class="box-outer-demo col-md-3">
            <div class="item-boxes-demo"></div>
        </div>
        <div class="box-outer-demo col-md-3">
            <div class="item-boxes-demo"></div>
        </div>
        <div class="box-outer-demo col-md-3">
            <div class="item-boxes-demo"></div>
        </div>
        <div class="box-outer-demo col-md-3">
            <div class="item-boxes-demo"></div>
        </div>
        <div class="box-outer-demo col-md-3">
            <div class="item-boxes-demo"></div>
        </div>
        <div class="box-outer-demo col-md-3">
            <div class="item-boxes-demo"></div>
        </div>
        <div class="box-outer-demo col-md-3">
            <div class="item-boxes-demo"></div>
        </div>
        <div class="box-outer-demo col-md-3">
            <div class="item-boxes-demo"></div>
        </div>
        <div class="box-outer-demo col-md-3">
            <div class="item-boxes-demo"></div>
        </div>
        <div class="box-outer-demo col-md-3">
            <div class="item-boxes-demo"></div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
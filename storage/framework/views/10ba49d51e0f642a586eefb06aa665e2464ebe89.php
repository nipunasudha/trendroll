<?php $__env->startSection('content'); ?>

<div class="container">
   <div class="row">
    <center>
      <?php echo $__env->make('elements.user_account_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </center>

  </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <?php if($page=="dashboard"): ?>
                  <?php echo $__env->make('elements.profile_pages.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php elseif($page=="products"): ?>
                  <?php echo $__env->make('elements.profile_pages.products', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php elseif($page=="orders"): ?>
                  <?php echo $__env->make('elements.profile_pages.orders', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php elseif($page=="reviews"): ?>
                  <?php echo $__env->make('elements.profile_pages.reviews', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="<?php echo e(URL::asset('css/user_profile_style.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
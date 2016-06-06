<?php $__env->startSection('content'); ?>
<h1>Hey. You wanna upload?</h1>
<form action="<?php echo e(url('upload')); ?>" method="post" enctype="multipart/form-data">
  <?php echo e(csrf_field()); ?>

  <label>Select image to upload :</label>
  <input type="file" name="myfile" value="" id="myfile">
  <input type="submit" name="submit" value="Upload">
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
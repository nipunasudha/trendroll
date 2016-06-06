 <?php $__env->startSection('content'); ?>
<?php
echo "Item id is - ". $item->id;

?>
<link href="<?php echo e(URL::asset('css/product_view_style.css')); ?>" rel="stylesheet">
<div class="row detail-div">
  <div class="col-md-6">
    <div class="product-image-outer">

    </div>
  </div>
  <div class="col-md-6 detail-section">
    <table class="table-striped">

      <tr>
        <td>Name:</td>
        <td><?php echo e($item->name); ?></td>
      </tr>

      <tr>
        <td>Seller ID:</td>
        <td><?php echo e($item->seller_id); ?></td>
      </tr>
      <tr>
        <td>Price:</td>
        <td><?php echo e($item->price); ?></td>
      </tr>
      <tr>
        <td>Added On:</td>
        <td><?php echo e($item->created_at); ?></td>
      </tr>
      <tr>
        <td>Modified On:</td>
        <td><?php echo e($item->updated_at); ?></td>
      </tr>
    </table>
  </div>
</div>
















<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
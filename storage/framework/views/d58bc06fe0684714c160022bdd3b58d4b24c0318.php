 <?php $__env->startSection('content'); ?>


<div class="container">
    <ul>
        <li>
            <a href="sellers/1">Seller 1</a></li>
        <li>
            <a href="sellers/2">Seller 2</a></li>
        <li>
            <a href="sellers/3">Seller 3</a></li>
        <li>
            <a href="sellers/4">Seller 4</a></li>
        <li>
            <a href="sellers/5">Seller 5</a></li>
        <li>
            <a href="sellers/6">Seller 6</a></li>
        <li>
            <a href="sellers/7">Seller 7</a></li>


    </ul>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<link href="<?php echo e(URL::asset('css/seller_profile_style.css')); ?>" rel="stylesheet">
        <div class="container" style="margin-top:20px">
            <div class="row" id='coverimg'>
                <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 centered" id="profileimg">
                    <img src="<?php echo e(URL::asset('img/profile.jpg')); ?>" class="img-responsive">
                </div>



            </div>
            <div class="row" id="ratings">
            <div class="col-md-3 col-sm-6 pull-left">
                <button class="btn btn-info" type="button">View All Products</button>
                </div>
                <div class="col-md-2 col-md-offset-2 col-sm-4 col-sm-offset-2 centered" >
                    <img src="<?php echo e(URL::asset('img/rating.png')); ?>" class="img-responsive">
                </div>


            <div class="col-md-3 col-sm-6 pull-right">
                <button class="btn btn-info" type="button">Like</button>
                <button class="btn btn-success" type="button">Favourites</button>
                <button class="btn btn-danger" type="button">Subscribe</button>
                </div>
            </div>

            <div class="row" id="products">
            <div class="col-md-3 " id="contact_details">

                <p><strong>Phone Number :</strong> 0415567895</p>
                <p><strong>Email :</strong> someone@gmail.com</p>

                </div>

                <div class="col-md-8 pull-right" id="featured_products">
                    <div class="col-md-4 products">
                                        <img src="<?php echo e(URL::asset('img/dress.png')); ?>" class="img-responsive">

                    </div>
                    <div class="col-md-4 products">
                                        <img src="<?php echo e(URL::asset('img/dress.png')); ?>" class="img-responsive">

                    </div>
                    <div class="col-md-4 products">
                                        <img src="<?php echo e(URL::asset('img/dress.png')); ?>" class="img-responsive">

                    </div>

                </div>

            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php if(!isset($tab)): ?>
<?php
$tab="none";
 ?>
 <?php echo e("Unknown page!"); ?>

<?php endif; ?>
<div class="head-bar">
    <div class="container">
        <div class="div-logo"> <img src="<?php echo e(asset('img/TR%20logo%20v1.png')); ?>"> </div>
        <div class="btn-group username-group">
            <?php if(Auth::guest()): ?>
            <!-- <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
            <li><a href="<?php echo e(url('/register')); ?>">Register</a></li> -->
            <input class="btn btn-primary" type="button" onclick="location.href='<?php echo e(url('login')); ?>';" value="Login" />
            <input class="btn btn-primary" type="button" onclick="location.href='<?php echo e(url('register')); ?>';" value="Sign up" />
            <?php else: ?>
            <button class="btn btn-primary" type="button" onclick="location.href='<?php echo e(url('profile')); ?>';"><?php echo e(Auth::user()->name); ?> </button>
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button"> <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> </button>
            <ul role="menu" class="dropdown-menu">
                <li><a href="<?php echo e(url('profile')); ?>">My Account</a></li>
                <li><a href="<?php echo e(url('logout')); ?>">Logout</a></li>

                <!-- <li class="divider"></li> -->

            </ul>
            <?php endif; ?>

        </div>
        <!-- /btn-group -->

        <div class="div-cart">
            <div class="col-xs-8" style="padding:0px;">
                <p class="cart-stat">Rs.2600.00</p>
            </div>
            <div class="col-xs-4" style="padding:0px;"> <a href="#fakelink" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span></a> </div>
        </div>
    </div>
</div>
<!-- Static navbar -->
<div class="navbar navbar-default " role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> </button>
            <a class="navbar-brand" href="<?php echo e(url('home')); ?>">TrendRoll.lk</a> </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <li <?php if($tab=="home"): ?> class="active"<?php endif; ?>><a href="<?php echo e(url('home')); ?>">Home</a></li>
                <li <?php if($tab=="her"): ?> class="active"<?php endif; ?>><a href="<?php echo e(url('products/her')); ?>">For Her</a></li>
                <li <?php if($tab=="him"): ?> class="active"<?php endif; ?>><a href="<?php echo e(url('products/him')); ?>">For Him</a></li>
                <li <?php if($tab=="sellers"): ?> class="active"<?php endif; ?>><a href="<?php echo e(url('/sellers')); ?>">Sellers</a></li>
                <li <?php if($tab=="account" || $tab=="login" || $tab=="register" ): ?> class="active"<?php endif; ?>><a href="<?php echo e(url('profile/dashboard')); ?>">My Account</a></li>
                <li><a href="<?php echo e(url('/admin')); ?>">*Admin*</a></li>


            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#contact">About</a></li>
                <li><a href="#contact">Support</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

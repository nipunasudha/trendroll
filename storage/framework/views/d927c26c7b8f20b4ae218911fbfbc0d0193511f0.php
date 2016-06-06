<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
 <link rel="shortcut icon" href="<?php echo e(asset('trlogo_for_title.png')); ?>">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link href="<?php echo e(URL::asset('tools/bootstrap-3.3.6-dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    Trendroll.lk
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                  <li><a href="<?php echo e(url('products/her')); ?>">For Her</a></li>
                  <li><a href="<?php echo e(url('products/him')); ?>">For Him</a></li>
                  <li><a href="<?php echo e(url('/sellers')); ?>">Sellers</a></li>
                  <li><a href="<?php echo e(url('/admin')); ?>">*Admin Panel*</a></li>
                    
                    
                    
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo e(url('/about')); ?>">About us</a></li>
                    <li><a href="<?php echo e(url('/contact')); ?>">Contact us</a></li>
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                        <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/profile')); ?>"><i class="fa fa-btn fa-sign-out"></i>My Profile</a></li>
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-user"></i>Logout</a></li>
                                
                                
                            </ul>
                            
                            
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- JavaScripts -->
   <script src= "<?php echo e(URL::asset('tools/jquery.min.js')); ?>"></script>
     <script src= "<?php echo e(URL::asset('tools/bootstrap-3.3.6-dist/js/bootstrap.min.js')); ?>"></script>
    <?php /* <script src="<?php echo e(elixir('js/app.js')); ?>"></script> */ ?>
</body>
</html>

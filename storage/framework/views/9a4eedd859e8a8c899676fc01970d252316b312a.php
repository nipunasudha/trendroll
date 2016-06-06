<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>TrendRoll Backend</title>
    <link rel="shortcut icon" href="<?php echo e(asset('trlogo_for_title.png')); ?>">
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <!-- Fonts -->

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

 <script src= "<?php echo e(URL::asset('tools/jquery.min.js')); ?>"></script>
    <!-- Styles -->
    <link href="<?php echo e(URL::asset('tools/bootstrap-3.3.6-dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>
    <!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
     <link href="<?php echo e(URL::asset('css/backend_style.css')); ?>" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="box">
            <div class="row row-offcanvas row-offcanvas-left">


                <!-- sidebar -->
                <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

                    <ul class="nav">
                        <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                    </ul>

                    <ul class="nav hidden-xs" id="lg-menu">
                         <li class="active"><a href="/admin"><i class="glyphicon glyphicon-list-alt"></i> Dashboard</a></li>
                        <li><a href="/adm-sellers"><i class="glyphicon glyphicon-briefcase"></i> Sellers</a></li>
                        <li><a href="/adm-products"><i class="glyphicon glyphicon-tag"></i> Products</a></li>
                        <li><a href="/adm-employees"><i class="glyphicon glyphicon-user"></i> Employees</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-refresh"></i> Post Reviews</a></li>
                        <li><a href="#stories"><i class="glyphicon glyphicon-stats"></i> Site Stats</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-bullhorn"></i> Board Discussion</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-usd"></i> Business Stats</a></li>
                        <li><a href="#stories"><i class="glyphicon glyphicon-comment"></i> Client Contact</a></li>
                       <li><a href="#stories"><i class="glyphicon glyphicon-cog"></i> Site Settings</a></li>
                       
                        
                        
                    </ul>
                    <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                        <li>
                            <a href="http://www.bootply.com"><h3>TrendRoll.lk</h3> <i class="glyphicon glyphicon-heart-empty"></i> Passion for Fashion</a>
                        </li>
                    </ul>

                    <!-- tiny only nav-->
                    <ul class="nav visible-xs" id="xs-menu">
                        <li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                        <li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
                        <li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
                        <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
                    </ul>

                </div>
                <!-- /sidebar -->

                <!-- main right col -->
                <div class="column col-sm-10 col-xs-11" id="main">

                    <!-- top nav -->
                    <div class="navbar navbar-blue navbar-static-top">
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="/admin" class="navbar-brand logo">tr</a>
                        </div>
                        <nav class="collapse navbar-collapse" role="navigation">
                            <form class="navbar-form navbar-left">
                                <div class="input-group input-group-sm" style="max-width:360px;">
                                    <input type="text" class="form-control" placeholder="Search Admin Panel" name="srch-term" id="srch-term">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="/home"><i class="glyphicon glyphicon-home"></i> Go to Website</a>
                                </li>
                                <li>
                                    <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
                                </li>
                                <li>
                                    <a href="#"><span class="badge"><i class="glyphicon glyphicon-flag"></i> 12
                                        </span> Product Reviews </a>
                                </li>
                                <li>
                                    <a href="#"><span class="badge"><i class="glyphicon glyphicon-comment"></i> 6
                                        </span> Messages </a>
                                </li>
                                
                                
                            </ul>
                            <ul class="nav navbar-nav navbar-right nav-profile-icon">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Control Panel</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">My Profile</a></li>
                                         <li><a href="">Backend Settings</a></li>
                                        
                                        <li><a href="<?php echo e(url('/logout')); ?>">Logout</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /top nav -->

                    <div class="padding">
                        <div class="full">

                            <!-- content -->
                            <div class="main-all">

                        <?php echo $__env->yieldContent('content'); ?>
                        
                        </div>
                        </div>
 
                        <!-- /col-9 -->
                    </div>
                    
                   
                    
                    <!-- /padding -->
                </div>
                <!-- /main -->

            </div>
        </div>
    </div>


    <!--post modal-->
    <div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    Update Status
                </div>
                <div class="modal-body">
                    <form class="form center-block">
                        <div class="form-group">
                            <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div>
                        <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
                        <ul class="pull-left list-inline">
                            <li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li>
                            <li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li>
                            <li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- script references -->
   
     <script src= "<?php echo e(URL::asset('tools/bootstrap-3.3.6-dist/js/bootstrap.min.js')); ?>"></script>
    <script src="js/backend_script.js"></script>
</body>

</html>

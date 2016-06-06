<!DOCTYPE html>
<html lang="en">
<?php
if(!isset($tab)){
  $tab="";
  echo "Unknown Page. Please Fix!";
}
 ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $__env->yieldContent('title'); ?></title>
 <link rel="shortcut icon" href="<?php echo e(asset('trlogo_for_title.png')); ?>">
    <!-- Fonts -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">  -->
    <!-- Styles -->
    <link href="<?php echo e(URL::asset('tools/FlatUI/css/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('tools/FlatUI/css/flat-ui.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/frontend_generic_style.css')); ?>" rel="stylesheet">
<script src= "<?php echo e(URL::asset('tools/FlatUI/js/vendor/jquery.min.js')); ?>"></script>


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

  <?php echo $__env->make('elements/frontend_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div class="container">
    <?php echo $__env->make('elements/breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>

  <?php if($tab!="login" && $tab!="register" && $tab!="reset"): ?>
    <?php echo $__env->make('elements/frontend_searchbox', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>

  <div class="container main-content">

    <?php echo $__env->yieldContent('content'); ?>
  </div>
<?php echo $__env->make('elements/frontend_footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- JavaScripts -->

   <script src= "<?php echo e(URL::asset('tools/FlatUI/js/flat-ui.js')); ?>"></script>

   <script src= "<?php echo e(URL::asset('tools/FlatUI/assets/js/application.js')); ?>"></script>
   <script src= "<?php echo e(URL::asset('js/frontend_generic_script.js')); ?>"></script>


</body>
</html>

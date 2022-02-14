<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kindercare|Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo e(asset('dash/KINDERCARE_logo.png')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/fonts/iconic/css/material-design-iconic-font.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/animate/animate.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/css-hamburgers/hamburgers.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/animsition/css/animsition.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/select2/select2.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/daterangepicker/daterangepicker.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/util_log.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style_log.css')); ?>">
    <!--===============================================================================================-->
</head>

<body  style="background-image: url('images/bab.jpg');background-size: 1920px 1000px;">
<section class="login-block bg">
    <div class="limiter">
        <div class="container-login100" >
            <div class="wrap-login100">
                <div class="jumbotron">
                    <form class="login100-form validate-form" method="POST" action="<?php echo e(route('auth.login')); ?>" >
                        <?php echo csrf_field(); ?>
                        <span class="login100-form-logo">
                            <div class="login100-form-logo-img">
                                <figure>
                                    <a href="/" ><img src="<?php echo e(asset('dash/KINDERCARE_logo.png' )); ?>" alt="KINDERCARE_logo" width="100" height="60"></a>
                                    <a href="/"><figcaption><b>To Home</b></figcaption></a>
                                </figure>
                            </div>
                        </span>

                        <span class="login100-form-title p-b-34 p-t-27">
                            Log in
                        </span>
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <?php if($errors->any()): ?>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="alert alert-danger background-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="icofont icofont-close-line-circled text-white"></i>
                                            </button>
                                            <strong><?php echo e($error); ?></strong>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Enter email">
                            <input class="input100" type="text" name="email" placeholder="Email" required>
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Password" required>
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>

                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<!--===============================================================================================-->
<script src="<?php echo e(asset('assets/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('assets/vendor/animsition/js/animsition.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('assets/vendor/bootstrap/js/popper.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('assets/vendor/select2/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('assets/vendor/daterangepicker/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/daterangepicker/daterangepicker.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('assets/vendor/countdowntime/countdowntime.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>
</html>
<?php /**PATH /home/lovis/Music/Kindercare/mywork-kindercare/resources/views/auth/login.blade.php ENDPATH**/ ?>
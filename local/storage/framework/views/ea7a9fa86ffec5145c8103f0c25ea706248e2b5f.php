<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="/wshop2/local/public/startmin-master/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/wshop2/local/public/startmin-master/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/wshop2/local/public/startmin-master/css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/wshop2/local/public/startmin-master/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form action="/wshop2/admin/postlogin" method="POST">
                            <?php echo csrf_field(); ?>

                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                </div>

                                    <?php if(session('thongbao')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <strong><?php echo e(session('thongbao')); ?></strong>
                                    </div>
                                    <?php endif; ?>
                                    <?php if(count($errors)>0): ?>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="alert alert-danger" role="alert">
                                        <strong><?php echo e($error); ?></strong>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>



                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="/wshop2/local/public/startmin-master/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/wshop2/local/public/startmin-master/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/wshop2/local/public/startmin-master/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/wshop2/local/public/startmin-master/js/startmin.js"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\wshop2\local\resources\views/startmin-master/login.blade.php ENDPATH**/ ?>
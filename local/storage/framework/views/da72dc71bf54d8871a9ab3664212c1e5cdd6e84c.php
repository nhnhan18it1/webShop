<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->

    <link href="/wshop2/local/public/SignUp/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/wshop2/local/public/SignUp/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/wshop2/local/public/SignUp/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/wshop2/local/public/SignUp/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/wshop2/local/public/SignUp/css/main.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="postSignup" method="POST">
                            <?php if(session('thongbao')): ?>
                            <div class="alert alert-danger" role="alert">
                                <strong><?php echo e(session('thongbao')); ?></strong>
                            </div>
                            <?php endif; ?>
                        <?php echo csrf_field(); ?>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="username" name="username" required=true>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="password" name="password" required=true>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="Name" required=true>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" data-date-format="YYYY MMMM DD" placeholder="BIRTHDATE" name="Dob" required=true>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="input-group">
                                        <input class="input--style-1" type="number" placeholder="Phone" name="Phone" required=true>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="Address" required=true>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="Email" required=true>
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Đăng Kí</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/wshop2/local/public/SignUp/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/wshop2/local/public/SignUp/vendor/select2/select2.min.js"></script>
    <script src="/wshop2/local/public/SignUp/vendor/datepicker/moment.min.js"></script>
    <script src="/wshop2/local/public/SignUp/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/wshop2/local/public/SignUp/js/global.js"></script>

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
<?php /**PATH C:\xampp\htdocs\wshop2\local\resources\views/Account/SignUp.blade.php ENDPATH**/ ?>
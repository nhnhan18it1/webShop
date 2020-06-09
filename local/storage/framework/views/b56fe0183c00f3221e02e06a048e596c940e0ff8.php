 <?php $__env->startSection('title',"Your cart"); ?> <?php $__env->startSection('Content'); ?>


<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranaz</title>
    <link rel="icon" href="/Wshop/local/public/winter/img/favicon.png">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="/Wshop/local/public/winter/css/bootstrap.min.css">
    <!-- animate CSS -->

    <link rel="stylesheet" href="/Wshop/local/public/winter/css/animate.css">
    <!-- owl carousel CSS -->

    <link rel="stylesheet" href="/Wshop/local/public/winter/css/owl.carousel.min.css">
    <!-- nice select CSS -->

    <link rel="stylesheet" href="/Wshop/local/public/winter/css/nice-select.css">
    <!-- font awesome CSS -->

    <link rel="stylesheet" href="/Wshop/local/public/winter/css/all.css">
    <!-- flaticon CSS -->

    <link rel="stylesheet" href="/Wshop/local/public/winter/css/flaticon.css">
    <link rel="stylesheet" href="/Wshop/local/public/winter/css/themify-icons.css">
    <!-- font awesome CSS -->

    <link rel="stylesheet" href="/Wshop/local/public/winter/css/magnific-popup.css">
    <!-- swiper CSS -->

    <link rel="stylesheet" href="/Wshop/local/public/winter/css/slick.css">
    <link rel="stylesheet" href="/Wshop/local/public/winter/css/price_rangs.css">
    <!-- style CSS -->

    <link rel="stylesheet" href="/Wshop/local/public/winter/css/style.css">
    <script>
        $(document).ready(function() {

            $.ajax({
                type: "get",
                url: "LoadProduct",
                data: "",
                dataType: "json",
                success: function(data) {
                    if (data != [{}]) {
                        console.log(data)
                        $add = "";
                        $.each(data, function(key, value) {

                            $add = $add + '<tr class="product"><td><div class="media"><div class="d-flex"><img src="' + value.Img + '" alt="" /></div><div class="media-body"><p>' + value.ProductName + '</p></div></div></td>' +
                                '<td><h5 id="price">$' + value.price + '</h5></td>' +
                                '<td><div class="product_count"><span class="input-number-decrement"> </span><input onchange="CPrice()" class="input-number" type="number" value="' + value.count + '" min="0" max="10"></div></td>' +
                                '<td><h5 class="gia"></h5></td></tr>';
                        });
                        $('#tbbd').html($add);
                    }


                }
            });

        });


        // function CPrice() {

        //     $gia = $(this).parents(".product_count").parents(".product").find('.gia');
        //     $count = $(this).parents(".product_count").parents(".product").find('.input-number');
        //     $price = $(this).parents(".product_count").parents(".product").find('.price');
        //     $($gia).attr('value', ($($count).attr('value') * $($price).val()));
        //     console.log($(this).parents(".product_count").parents(".product").find('.gia').html());

        // }

        $(document).ajaxComplete(function() {
            console.log('sadads')
            $('.input-number-increment').click(function(e) {
                $count = $(this).parents(".product_count").find('.input-number');
                $($count).attr('value', ($($count).attr('value') + 1));

            });
            $('.input-number-decrement').click(function(e) {
                $count = $(this).parents(".product_count").find('.input-number');
                if ($($count).attr('value') > 1) {
                    $($count).attr('value', ($($count).attr('value') - 1));
                } else {

                }


            });




        })
    </script>
</head>


<body class="bg-white">
    <!--::header part start::-->

    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home/Shop/Single product/Cart list</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Cart Area =================-->
    <section class="cart_area section_padding">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody id="tbbd">

                        </tbody>
                    </table>
                    <div class="checkout_btn_inner float-right">
                        <button type="button" onclick="TinhTien()" class="btn_1">Confirm and Pay</button>


                    </div>
                </div>
            </div>
    </section>
    <script>
        function TinhTien() {
            window.location = "/wshop2/cart/tinhtien";
        }
    </script>
    <!--================End Cart Area =================-->
    <hr>
    <strong style="margin-left: 300px;">Your order</strong>
    <section class="cart_area section_padding">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody id="tbbd_od">

                        </tbody>
                    </table>
                    <div class="checkout_btn_inner float-right">


                    </div>
                </div>
            </div>
    </section>

    <!--::footer_part start::-->

    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="/Wshop/local/public/winter/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="/Wshop/local/public/winter/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="/Wshop/local/public/winter/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="/Wshop/local/public/winter/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="/Wshop/local/public/winter/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="/Wshop/local/public/winter/js/mixitup.min.js"></script>
    <script src="/Wshop/local/public/winter/js/price_rangs.js"></script>
    <!-- particles js -->
    <script src="/Wshop/local/public/winter/js/owl.carousel.min.js"></script>
    <script src="/Wshop/local/public/winter/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="/Wshop/local/public/winter/js/slick.min.js"></script>
    <script src="/Wshop/local/public/winter/js/jquery.counterup.min.js"></script>
    <script src="/Wshop/local/public/winter/js/waypoints.min.js"></script>
    <script src="/Wshop/local/public/winter/js/contact.js"></script>
    <script src="/Wshop/local/public/winter/js/jquery.ajaxchimp.min.js"></script>
    <script src="/Wshop/local/public/winter/js/jquery.form.js"></script>
    <script src="/Wshop/local/public/winter/js/jquery.validate.min.js"></script>
    <script src="/Wshop/local/public/winter/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="/Wshop/local/public/winter/js/custom.js"></script>
</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('winter.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wshop2\local\resources\views/winter/cart.blade.php ENDPATH**/ ?>
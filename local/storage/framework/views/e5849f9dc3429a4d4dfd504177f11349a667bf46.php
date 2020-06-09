 <?php $__env->startSection('title',"category"); ?> <?php $__env->startSection('Content'); ?>


<head>
    <base href="<?php echo e(asset('')); ?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>winter</title>
    <link rel="icon" href="/Wshop2/local/public/winter/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/all.css">
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/nice-select.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/flaticon.css">
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/slick.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/price_rangs.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/style.css">
    <!-- <script>
        $(document).ajaxComplete(function() {
            console.log('sadads')
        })
        $(document).ready(function() {

            $.ajax({
                type: "get",
                url: "LoadProduct",
                data: "",
                dataType: "json",
                success: function(data) {
                    if (data != null) {
                        $add = "";
                        $.each(data, function(key, value) {
                            console.log(value.ID)
                            $add = $add + '<li class="list-group-item"><img src="' + value.Img + '" alt=""></li>';
                        });
                        $('.single_product .list-group').html($add);
                    }


                }
            });
        });
    </script> -->
</head>

<body class="bg-white">
    <!--::header part start::-->
    <!-- Header part end-->


    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding border_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                            <div class="l_w_title">
                                <h3>Browse Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="/wshop2/category">all</a>
                                    </li>
                                    <li>
                                        <a href="/wshop2/category1">special</a>
                                    </li>
                                    <li>
                                        <a href="/wshop2/category2">normal</a>
                                    </li>

                                </ul>
                            </div>
                        </aside>

                        <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                            <div class="l_w_title">
                                <h3>Product filters</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <p>Brands</p>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Apple</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Asus</a>
                                    </li>
                                    <li class="active">
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Gionee</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Micromax</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Samsung</a>
                                    </li>
                                </ul>
                                <ul class="list">
                                    <p>color</p>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Black</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Black Leather</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Black with red</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Gold</a>
                                    </li>
                                    <li>
                                        <input type="radio" aria-label="Radio button for following text input">
                                        <a href="#">Spacegrey</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>

                        <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                            <div class="l_w_title">
                                <h3>Price Filter</h3>
                            </div>
                            <div class="widgets_inner">
                                <div class="range_item">
                                    <!-- <div id="slider-range"></div> -->
                                    <input type="text" class="js-range-slider" value="" />
                                    <div class="d-flex align-items-center">
                                        <div class="price_text">
                                            <p>Price :</p>
                                        </div>
                                        <div class="price_value d-flex justify-content-center">
                                            <input type="text" class="js-input-from" id="amount" readonly />
                                            <span>to</span>
                                            <input type="text" class="js-input-to" id="amount" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu product_bar_item">
                                    <h2>Womans (12)</h2>
                                </div>
                                <div class="product_top_bar_iner product_bar_item d-flex">
                                    <div class="product_bar_single">
                                        <select class="wide">
                                            <option data-display="Default sorting">Default sorting</option>
                                            <option value="1">Some option</option>
                                            <option value="2">Another option</option>
                                            <option value="3">Potato</option>
                                        </select>
                                    </div>
                                    <div class="product_bar_single">
                                        <select>
                                            <option data-display="Show 12">Show 12</option>
                                            <option value="1">Show 20</option>
                                            <option value="2">Show 30</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="<?php echo e($item->Img); ?>"  style="width: 247.5px; height: 271.75px" alt="">
                                    <div class="category_social_icon">
                                        <ul>
                                            <li><a href="#"><i class="ti-heart"></i></a></li>
                                            <li><button onclick="Addcart(<?php echo e($item->ID); ?>)" style="border-radius: 100%; width: 50px;height: 50px;" class="btn btn-success" type="button"><i class="ti-bag"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="category_product_text">
                                        <a href="single-product/<?php echo e($item->ID); ?>">
                                            <h5><?php echo e($item->ProductName); ?></h5>

                                        </a>
                                        <p>$<?php echo e($item->price); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <script>
                            function Addcart($ID) {
                                myObj = {
                                    IDP: $ID,
                                    Count: 1,
                                }
                                $.ajax({
                                    type: "get",
                                    url: "cart/addcart",
                                    data: {
                                        product: JSON.stringify(myObj)
                                    },
                                    dataType: "json",
                                    success: function(data) {
                                        console.log(data)
                                        $add = "";
                                        $.each(data, function(key, value) {
                                            console.log(value.ID)
                                            $add = $add + '<li class="list-group-item"><img src="' + value.Img + '" alt=""><span style="background-color: black;color: white;"><a href="cart">Pn:' + value.ProductName + '</a> <br>Count:' + value.count + ' </span></li>';
                                        });
                                        $('.single_product .list-group').html($add);
                                    }
                                });

                            }
                        </script>

                        <div class="col-lg-12 text-center">
                            <nav style="text-align: center;margin: auto;" aria-label="Page navigation">
                                 <?php echo $product->links(); ?>

                                <button onclick="Clear()" type="button" class="btn btn-primary">ClearSess</button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function Clear() {
            $.ajax({
                type: "get",
                url: "cart/clearcart",
                data: "",
                dataType: "text",
                success: function(response) {
                    $('.single_product .list-group').html('');
                }
            });
        }
    </script>
    <!--================End Category Product Area =================-->

    <!-- free shipping here -->
    <section class="shipping_details section_padding border_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="/Wshop2/local/public/winter/img/icon/icon_1.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="/Wshop2/local/public/winter/img/icon/icon_2.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="/Wshop2/local/public/winter/img/icon/icon_3.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="/Wshop2/local/public/winter/img/icon/icon_4.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- free shipping end -->

    <!-- subscribe_area part start-->
    <section class="instagram_photo">
        <div class="container-fluid>
            <div class=" row ">
                <div class="col-lg-12 ">
                    <div class="instagram_photo_iner ">
                        <div class="single_instgram_photo ">
                            <img src="/Wshop2/local/public/winter/img/instagram/inst_1.png " alt=" ">
                            <a href="# "><i class="ti-instagram "></i></a>
                        </div>
                        <div class="single_instgram_photo ">
                            <img src="/Wshop2/local/public/winter/img/instagram/inst_2.png " alt=" ">
                            <a href="# "><i class="ti-instagram "></i></a>
                        </div>
                        <div class="single_instgram_photo ">
                            <img src="/Wshop2/local/public/winter/img/instagram/inst_3.png " alt=" ">
                            <a href="# "><i class="ti-instagram "></i></a>
                        </div>
                        <div class="single_instgram_photo ">
                            <img src="/Wshop2/local/public/winter/img/instagram/inst_4.png " alt=" ">
                            <a href="# "><i class="ti-instagram "></i></a>
                        </div>
                        <div class="single_instgram_photo ">
                            <img src="/Wshop2/local/public/winter/img/instagram/inst_5.png " alt=" ">
                            <a href="# "><i class="ti-instagram "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!--::footer_part start::-->
    
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="/Wshop2/local/public/winter/js/jquery-1.12.1.min.js "></script>
    <!-- popper js -->
    <script src="/Wshop2/local/public/winter/js/popper.min.js "></script>
    <!-- bootstrap js -->
    <script src="/Wshop2/local/public/winter/js/bootstrap.min.js "></script>
    <!-- easing js -->
    <script src="/Wshop2/local/public/winter/js/jquery.magnific-popup.js "></script>
    <!-- swiper js -->
    <script src="/Wshop2/local/public/winter/js/swiper.min.js "></script>
    <!-- swiper js -->
    <script src="/Wshop2/local/public/winter/js/mixitup.min.js "></script>
    <script src="/Wshop2/local/public/winter/js/price_rangs.js "></script>
    <!-- particles js -->
    <script src="/Wshop2/local/public/winter/js/owl.carousel.min.js "></script>
    <script src="/Wshop2/local/public/winter/js/jquery.nice-select.min.js "></script>
    <!-- slick js -->
    <script src="/Wshop2/local/public/winter/js/slick.min.js "></script>
    <script src="/Wshop2/local/public/winter/js/jquery.counterup.min.js "></script>
    <script src="/Wshop2/local/public/winter/js/waypoints.min.js "></script>
    <script src="/Wshop2/local/public/winter/js/contact.js "></script>
    <script src="/Wshop2/local/public/winter/js/jquery.ajaxchimp.min.js "></script>
    <script src="/Wshop2/local/public/winter/js/jquery.form.js "></script>
    <script src="/Wshop2/local/public/winter/js/jquery.validate.min.js "></script>
    <script src="/Wshop2/local/public/winter/js/mail-script.js "></script>
    <!-- custom js -->
    <script src="/Wshop2/local/public/winter/js/custom.js "></script>
</body>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('winter.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wshop2\local\resources\views/winter/category.blade.php ENDPATH**/ ?>
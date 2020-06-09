<?php $__env->startSection('title','contact'); ?>
<?php $__env->startSection('Content'); ?>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>winter</title>
    <link rel="icon" href="/Wshop/local/public/winter/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/Wshop/local/public/winter/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="/Wshop/local/public/winter/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/Wshop/local/public/winter/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/Wshop/local/public/winter/css/all.css">
    <link rel="stylesheet" href="/Wshop/local/public/winter/css/nice-select.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="/Wshop/local/public/winter/css/flaticon.css">
    <link rel="stylesheet" href="/Wshop/local/public/winter/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/Wshop/local/public/winter/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="/Wshop/local/public/winter/css/slick.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="/Wshop/local/public/winter/css/price_rangs.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="/Wshop/local/public/winter/css/style.css">
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
                            <p>Home / Contact</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section padding_top">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 480px;"></div>
                <script>
                    function initMap() {
                        var uluru = {
                            lat: -25.363,
                            lng: 131.044
                        };
                        var grayStyles = [{
                            featureType: "all",
                            stylers: [{
                                saturation: -90
                            }, {
                                lightness: 50
                            }]
                        }, {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#ccdee9'
                            }]
                        }];
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: -31.197,
                                lng: 150.744
                            },
                            zoom: 9,
                            styles: grayStyles,
                            scrollwheel: false
                        });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?AIzaSyDHElrYmsfII-3sTKXk0bqKgzsGZoAGslw&callback=initMap">
                </script>

            </div>


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">

                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message'></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <a href="#" class="btn_3 button-contactForm">Send Message</a>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Buttonwood, California.</h3>
                            <p>Rosemead, CA 91770</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>00 (440) 9865 562</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@colorlib.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

    <!-- subscribe_area part start-->
    <section class="instagram_photo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram_photo_iner">
                        <div class="single_instgram_photo">
                            <img src="/Wshop/local/public/winter/img/instagram/inst_1.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_instgram_photo">
                            <img src="/Wshop/local/public/winter/img/instagram/inst_2.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_instgram_photo">
                            <img src="/Wshop/local/public/winter/img/instagram/inst_3.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_instgram_photo">
                            <img src="/Wshop/local/public/winter/img/instagram/inst_4.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_instgram_photo">
                            <img src="/Wshop/local/public/winter/img/instagram/inst_5.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
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
    <!-- jquery -->
    <script src="/Wshop/local/public/winter/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="/Wshop/local/public/winter/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="/Wshop/local/public/winter/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="/Wshop/local/public/winter/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="/Wshop/local/public/winter/js/swiper.min.js"></script>
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

<?php echo $__env->make('winter.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wshop2\local\resources\views/winter/contact.blade.php ENDPATH**/ ?>
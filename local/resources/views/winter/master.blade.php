<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- style CSS -->
    <link rel="icon" href="/Wshop2/local/public/winter/img/favicon.png">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/bootstrap.min.css">

    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/animate.css">
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/all.css">
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/flaticon.css">
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/themify-icons.css">
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/magnific-popup.css">
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/slick.css">
    <link rel="stylesheet" href="/Wshop2/local/public/winter/css/style.css">
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
    <script>
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
                    if (data.length != 0) {
                        $add = "";
                        $.each(data, function(key, value) {
                            console.log(value.ID)
                            $add = $add + '<li class="list-group-item"><img src="' + value.Img + '" alt=""><span style="background-color: black;color: white;"><a href="cart">Pn:' + value.ProductName + '</a> <br>Count:' + value.count + ' </span></li>';
                        });
                        $('.single_product .list-group').html($add);
                    }


                }
            });
            $.ajax({
                type: "get",
                url: "In4KH",
                data: "",
                dataType: "json",
                success: function(data) {
                    console.log(data)
                    if (data.ID != 0) {

                        $.each(data, function(indexInArray, value) {
                            $('#acc').text(value.Name);
                            console.log(value.ID)
                            if (value.Password == null) {
                                $('#logout').css('display', 'none');
                                $('#logoutgg').css('display', 'block');
                            } else {
                                $('#logout').css('display', 'block');
                                $('#logoutgg').css('display', 'none');
                            }
                        });

                        $('#login').css('display', 'none');

                    } else {
                        $('acc').text('account');
                        console.log(data.ID)
                        $('#login').css('display', 'block');
                        $('#logout').css('display', 'none');
                        $('#logoutgg').css('display', 'none');
                    }
                }
            });
        });
    </script>
    <script>
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function() {
                console.log('User signed out.');
            });
        }
    </script>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/wshop2/index"> <img src="/Wshop2/local/public/winter/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/wshop2/index">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/wshop2/blog" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Shop
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="/wshop2/category"> shop category</a> {{-- <a class="dropdown-item" href="single-product">product details</a> --}}

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/wshop2/blog" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        {{-- <a class="dropdown-item" href="tracking">tracking</a> --}} {{-- <a class="dropdown-item" href="checkout">product checkout</a> --}}
                                        <a class="dropdown-item" href="/wshop2/cart">shopping cart</a> {{-- <a class="dropdown-item" href="cart">{{ session()->get('ID') }}</a> --}} {{-- <a class="dropdown-item" href="confirmation">confirmation</a>
                                        <a class="dropdown-item" href="elements">elements</a> --}}
                                    </div>
                                </li>

                                {{--
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog" id="navbarDropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="blog"> blog</a>
                                        <a class="dropdown-item" href="single-blog">Single blog</a>
                                    </div>
                                </li> --}}

                                <li class="nav-item">
                                    <a class="nav-link" href="/wshop2/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            {{--
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
                                        <ul class="list-group">

                                            <li class="list-group-item"><img src="" alt=""></li>
                                            <li class="list-group-item">Item</li>
                                            <li class="list-group-item">Item</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                            <li style="list-style-type: none;top -5%;" class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/wshop2/blog" id="navbarDropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                                <div class="dropdown-menu list-group single_product" aria-labelledby="navbarDropdown_2">
                                    <ul class="list-group">
                                        {{-- @if ($list !=null) @foreach ($list as $item)
                                        <li class="list-group-item"><img src="{{ $item->Img }}" alt=""></li>
                                        @endforeach @endif --}}

                                    </ul>
                                    {{-- <a class="dropdown-item" href="blog"> blog</a>
                                    <a class="dropdown-item" href="single-blog">Single blog</a> --}}
                                </div>
                            </li>
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        </div>
                        <ul style="float: right;padding-right: 100px;" class="navbar-nav .mx-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" data-target="#logout" aria-haspopup="true" aria-expanded="false"> <span id="acc"> Dropdown</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a id="login" class="dropdown-item" href="/wshop2/account/login"><i class="fas fa-door-open"></i>login</a>
                                    <a id="logout" class="dropdown-item" href="/wshop2/account/logout"><i class="fas fa-door-open"></i>logout</a>
                                    <a id="logoutgg" class="dropdown-item" onclick="signOut();" href=" /wshop2/account/logout"><i class="fab fa-google">| Sign out</i></a>
                                </div>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <style>
            .list-group-item img {
                width: 55px;
                height: 55px;
            }
            
            .list-group {
                max-height: 250px;
                overflow-x: auto;
            }
        </style>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->



    @yield('Content')




    <!--::footer_part start::-->
    <footer class="footer_part ">
        <div class="container ">
            <div class="row justify-content-between ">
                <div class="col-sm-6 col-lg-2 ">
                    <div class="single_footer_part ">
                        <h4>Category</h4>
                        <ul class="list-unstyled ">
                            <li><a href="# ">Male</a></li>
                            <li><a href="# ">Female</a></li>
                            <li><a href="# ">Shoes</a></li>
                            <li><a href="# ">Fashion</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 ">
                    <div class="single_footer_part ">
                        <h4>Company</h4>
                        <ul class="list-unstyled ">
                            <li><a href=" ">About</a></li>
                            <li><a href=" ">News</a></li>
                            <li><a href=" ">FAQ</a></li>
                            <li><a href=" ">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 ">
                    <div class="single_footer_part ">
                        <h4>Address</h4>
                        <ul class="list-unstyled ">
                            <li><a href="# ">200, Green block, NewYork</a></li>
                            <li><a href="# ">+10 456 267 1678</a></li>
                            <li><span>contact89@winter.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 ">
                    <div class="single_footer_part ">
                        <h4>Newsletter</h4>
                        <div id="mc_embed_signup ">
                            <form target="_blank " action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01 " method="get " class="subscribe_form relative mail_part ">
                                <input type="email " name="email " id="newsletter-form-email " placeholder="Email Address " class="placeholder hide-on-focus " onfocus="this.placeholder='' " onblur="this.placeholder=' Email Address ' ">
                                <button type="submit " name="submit " id="newsletter-submit " class="email_icon newsletter-submit button-contactForm ">subscribe</button>
                                <div class="mt-10 info "></div>
                            </form>
                        </div>
                        <div class="social_icon ">
                            <a href="# "><i class="ti-facebook "></i></a>
                            <a href="# "><i class="ti-twitter-alt "></i></a>
                            <a href="# "><i class="ti-instagram "></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg-12 ">
                    <div class="copyright_text ">
                        <P>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="ti-heart " aria-hidden="true "></i> by <a href="https://colorlib.com " target="_blank ">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </P>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->
</body>

</html>
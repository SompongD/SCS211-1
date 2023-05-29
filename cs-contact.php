<!DOCTYPE html>
<html lang="en">

<head>
    <title>หลักสูตรวิทยาการคอมพิวเตอร์</title>
    <!-- css -->
 <?php include("layouts/cs-css.php") ?>

    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        nav,
        .nav,
        .menu,
        button,
        .button,
        .btn,
        .price,
        ._heading,
        .wp-block-pullquote blockquote,
        blockquote,
        label,
        legend,
        a,
        .card-header,
        th,
        p,
        li {
            font-family: "Prompt", "Open Sans script=all rev=1" !important;
            font-weight: 500 !important;

        }

        .site-footer {
            padding: 4em !important;
            background: #333333 !important;
            /*height:300px !important;*/
        }

        .site-navbar {
            margin-bottom: 0px;
            z-index: 1999;
            position: absolute;
            width: 100%;
            padding: 4px !important;
            text-align: center !important;


        }

        .d-block {
            display: block !important;
            width: 50% !important;
        }

        .site-navbar .site-navigation .site-menu>li>a {
            padding: 0 !important;
            /*color: rgba(255, 255, 255, 0.5);*/
            display: inline-block;
            text-decoration: none !important;
        }

        .site-menu>.nav-link {
            padding: 1.5rem 0.5rem;
        }

        .sticky-wrapper .site-navbar {
            background: #fff;
            border-bottom: 1px solid transparent;
            -webkit-box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.2);
            box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.2);
        }

        .site-navbar .site-navigation .site-menu>li>a {
            color: black;

        }

        .site-navbar .site-navigation .site-menu>li>a:hover {
            color: purple;
        }

        .sticky-wrapper .site-navbar ul li a {
            color: black;
        }

        .sticky-wrapper .site-navbar ul li a:hover {
            color: purple;
        }

        .content {
            padding-top: 90px;
            padding-bottom: 90px;
        }

        body {
            line-height: 1.7;
            color: #333;
            font-weight: 400;
            font-size: 1rem;

        }

        .anchor {
            padding-top: 150px;
            margin-top: -150px;
        }
    </style>
    <link rel="icon" href="http://cs.vru.ac.th/images/css.png">
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <!-- header -->
<?php include("layouts/cs-header.php") ?>

    <!-- start of content , see end in footer -->
    <div class="content">
        <div class="container">
            <br />
            <h2>&starf;&nbsp;ติดต่อเรา</h2>
            <hr>

            <style>
                #map_container {
                    height: 250px;
                    margin-bottom: 10px;
                }

                #map {
                    width: 100%;
                    height: 100%;
                }
            </style>
            <div id="map_container">
                <div id="map"></div>
            </div>
            <script>
                var map;

                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: 14.132371,
                            lng: 100.616594
                        },
                        zoom: 15
                    });
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(14.132371, 100.616594),
                        map: map,
                        title: 'หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ฯ'
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoZlRLPlMJTXe38xtlDFiyI9rj6BoG10M&callback=initMap" async defer></script>

            <p></p>
            <h4>หลักสูตรวิทยาการคอมพิวเตอร์</h4>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;อาคาร 75 ปี วไลยอลงกรณ์ </p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;เลขที่ 1 หมู่ 20 ถนนพหลโยธิน กม. 48 ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 13180</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;โทรศัพท์ 0-2529-0674-7 ต่อ 365 โทรสาร 02-909-3029</p>
            &nbsp; &nbsp; &nbsp; &nbsp;<a href="https://www.facebook.com/profile.php?id=100008113098809&fref=ts"><img src="http://cs.vru.ac.th/images/facebook-icon-preview-1.png" width="50" height="50"> FACEBOOK หลักสูตรวิทยาการคอมพิวเตอร์</a>
        </div>
    </div>
    <!-- end of content, see start in header -->
    <style>
        .site-footer,
        .footer-heading,
        .site-footer .p {
            font-size: 16px;
            text-align: center !important;
            background: #8e24aa !important;
            /*color: #fff!important;*/
        }

        .site-footer p,
        .site-footer a {
            color: #bbb !important;
        }

        .site-footer .border-top {
            border-top: 1px solid #bbb !important;
        }

        .site-footer {
            padding: 0 !important;
            padding-top: 4em !important;
            padding-bottom: 4em !important;

        }
    </style>
    <div class="container-fluid bg-light  p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pl-4">
                    <h3>สมัครเรียนกับเรา</h3>
                    <h5 id="schedule">สอบถามข้อมูลการรับสมัครเพิ่มเติม</h5>
                    <p>โทร. 02-909-1432 ต่อ 322 หรือ 323</p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="py-4">
                        <a class="btn btn-primary" href="tcas.php">รายะละเอียดสมัครเรียน</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include("layouts/cs-footer.php") ?>

    <!-- Cookie Consent by https://www.cookiewow.com -->
    <script type="text/javascript" src="https://cookiecdn.com/cwc.js"></script>
    <script id="cookieWow" type="text/javascript" src="https://cookiecdn.com/configs/K3VSC9aVmgw2NmDbj3aosHyc" data-cwcid="K3VSC9aVmgw2NmDbj3aosHyc"></script>

    <!--script src="js/jquery-3.3.1.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--script src="js/jquery-ui.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!--script src="js/popper.min.js"></script-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--script src="js/bootstrap.min.js"></script-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!--script src="js/owl.carousel.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!--script src="js/jquery.countdown.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <!--script src="js/bootstrap-datepicker.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!--script src="js/jquery.easing.1.3.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!--script src="js/aos.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!--script src="js/jquery.fancybox.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!--script src="js/jquery.sticky.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/brands.min.js"></script>

    <!--script src="https://kit.fontawesome.com/d59a8a2721.js"></script-->
    <!--script src="js/main.js"></script-->
    <script>
        AOS.init({
            duration: 800,
            easing: 'slide',
            once: true
        });

        jQuery(document).ready(function($) {

            "use strict";



            var siteMenuClone = function() {

                $('.js-clone-nav').each(function() {
                    var $this = $(this);
                    $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
                });


                setTimeout(function() {

                    var counter = 0;
                    $('.site-mobile-menu .has-children').each(function() {
                        var $this = $(this);

                        $this.prepend('<span class="arrow-collapse collapsed">');

                        $this.find('.arrow-collapse').attr({
                            'data-toggle': 'collapse',
                            'data-target': '#collapseItem' + counter,
                        });

                        $this.find('> ul').attr({
                            'class': 'collapse',
                            'id': 'collapseItem' + counter,
                        });

                        counter++;

                    });

                }, 1000);

                $('body').on('click', '.arrow-collapse', function(e) {
                    var $this = $(this);
                    if ($this.closest('li').find('.collapse').hasClass('show')) {
                        $this.removeClass('active');
                    } else {
                        $this.addClass('active');
                    }
                    e.preventDefault();

                });

                $(window).resize(function() {
                    var $this = $(this),
                        w = $this.width();

                    if (w > 768) {
                        if ($('body').hasClass('offcanvas-menu')) {
                            $('body').removeClass('offcanvas-menu');
                        }
                    }
                })

                $('body').on('click', '.js-menu-toggle', function(e) {
                    var $this = $(this);
                    e.preventDefault();

                    if ($('body').hasClass('offcanvas-menu')) {
                        $('body').removeClass('offcanvas-menu');
                        $this.removeClass('active');
                    } else {
                        $('body').addClass('offcanvas-menu');
                        $this.addClass('active');
                    }
                })

                // click outisde offcanvas
                $(document).mouseup(function(e) {
                    var container = $(".site-mobile-menu");
                    if (!container.is(e.target) && container.has(e.target).length === 0) {
                        if ($('body').hasClass('offcanvas-menu')) {
                            $('body').removeClass('offcanvas-menu');
                        }
                    }
                });
            };
            siteMenuClone();


            var sitePlusMinus = function() {
                $('.js-btn-minus').on('click', function(e) {
                    e.preventDefault();
                    if ($(this).closest('.input-group').find('.form-control').val() != 0) {
                        $(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) - 1);
                    } else {
                        $(this).closest('.input-group').find('.form-control').val(parseInt(0));
                    }
                });
                $('.js-btn-plus').on('click', function(e) {
                    e.preventDefault();
                    $(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) + 1);
                });
            };
            // sitePlusMinus();


            var siteSliderRange = function() {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 100000,
                    values: [0, 15000],
                    slide: function(event, ui) {
                        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                    }
                });
                $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                    " - $" + $("#slider-range").slider("values", 1));
            };
            siteSliderRange();



            var siteCarousel = function() {
                if ($('.nonloop-block-13').length > 0) {
                    $('.nonloop-block-13').owlCarousel({
                        center: false,
                        items: 1,
                        loop: true,
                        lazyLoad: true,
                        stagePadding: 0,
                        margin: 30,
                        autoplay: true,
                        nav: false,
                        responsive: {
                            600: {
                                margin: 30,

                                items: 2
                            },
                            1000: {
                                margin: 30,
                                stagePadding: 0,

                                items: 3
                            },
                            1200: {
                                margin: 30,
                                stagePadding: 0,

                                items: 4
                            }
                        }
                    });
                }

                $('.slide-one-item, .with-dots').owlCarousel({
                    center: false,
                    items: 1,
                    loop: true,
                    lazyLoad: true,
                    stagePadding: 0,
                    margin: 0,
                    autoplay: true,
                    smartSpeed: 1000,
                    pauseOnHover: false,
                    nav: false,
                    dots: true,
                    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
                });

                $('.slide-one-item-alt').owlCarousel({
                    center: false,
                    items: 1,
                    loop: true,
                    lazyLoad: true,
                    stagePadding: 0,
                    smartSpeed: 700,
                    margin: 0,
                    autoplay: true,
                    pauseOnHover: false,

                });



                $('.custom-prev1').click(function(e) {
                    e.preventDefault();
                    $('.nonloop-block-13').trigger('prev.owl.carousel');
                });
                $('.custom-next1').click(function(e) {
                    e.preventDefault();
                    $('.nonloop-block-13').trigger('next.owl.carousel');
                });


                $('.custom-next').click(function(e) {
                    e.preventDefault();
                    $('.slide-one-item-alt').trigger('next.owl.carousel');
                });
                $('.custom-prev').click(function(e) {
                    e.preventDefault();
                    $('.slide-one-item-alt').trigger('prev.owl.carousel');
                });

            };
            siteCarousel();



            var siteCountDown = function() {

                $('#date-countdown').countdown('2020/10/10', function(event) {
                    var $this = $(this).html(event.strftime('' +
                        '<span class="countdown-block"><span class="label">%w</span> weeks </span>' +
                        '<span class="countdown-block"><span class="label">%d</span> days </span>' +
                        '<span class="countdown-block"><span class="label">%H</span> hr </span>' +
                        '<span class="countdown-block"><span class="label">%M</span> min </span>' +
                        '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
                });

            };
            siteCountDown();

            var siteDatePicker = function() {

                if ($('.datepicker').length > 0) {
                    $('.datepicker').datepicker();
                }

            };
            siteDatePicker();

            var siteSticky = function() {
                $(".js-sticky-header").sticky({
                    topSpacing: 0
                });
            };
            siteSticky();

            // navigation
            var OnePageNavigation = function() {
                var navToggler = $('.site-menu-toggle');
                $("body").on("click", ".main-menu li a.scroll[href^='#'], .smoothscroll[href^='#'], .site-mobile-menu .site-nav-wrap li a", function(e) {
                    //e.preventDefault();

                    var hash = this.hash;

                    $('html, body').animate({
                        'scrollTop': $(hash).offset().top
                    }, 600, 'easeInOutExpo');

                });

                $('.gototop').on('click', function() {


                    $('html, body').animate({
                        'scrollTop': $('body').offset().top
                    }, 600, 'easeInOutExpo');
                });
            };
            OnePageNavigation();

            var siteScroll = function() {



                $(window).scroll(function() {

                    var st = $(this).scrollTop();

                    if (st > 100) {
                        $('.js-sticky-header').addClass('shrink');
                    } else {
                        $('.js-sticky-header').removeClass('shrink');
                    }


                    if (st > 200) {
                        $('.gototop').addClass('active');
                    } else {
                        $('.gototop').removeClass('active');
                    }

                })

            };
            siteScroll();

        });
    </script>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v7.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="2105621063039483" logged_in_greeting="สวัสดี ... เราสามารถช่วยเหลืออะไรคุณได้บ้าง บอกเราได้นะ?" logged_out_greeting="สวัสดี ... เราสามารถช่วยเหลืออะไรคุณได้บ้าง บอกเราได้นะ?">
    </div>
<!-- script -->
<?php include("layouts/cs-script") ?>

</body>

</html>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Directory</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <?php include("menus.php"); ?>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider single_listing  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-10">
                        <div class="slider_text text-center justify-content-center">
                            <h3>Our Listings</h3>
                            <div class="search_form">
                                <form action="#">
                                    <div class="row align-items-center">
                                        <div class="col-xl-5 col-md-4">
                                            <div class="input_field">
                                                <input type="text" placeholder="What are you finding?">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-4">
                                            <div class="input_field location">
                                                <input type="text" placeholder="Location">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4">
                                            <div class="button_search">
                                                <button class="boxed-btn2" type="submit">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- explorer_europe start  -->
    <div class="explorer_europe list_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="filter_wrap">
                        <h3 class="exp_title">Advanced Filter</h3>
                        <div class="filter_main_wrap">
                                <div class="filter_inner">
                                        <form action="#">
                                            <div class="input_field">
                                                    <input type="text" placeholder="What are you finding?" >
                                                    <button class="submit_btn" type="submit"> <i class="fa fa-search"></i> </button>
                                            </div>
                                            <div class="input_field">
                                                    <select class="wide">
                                                            <option data-display="Choose categories">cat 1</option>
                                                            <option value="1">cat 2</option>
                                                            <option value="2">cat 3</option>
                                                            <option value="3">cat 4</option>
                                                          </select>
                                            </div>
                                            <div class="input_field">
                                                    <select class="wide">
                                                            <option data-display="Location">USA</option>
                                                            <option value="1">Africa</option>
                                                            <option value="2">canada</option>
                                                          </select>
                                            </div>
                                            <div class="input_field ">
                                                <div class="inner">
                                                        <div class="check_1">
                                                                <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                                                                <label for="fruit1">Open Now</label>
                                                        </div>
                                                        <div class="check_1">
                                                                <input type="checkbox" id="fruit4" name="fruit-4" value="Strawberry">
                                                                <label for="fruit4">Ratings</label>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="input_field">
                                                    <select class="wide">
                                                            <option data-display="Area (km)">Area (km)</option>
                                                            <option value="1">1km</option>
                                                            <option value="2">2km</option>
                                                          </select>
                                            </div>
                                            <div class="input_field">
                                                    <select class="wide">
                                                            <option data-display="Area (km)">Area (km)</option>
                                                            <option value="1">1km</option>
                                                            <option value="2">2km</option>
                                                          </select>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="last_range">
                                            <label for="amount">Price range:</label>
            
                                                
                                                <div id="slider-range"></div>
                                                <p>
                                                    
                                                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                                    </p>
                                                    <button class="boxed-btn2" >Reset</button>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                        <h3 class="exp_title">5432 Listings are available</h3>
                        <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="img/explorer/1.png" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-beach"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="single_listings.html">Saintmartine</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="img/explorer/2.png" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-food"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="single_listings.html">Freshly Food</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="img/explorer/3.png" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-food-1"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="single_listings.html">Midnight</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="img/explorer/4.png" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-barbershop"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="single_listings.html">Barber</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="img/explorer/5.png" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-cabin"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="single_listings.html">Montana Resort</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="img/explorer/6.png" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-shop"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="single_listings.html">Yelled Shopping</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page_nation text-center">
                                <ul>
                                    <li>
                                        <a href="#">01</a>
                                    </li>
                                    <li>
                                        <a href="#">02</a>
                                    </li>
                                    <li>
                                        <a href="#">03</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="ti-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--/ explorer_europe start  -->

<?php include("footer.php"); ?>

    <!-- link that opens popup -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/plugins.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>

    
	<script>
            $( function() {
                $( "#slider-range" ).slider({
                    range: true,
                    min: 0,
                    max: 500,
                    values: [ 75, 300 ],
                    slide: function( event, ui ) {
                        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                    }
                });
                $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
                    " - $" + $( "#slider-range" ).slider( "values", 1 ) );
            } );
            </script>
</body>

</html>
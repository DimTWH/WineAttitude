<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="WfqaELtup9wIbQklGgKuiTEocMWz9Z97Vf0MSKe40y8" />

    <title>{{ $page }} | Wine Attitude</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{  asset('Accueil-jQuery/bootstrap.css')  }}">

    <link rel="stylesheet" href="{{  asset('Accueil-jQuery/owl.carousel.min.css')  }}">
    <link rel="stylesheet" href="{{  asset('Accueil-jQuery/owl.theme.default.min.css')  }}">
    <link rel="stylesheet" href="{{  asset('css/accueil.css')  }}">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/32eb07dd2a.js" crossorigin="anonymous"></script>

    <!-- Tab icon -->
    <link rel="shortcut icon" type="image/png" href="{{  asset('pictures/icon1.png')  }}">

    <!--light-slider.css------------->
  <link rel="stylesheet" type="text/css" href="{{  asset('css/lightslider.css')  }}">
  <!--Jquery-------------------->
   <script type="text/javascript" src="{{  asset('js/Jquery.js')  }}"></script>
   <!--lightslider.js--------------->
   <script type="text/javascript" src="{{  asset('js/lightslider.js')  }}"></script>
</head>

<style>
    .sub_menu a
    {
        color: #000
    }
    .sub_menu a:hover
    {
        color: #cc9900;
    }
    .product-factsheet
        {
            color: #b0976d;
        }
    .product-factsheet:hover
    {
        color: #cc9900;
    }
</style>

<body>

<!-- header section for mobile size  -->

<div class="off_canvas_overlay"></div>

<div class="offcanvas_menu offcanvas_two">
    <div class="canvas_open">
        <a href="javascript:void(0)">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div class="offcanvas_menu_wrapper">
        <div class="canvas_close">
            <a href="javascript:void(0)">
                <i class="fa fa-times"></i>
            </a>
        </div>
        {{--<div class="header_account">
            <ul>
                --}}{{--<li class="language">
                    <a href="#">
                        <img src="pictures/francais.png" alt="" style="width: 16px"> FR <i
                            class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown_language" style="width: 20px">
                        <li><a href="#"><img src="pictures/romania.png" style="width: 16px" alt=""> RO</a></li>
                    </ul>
                </li>
                <li class="currency">
                    <a href="#">
                        EUR<i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown_currency">
                        <li><a href="#">EUR - Euro</a></li>
                        <li><a href="#">MDL - Lei MD</a></li>
                        <li><a href="#">USD - US Dollar</a></li>
                    </ul>
                </li>--}}{{--



                --}}{{--<li class="top_links">
                    <a href="#">
                        My Account <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown_links">
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>
                </li>--}}{{--

            </ul>
        </div>--}}

        {{--<div class="header_right_info">
            <ul>
                --}}{{--<li class="search_box">
                    <a href="javascript:void(0)">
                        <i class="fa fa-search"></i>
                    </a>
                    <div class="search_widget">
                        <form action="#">
                            <input type="text" placeholder="Search Your Wine...">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </li>--}}{{--
                --}}{{--<li class="header_wishlist">
                    <a href="#">
                        <i class="fa fa-heart"></i>
                        <span class="item_count">4</span>
                    </a>
                </li>--}}{{--
            </ul>
        </div>--}}

        <div id="menu" class="text-left">
            <ul class="offcanvas_main_menu">
                <li class="menu-item-has-children {{ (request()->is('lupi')) ? 'active' : '' }}">
                    <a href="{{ route("accueil") }}">Home</a>
                </li>
                <li class="menu-item-has-children
                            {{ (request()->is('lupi')) ? 'active' : '' }}
                            {{ (request()->is('aurore-rara-neagra')) ? 'active' : '' }}
                            {{ (request()->is('tewa-feteasca-neagra')) ? 'active' : '' }}
                            {{ (request()->is('kara-gani-ciotra')) ? 'active' : '' }}
                            {{ (request()->is('selection-feteasca-regala')) ? 'active' : '' }}">
                    <a href="#">Onze wijnen</a>
                    <!--<a href="#">Red Wines</a>-->
                    <ul class="sub-menu">
                        <li><a href="{{ route('lupi') }}">GITANA - Lupi</a></li>
                        <li><a href="{{ route('aurore-rara-neagra') }}">FAUTOR - Aurore Rara Neagra</a></li>
                        <li><a href="{{ route('tewa-feteasca-neagra') }}">TEWA - Feteasca Neagra</a></li>
                        <li><a href="{{ route('kara-gani-ciotra') }}">KARA GANI - Ciotra Cabernet Sauvignon+Feteasca Neagra</a></li>
                        <li><a href="{{ route('selection-feteasca-regala') }}">VINUM ESTATE - Selection, Feteasca Regala</a></li>
                        <li><a href="{{ route('asconi-sol-negru') }}">ASCONI - Sol Negru, Cabernet Sauvignon</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children active">
                    <a href="#contact">Contact</a>
                </li>
                {{-- <li class="menu-item-has-children"><a href="#">Nos Caves</a></li>
                <li class="menu-item-has-children"><a href="#">À propos</a></li> --}}
            </ul>
        </div>

        <div class="offcanvas_footer">
            <span><a href="#"><i class="fa fa-envelope"></i> mywine.attitude@gmail.com</a></span>
            <ul>
                <li class="facebook">
                    <a href="https://www.facebook.com/WineAttitude.MolBel" target="_blank">
                        <i class="fab fa-facebook" title="Go to our facebook page @WineAttitude.MolBel"></i>
                         {{-- WineAttitude.MolBel --}}
                    </a>
                </li>
                <li class="instagram">
                    <a href="https://www.instagram.com/wine.attitude.be/" target="_blank">
                        <i class="fab fa-instagram" title="Go to our facebook page @wine.attitude.be"></i>
                         {{-- wine.attitude.be --}}
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>

<header>
    <div class="main_header header_transparent header-mobile-m">
        <div class="header_container sticky-header">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-lg-6" style="display: inline-block;">
                        <div class="main_menu menu_two menu_position">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ route("accueil") }}" class="{{ (request()->is('accueil')) ? 'active' : '' }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="#" class="{{ (request()->is('lupi')) ? 'active' : '' }}
                                            {{ (request()->is('aurore-rara-neagra*')) ? 'active' : '' }}
                                            {{ (request()->is('tewa-feteasca-neagra*')) ? 'active' : '' }}
                                            {{ (request()->is('kara-gani-ciotra*')) ? 'active' : '' }}
                                            {{ (request()->is('selection-feteasca-regala*')) ? 'active' : '' }}">
                                            Our Wines
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub_menu pages" style="width: 300px">
                                            <li><a href="{{ route('lupi') }}">GITANA - Lupi</a></li>
                                            <li><a href="{{ route('aurore-rara-neagra') }}">FAUTOR - Aurore Rara Neagra</a></li>
                                            <li><a href="{{ route('tewa-feteasca-neagra') }}">TEWA - Feteasca Neagra</a></li>
                                            <li><a href="{{ route('kara-gani-ciotra') }}">KARA GANI - Ciotra Cabernet Sauvignon+Feteasca Neagra</a></li>
                                            <li><a href="{{ route('selection-feteasca-regala') }}">VINUM ESTATE - Selection, Feteasca Regala</a></li>
                                            <li><a href="{{ route('asconi-sol-negru') }}">ASCONI - Sol Negru, Cabernet Sauvignon</a></li>
                                            {{--<li><a href="#">Vin Rosé</a></li>--}}
                                        </ul>
                                    </li>

                                    <div class="col-lg-2" style="display: inline-block;">
                                        <div class="logo">
                                            <a href="{{ route("accueil") }}"> <img src="{{  asset('pictures/logo-h.png')  }}" alt="logo"></a>
                                        </div>
                                    </div>

                                    {{-- <li><a href="#">Nos Caves</a></li>
                                    <li><a href="#">À propos</a></li> --}}
                                    <li><a href="#contact">Contact</a></li>
                                    {{--<li>
                                        <a href="">Region <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="#">India</a></li>
                                            <li><a href="#">USA</a></li>
                                            <li><a href="#">Australia</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="">User <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="#">Log In</a></li>
                                            <li><a href="#">Sign Up</a></li>
                                        </ul>
                                    </li>--}}
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/WineAttitude.MolBel" target="_blank">
                                            <i class="fab fa-facebook"></i>
                                                {{-- WineAttitude.MolBel --}}
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://www.instagram.com/wine.attitude.be/" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                                {{-- wine.attitude.be --}}
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-lg-4" style="display: inline-block;">
                        <div class="header_top_right">
                            {{--<div class="header_right_info">
                                <ul>
                                    <li class="search_box">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <div class="search_widget">
                                            <form action="#">
                                                <input type="text" placeholder="Search Your Wine...">
                                                <button type="submit">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="header_wishlist">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                            <span class="item_count">4</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>--}}
                            {{--<div class="header_account">
                                <ul>
                                    --}}{{--<li class="top_links">
                                        <a href="#">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <ul class="dropdown_links">
                                            <li><a href="#">Checkout</a></li>
                                            <li><a href="#">My Account</a></li>
                                            <li><a href="#">Shopping Cart</a></li>
                                            <li><a href="#">Wishlist</a></li>
                                        </ul>
                                    </li>--}}{{--


                                    --}}{{--<li class="language">
                                        <a href="#">
                                            <img src="pictures/francais.png" alt="" style="width: 16px"> FR <i
                                                class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown_language" style="width: 20px">
                                            <li><a href="#"><img src="pictures/romania.png" style="width: 16px" alt=""> RO</a></li>
                                        </ul>
                                    </li>
                                    <li class="currency">
                                        <a href="#">
                                            EUR<i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">EUR - Euro</a></li>
                                            <li><a href="#">MDL - Lei MD</a></li>
                                            <li><a href="#">USD - US Dollar</a></li>
                                        </ul>
                                    </li>--}}{{--
                                </ul>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



<main>
    @yield('content')
</main>



<footer class="footer">
    <div class="container">
        <div class="row">
            {{-- <div class="col-md-3 col-sm-3">
                <div class="footer-block about">
                    <h4 class="footer-title">Projet</h4>
                    <hr class="footer_border">
                    <ul class="list-unstyled">
                        <li><a href="javascript:void(0)">About Us</a></li>
                        <li><a href="javascript:void(0)">Nos Vins</a></li>
                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                        <li><a href="javascript:void(0)">Terms &amp; Conditons</a></li>
                        <li><a href="javascript:void(0)">Support Center</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="section-footer col-md-3 col-sm-3">
                <div class="footer-block about">
                    <h4 class="footer-title">Our Wines</h4>
                    <hr class="footer_border">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('lupi') }}">GITANA - Lupi</a></li>
                        <li><a href="{{ route('aurore-rara-neagra') }}">FAUTOR - Aurore Rara Neagra</a></li>
                        <li><a href="{{ route('tewa-feteasca-neagra') }}">TEWA - Feteasca Neagra</a></li>
                        <li><a href="{{ route('kara-gani-ciotra') }}">KARA GANI - Ciotra Cabernet Sauvignon+Feteasca Neagra</a></li>
                        <li><a href="{{ route('selection-feteasca-regala') }}">VINUM ESTATE - Selection, Feteasca Regala</a></li>
                        <li><a href="{{ route('asconi-sol-negru') }}">ASCONI - Sol Negru, Cabernet Sauvignon</a></li>
                    </ul>
                </div>
            </div>
            <div class="section-footer col-md-3 col-sm-3" id="contact">
                <div class="footer-block about">
                    <h4 class="footer-title">Contact us</h4>
                    <hr class="footer_border">
                    <ul class="list-unstyled">
                        <!--<li><i class="fa fa-paper-plane"></i>Bengaluru, Karnataka</li>-->
                        <li>
                            <a href="mailto:mywine.attitude@gmail.com">
                                <i class="fa fa-envelope" style="line-height: 30px;"></i>
                                 mywine.attitude@gmail.com
                            </a>
                        </li>
                        <li>
                            <a href="tel:+32 488157462">
                                <i class="fa fa-phone" style="margin-right: 5px"></i>
                                 +32 488 157 462
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section-footer col-md-3 col-sm-3">
                <div class="footer-block about">
                    <h4 class="footer-title">More about us</h4>
                    <hr class="footer_border">
                        <ul>
                            <li class="facebook">
                                <a href="https://www.facebook.com/WineAttitude.MolBel" target="_blank"><i class="fab fa-facebook"></i>
                                    WineAttitude.MolBel </a>
                            </li>
                            <li class="instagram">
                                <a href="https://www.instagram.com/wine_attitude_md_be/" target="_blank"><i class="fab fa-instagram"></i>
                                    wine_attitude_md_be</a>
                            </li>
                        </ul>
                    <br>

                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom_outer">
        <div class="container">
            <div class="row">
                {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footerbottom_link">
                    <div class="card">
                        <ul class="list-inline">
                            <li><img src="images/card-1.png" alt="" class="img-responsive"></li>
                            <li><img src="images/card-2.png" alt="" class="img-responsive"></li>
                            <li><img src="images/card-4.png" alt="" class="img-responsive"></li>
                            <li><img src="images/card-5.png" alt="" class="img-responsive"></li>
                            <li><img src="images/card-6.png" alt="" class="img-responsive"></li>
                            <li><img src="images/card-7.png" alt="" class="img-responsive"></li>
                        </ul>
                    </div>
                </div>--}}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright">
                        <p>Wine Attitude &copy; 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{  asset('js/accueil.js')  }}"></script>

</body>

</html>

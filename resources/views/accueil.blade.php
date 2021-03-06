@extends('app', ['page' => __('Accueil')])

@section('content')
<meta name="google-site-verification" content="WfqaELtup9wIbQklGgKuiTEocMWz9Z97Vf0MSKe40y8" />
<section class="pt-pb">

    <div>
        <div class="master-slider" id="masterslider">
            <div class="ms-slide slide-1" style="z-index: 10;">
                <img src="pictures/banner-h-1.jpg" alt="">

                <h3 class="ms-layer bold-title" style="left: 20px; top: 250px; color: #d9932f; font-weight: 400; text-shadow: 2px 2px 5px #000;"
                    data-effect="right(250)" data-duration="3500" data-delay="200" data-ease="easeOutExpo">
                    New Wine Collection 2022</h3>
                <h3 class="ms-layer light-title"
                    style="left: 20px; top: 300px; color: #fff; font-weight: 900; letter-spacing: 1px; text-shadow: 2px 2px 5px #000;"
                    data-effect="left(short)" data-duration="3500" data-delay="300" data-ease="easeOutExpo">
                    Wine
                </h3>
                <h1 class="ms-layer light-title"
                    style="left: 20px; top: 350px; color: #fff; font-weight: 900; letter-spacing: 0.5px; text-shadow: 2px 2px 5px #000;"
                    data-effect="left(short)" data-duration="3500" data-delay="350" data-ease="easeOutExpo">
                    Attitude
                </h1>
                <a id="shopnow" class="ms-layer"
                   style="left: 20px; top: 424px; color: #fff; font-weight: 400; letter-spacing: 0.5px; margin: 0px ; padding: 0px; font-size: 14px; line-height: 20px; border: 1px solid #fff; padding: 10px 20px; text-shadow: 2px 2px 5px #000;"
                   data-effect="left(short)" data-duration="3500" data-delay="300" data-ease="easeOutExpo">SHOP
                    NOW</a>
            </div>
            <div class="ms-slide slide-2" style="z-index: 13;" data-delay="10">
                <img src="pictures/h-banner-solnegru.jpg" alt="">

                <h3 class="ms-layer bold-title" style="left: 0px; top: 260px; color: #000; font-weight: 400; text-shadow: 2px 2px 5px #fff;"
                    data-effect="right(250)" data-duration="3500" data-delay="200" data-ease="easeOutExpo">
                    New Wine Collection 2022</h3>
                <h3 class="ms-layer light-title"
                    style="left: 20px; top: 310px; color: #000; font-weight: 900; letter-spacing: 1px; text-shadow: 5px 5px 5px #fff;"
                    data-effect="left(short)" data-duration="3500" data-delay="300" data-ease="easeOutExpo">
                    Wine
                </h3>
                <h1 class="ms-layer light-title"
                    style="left: 20px; top: 360px; color: #000; font-weight: 900; letter-spacing: 0.5px; text-shadow: 2px 2px 5px #fff;"
                    data-effect="left(short)" data-duration="3500" data-delay="350" data-ease="easeOutExpo">
                    Attitude
                </h1>
                <button id="shopnow" class="ms-layer"
                   style="left: 20px; top: 434px; color: #fff; font-weight: 400; letter-spacing: 0.5px; margin: 0px ; padding: 0px; font-size: 14px; line-height: 20px; border: 1px solid #fff; padding: 10px 20px; text-shadow: 2px 0px 3px #000;"
                   data-effect="left(short)" data-duration="3500" data-delay="300" data-ease="easeOutExpo">SHOP
                    NOW</button>
            </div>
        </div>
    </div>

</section>

<div class="clearfix"></div>

<section class="no-padding">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-4 col-md-3 col-sm-4">
                <p class="lineeffect">
                    <a href="{{ route('tewa-feteasca-neagra')}}">
                        <img src="pictures/card-1-tewa.jpg" class="img-responsive img-fill" alt="See tewa-feteasca-neagra">
                    </a>
                </p>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-4">
                <p class="lineeffect">
                    <a href="{{ route('kara-gani-ciotra')}}">
                        <img src="pictures/card-2-ciotra.jpg" class="img-responsive img-fill" alt="See kara-gani-ciotra">
                    </a>
                </p>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-4">
                <p class="lineeffect">
                    <a href="{{ route('asconi-sol-negru')}}">
                        <img src="pictures/card-4-solnegru.jpg" class="img-responsive img-fill" alt="See aurore-rara-neagra">
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

{{-- <section class="category-img">
    <div class="container">
        <div class="row">
            <div class="categoriesW">
                <div class="categorieW col-lg-6 col-md-6 col-sm-6">
                    <h4 class="cat-link">
                        <a href="#">
                            <img src="pictures/cave/fautor/vin/aurore-nobg.png" class="img-responsive" alt="" style="height: 300px">
                            Vin <br> Rouge
                        </a>
                    </h4>
                </div>
                <div class="categorieW col-lg-6 col-md-6 col-sm-6">
                    <h4 class="cat-link">
                        <a href="#">
                            <img src="pictures/cave/vinum-estate/vin/feteasca-regala-nobg.png" class="img-responsive" alt="" style="height: 300px">
                            Vin <br> Blanc
                        </a>
                    </h4>
                </div>
                <!--<div class="categorieW col-lg-4 col-md-3 col-sm-4">
                    <h4 class="cat-link">
                        <a href="#">
                            <img src="images/c4.png" class="img-responsive" alt="">
                            Vin <br> Ros??
                        </a>
                    </h4>
                </div>-->
            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="super-deal-section" style="background-image: url(images/bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 col-md-push-6 col-sm-push-4">
                <div class="super-deal">
                    <h1>Hand-Picked
                        <br>
                        <span style="font-weight: 100;">Collection</span>
                    </h1>
                    <h2>Save More, Pour More</h2>
                    <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad rerum repudiandae ipsa?
                        Tempore modi quisquam velit nostrum nulla veritatis tempora quaerat eligendi porro, quos
                        aperiam. Ea molestias placeat consequuntur fuga.</p>
                    <div class="clearfix"></div>

                    <a href="#btn-col-banner" class="btn btn-normal" id="btn-col-banner">SHOP NOW</a>
                </div>
            </div>
        </div>
    </div>

</section> --}}

<section class="product-slide" id="products" style="padding-top: 129px">
    <div class="container">
        <div class="row">
            <div class="dark-headingstyle-one text-center">
                <h2 class="dart-heading" id="collection-banner">
                    Our Wines
                </h2>
                <img src="images/Icon-sep.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div role="tabpanel" class="tabSix text-center">
                    {{--<ul id="tabSix" class="nav nav-tabs">
                        <li class="active">
                            <a href="#contentSix-one" data-toggle="tab">
                                <p>Best Seller</p>
                            </a>
                        </li>
                        <li>
                            <a href="#contentSix-two" data-toggle="tab">
                                <p>New Arrival</p>
                            </a>
                        </li>
                        <li>
                            <a href="#contentSix-three" data-toggle="tab">
                                <p>Most Wanter</p>
                            </a>
                        </li>
                    </ul>--}}

                    <div class="tab-content">
                        <!-- first tab  -->
                        <div class="tab-pane in active" id="contentSix-one">
                            <div class="tab-pane" id="contentSix-2">
                                <div class="owl-carousel owl-theme product-slider">
                                    <!-- product starts  -->
                                    <div class="product-main">
                                        <a href="{{ route("lupi") }}">
                                            <figure class="dark-theme">
                                                <img src="pictures/cave/gitana/vin/lupi-nobg.png" alt="">
                                                <div class="ribbon"><span>
                                                    Nouveau
                                                </span></div>
                                                {{--<span class="block-sticker-tag1">
                                                        <span class="off_tag"><strong><i
                                                                    class="fa fa-shopping-basket"></i></strong></span>
                                                    </span>
                                                <span class="block-sticker-tag2">
                                                        <span class="off_tag1"><strong><i
                                                                    class="fa fa-heart"></i></strong></span>
                                                    </span>--}}
                                                <span class="block-sticker-tag3">
                                                        <span class="off_tag2"><strong><i
                                                                    class="fa fa-eye"></i></strong></span>
                                                    </span>
                                            </figure>
                                            <div class="block-caption1">
                                                <h4>GITANA - Lupi</h4>
                                                <div class="clear"></div>
                                                {{--<div class="price">
                                                    <span class="sell-price">Rs. 26669</span>
                                                    <span class="actual-price">Rs. 28999</span>
                                                </div>--}}
                                            </div>
                                        </a>
                                    </div>
                                    <!-- product ends  -->
                                    <!-- product starts  -->
                                    <div class="product-main">
                                        <a href="{{ route('aurore-rara-neagra') }}">
                                            <figure class="dark-theme">
                                                <img src="pictures/cave/fautor/vin/aurore-nobg.png" alt="">
                                                <div class="ribbon"><span>
                                                    Nouveau
                                                </span></div>
                                                {{--<span class="block-sticker-tag1">
                                                        <span class="off_tag"><strong><i
                                                                    class="fa fa-shopping-basket"></i></strong></span>
                                                    </span>
                                                <span class="block-sticker-tag2">
                                                        <span class="off_tag1"><strong><i
                                                                    class="fa fa-heart"></i></strong></span>
                                                    </span>--}}
                                                <span class="block-sticker-tag3">
                                                        <span class="off_tag2"><strong><i
                                                                    class="fa fa-eye"></i></strong></span>
                                                    </span>
                                            </figure>
                                            <div class="block-caption1">
                                                <h4>FAUTOR - Aurore Rara Neagra</h4>
                                                <div class="clear"></div>
                                                {{--<div class="price">
                                                    <span class="sell-price">Rs. 26669</span>
                                                    <span class="actual-price">Rs. 28999</span>
                                                </div>--}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-main">
                                        <a href="{{ route('tewa-feteasca-neagra') }}">
                                            <figure class="dark-theme">
                                                <img src="{{ asset('pictures/cave/tewa/vin/tewa-raraneagra-nobg.png') }}" alt="">
                                                <div class="ribbon"><span>
                                                    Nouveau
                                                </span></div>
                                                {{--<span class="block-sticker-tag1">
                                                        <span class="off_tag"><strong><i
                                                                    class="fa fa-shopping-basket"></i></strong></span>
                                                    </span>
                                                <span class="block-sticker-tag2">
                                                        <span class="off_tag1"><strong><i
                                                                    class="fa fa-heart"></i></strong></span>
                                                    </span>--}}
                                                <span class="block-sticker-tag3">
                                                        <span class="off_tag2"><strong><i
                                                                    class="fa fa-eye"></i></strong></span>
                                                    </span>
                                            </figure>
                                            <div class="block-caption1">
                                                <h4>TEWA - Feteasca Neagra</h4>
                                                <div class="clear"></div>
                                                {{--<div class="price">
                                                    <span class="sell-price">Rs. 26669</span>
                                                    <span class="actual-price">Rs. 28999</span>
                                                </div>--}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-main">
                                        <a href="{{ route('kara-gani-ciotra') }}">
                                            <figure class="dark-theme">
                                                <img src="{{ asset('pictures/cave/kara-gani/vin/ciotra-nobg.png') }}" alt="">
                                                <div class="ribbon"><span>
                                                    Nouveau
                                                </span></div>
                                                {{--<span class="block-sticker-tag1">
                                                        <span class="off_tag"><strong><i
                                                                    class="fa fa-shopping-basket"></i></strong></span>
                                                    </span>
                                                <span class="block-sticker-tag2">
                                                        <span class="off_tag1"><strong><i
                                                                    class="fa fa-heart"></i></strong></span>
                                                    </span>--}}
                                                <span class="block-sticker-tag3">
                                                        <span class="off_tag2"><strong><i
                                                                    class="fa fa-eye"></i></strong></span>
                                                    </span>
                                            </figure>
                                            <div class="block-caption1">
                                                <h4>KARA GANI - Ciotra (Feteasca Neagra)</h4>
                                                <div class="clear"></div>
                                                {{--<div class="price">
                                                    <span class="sell-price">Rs. 26669</span>
                                                    <span class="actual-price">Rs. 28999</span>
                                                </div>--}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-main">
                                        <a href="{{ route('asconi-sol-negru') }}">
                                            <figure class="dark-theme">
                                                <img src="{{ asset('pictures/cave/vinum-estate/vin/selection-nobg1.png') }}" alt="">
                                                <div class="ribbon"><span>
                                                    Nouveau
                                                </span></div>
                                                {{--<span class="block-sticker-tag1">
                                                        <span class="off_tag"><strong><i
                                                                    class="fa fa-shopping-basket"></i></strong></span>
                                                    </span>
                                                <span class="block-sticker-tag2">
                                                        <span class="off_tag1"><strong><i
                                                                    class="fa fa-heart"></i></strong></span>
                                                    </span>--}}
                                                <span class="block-sticker-tag3">
                                                        <span class="off_tag2">
                                                            <i class="fa fa-eye"></i> Voir</span>
                                                    </span>
                                            </figure>
                                            <div class="block-caption1">
                                                <h4>ASCONI - Sol Negru (Cabernet Sauvignon)</h4>
                                                <div class="clear"></div>
                                                {{--<div class="price">
                                                    <span class="sell-price">Rs. 26669</span>
                                                    <span class="actual-price">Rs. 28999</span>
                                                </div>--}}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- row ends  -->
    </div>
    <!-- container ends  -->
</section>

{{--<section class="newsletter-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="dart-headingstyle-one t-mb-20 text-left t-pt-40 t-pb-30">
                    <h2 class="dart-heading">Newsletter</h2>
                    <p>Sign Up to our newsletter and save 20% of on next purchase</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <form action="#" class="form-inline">
                    <div class="newsletter t-pt-70 t-pb-30">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email...">
                        </div>
                        <button type="submit" class="btn btn-default">S'abonner
                            <i class="fa fa-envelope"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>--}}

<script>

const duration = 800;

const scrollToTarget = function (target) {
    const top = target.getBoundingClientRect().top;
    const startPos = window.pageYOffset;
    const diff = top;

    let startTime = null;
    let requestId;

    const loop = function (currentTime) {
        if (!startTime) {
            startTime = currentTime;
        }

        // Elapsed time in miliseconds
        const time = currentTime - startTime;

        const percent = Math.min(time / duration, 1);
        window.scrollTo(0, startPos + diff * percent);

        if (time < duration) {
            // Continue moving
            requestId = window.requestAnimationFrame(loop);
        } else {
            window.cancelAnimationFrame(requestId);
        }
    };
    requestId = window.requestAnimationFrame(loop);
};

$('#shopnow').on('click', function() {
    // Prevent the default action
    e.preventDefault();

    // Get the `href` attribute
    const href = e.target.getAttribute('href');
    const id = href.substr(1);
    const target = document.getElementById(id);


    scrolltotarget("#products")
});

</script>
<script src="{{  asset('Accueil-jQuery/jquery.min.js')  }}"></script>
<script src="{{  asset('Accueil-jQuery/jquery.easing.min.js')  }}"></script>
<script src="{{  asset('Accueil-jQuery/bootstrap.min.js')  }}"></script>
<script src="{{  asset('Accueil-jQuery/masterslider.min.js')  }}"></script>
<script src="{{  asset('Accueil-jQuery/owl.carousel.min.js')  }}"></script>
{{-- <script src="{{  asset('js/accueil.js')  }}"></script> --}}
@endsection

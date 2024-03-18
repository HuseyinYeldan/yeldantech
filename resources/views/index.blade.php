<!DOCTYPE html>
<html lang="tr">

<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KVLKZ553');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ana Sayfa - {{setting('site.title')}} </title>
    <meta name="robots" content="follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">

    {{-- FONTS --}}
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Light.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Medium.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-SemiBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Color+Emoji&display=swap" rel="stylesheet">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/plugins/sal.css">
    <link rel="stylesheet" href="/assets/css/plugins/feather.css">
    <link rel="stylesheet" href="/assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="/assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnify.css">
    <link rel="stylesheet" href="/assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="/assets/css/plugins/animation.css">
    {{-- <link rel="stylesheet" href="/assets/css/plugins/bootstrap-select.min.css"> --}}
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/plyr.css">
    <link rel="stylesheet" href="/assets/css/style.css" >
</head>

<body class="rbt-header-sticky">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVLKZ553"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('templates.header')

    @foreach ($pages as $bannerlar)
    @if($bannerlar->slug == 'anasayfa-banner')
    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-3 header-transperent-spacer">
        <div class="wrapper">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7 order-1 order-lg-1">
                        <div class="banner-content ">
                            <div class="inner">
                                <div class="section-title text-start">
                                    <span class="subtitle bg-violet-opacity"> <b> {!!$bannerlar-> excerpt!!} </b></span>
                                </div>
                                <h1 class="title">{{$bannerlar-> title}}</h1>
                                <p class="description">{!! $bannerlar-> body !!}</p>
                                <div class="about-btn mb--40">
                                    <a class="rbt-btn btn-gradient hover-icon-reverse" href="tel:{{setting('site.telefon')}}">
                                        <span class="icon-reverse-wrapper">
                                <span class="btn-text"> <strong> Bizi Arayın!</strong></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="rating mb--20">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="rbt-like-total">
                                    <div class="profile-share" id="profile-share">

                                        @foreach (json_decode($bannerlar->gallery) as $testimonial)
                                            <a href="#" class="avatar" data-tooltip="Hemen" tabindex="0"><img src="{{Voyager::Image($testimonial)}}" alt="education"></a>
                                        @endforeach

                                        <div class="more-author-text">
                                            <h5 class="total-join-students">Hemen Aramıza Katılın!</h5>
                                            <p class="subtitle">Tek amacımız sizi mutlu etmek.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-2 order-lg-2">
                        <div class="rbt-contact-form contact-form-style-1">
                            <h3 class="title"> Hemen Size Dönüş Yapalım!</h3>
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                                </div>
                            @endif
                            <form id="contact-form" action="{{route('mesaj.gonder')}}" method="POST">
                                @method('POST')
                                @csrf
                                <div class="form-group">
                                    <input name="ad" required type="text" maxlength="64"/>
                                    <label>Ad Soyad (*)</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input name="telefon" required type="tel" maxlength="18">
                                    <label>Telefon (*)</i> </label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <textarea name="mesaj" maxlength="1200"></textarea>
                                    <label>Mesaj</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-submit-group">
                                    <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse radius-round w-100">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">İLETİŞİME GEÇ</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-wrapper">
            <div class="left-shape">
                <img src="/assets/images/banner/right-shape.png" alt="Banner Images">
            </div>
            <div class="top-shape">
                <img src="/assets/images/banner/top-shape.png" alt="Banner Images">
            </div>
            <div class="marque-images edumarque"></div>
        </div>
    </div>
    <!-- End Banner Area -->
    @endif
    @endforeach

    @include('templates.about-details')

    @include('templates.testimonial')

    <!-- Start Why Us -->
    <div class="service-wrapper bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        @foreach ($pages as $reasonsText)
                        @if($reasonsText->slug == 'reasons-yazisi')
                        <span class="subtitle bg-pink-opacity">{{$reasonsText->getTranslatedAttribute('excerpt','tr')}}</span>
                        <h2 class="title">{{$reasonsText->getTranslatedAttribute('title','tr')}}</h2>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row row--15 mt_dec--30">
                        
                        @foreach ($reasons as $nedenbiz)
                        <!-- Start Single Card  -->
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="rbt-flipbox">
                                <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-{{$nedenbiz->cardStyle}}">
                                    <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                        <div class="icon">
                                            <img src="{{Voyager::Image($nedenbiz->icon)}}" alt="card-icon">
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{$nedenbiz->getTranslatedAttribute('slug','tr')}}">{{$nedenbiz->getTranslatedAttribute('title','tr')}}</a></h5>
                                            <p>{!!$nedenbiz->getTranslatedAttribute('content','tr')!!}</p>
                                            <a class="rbt-btn-link stretched-link" href="{{$nedenbiz->getTranslatedAttribute('slug','tr')}}">{{$nedenbiz->getTranslatedAttribute('buttonText','tr')}}<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                        <ul class="rbt-list-style-3 color-white">
                                            <li> {!!$nedenbiz->getTranslatedAttribute('description','tr')!!} </li>
                                        </ul>
                                        <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="{{$nedenbiz->getTranslatedAttribute('slug','tr')}}">
                                            <span data-text="{{$nedenbiz->getTranslatedAttribute('buttonText','tr')}}">{{$nedenbiz->getTranslatedAttribute('buttonText','tr')}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Us -->

    <!-- Start Project Gallery -->
    <div class="rbt-team-area bg-gradient-8 rbt-section-gap">
        <div class="container">
            @foreach($pages as $projeler)
            @if($projeler->slug == 'son-calismalarimiz-yazisi')
            <div class="row mb--60 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-white-opacity">{{$projeler->getTranslatedAttribute('excerpt','tr')}}</span>
                        <h2 class="title color-white">{{$projeler->getTranslatedAttribute('title','tr')}}</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="read-more-btn text-start text-md-end">
                        <a class="rbt-btn hover-icon-reverse radius-round btn-white" href="/projelerimiz">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">Tüm Projelerimiz</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            <div class="row g-5">

                @foreach ($projects as $projeler)
                <!-- Start Single Team  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-team-modal-thumb nav nav-tabs">
                        <a class="rbt-team-thumbnail" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#{{$projeler->modalName}}">
                            <div class="thumb">
                                <img src="{{Voyager::Image($projeler->image)}}" alt="{{ $projeler->alt }}">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Team  -->
                @endforeach

            </div>

            @foreach ($projects as $projeler)
                
            <div class="rbt-team-modal modal fade rbt-modal-default" id="{{$projeler->modalName}}" tabindex="-1" aria-labelledby="{{$projeler->modalName}}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="inner">
                                <div class="row g-5 row--30 align-items-center">
                                    <div class="col-lg-6">
                                        <div class="rbt-team-thumbnail">
                                            <div class="thumb">
                                                <img class="w-100" src="{{Voyager::Image($projeler->image)}}" alt="{{$projeler->alt}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="rbt-team-details">
                                            <div class="author-info">
                                                <h4 class="title">{{$projeler->getTranslatedAttribute('title','tr')}}</h4>
                                                <span class="designation theme-gradient">{{$projeler->getTranslatedAttribute('industry','tr')}}</span>
                                            </div>
                                            <p class="mb--15">{!!$projeler->getTranslatedAttribute('description','tr')!!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-circle-shape"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
    <!-- End Project Gallery -->

    @include('templates.blog-container')

    @include('templates.cta1')

    @include('templates.footer')


    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="/assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="/assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="/assets/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="/assets/js/vendor/sal.js"></script>
    <script src="/assets/js/vendor/swiper.js"></script>
    <script src="/assets/js/vendor/magnify.min.js"></script>
    <script src="/assets/js/vendor/jquery-appear.js"></script>
    <script src="/assets/js/vendor/odometer.js"></script>
    <script src="/assets/js/vendor/backtotop.js"></script>
    <script src="/assets/js/vendor/isotop.js"></script>
    <script src="/assets/js/vendor/imageloaded.js"></script>
    <script src="/assets/js/vendor/wow.js"></script>
    <script src="/assets/js/vendor/waypoint.min.js"></script>
    <script src="/assets/js/vendor/easypie.js"></script>
    <script src="/assets/js/vendor/text-type.js"></script>
    <script src="/assets/js/vendor/jquery-one-page-nav.js"></script>
    {{-- <script src="/assets/js/vendor/bootstrap-select.min.js"></script> --}}
    <script src="/assets/js/vendor/jquery-ui.js"></script>
    <script src="/assets/js/vendor/magnify-popup.min.js"></script>
    <script src="/assets/js/vendor/paralax-scroll.js"></script>
    <script src="/assets/js/vendor/paralax.min.js"></script>
    <script src="/assets/js/vendor/countdown.js"></script>
    <script src="/assets/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>
    <script>
        const thumbnailWrapper = document.getElementById('thumbnail-wrapper')

        for (let i = 0; i < 3; i++) {
            thumbnailWrapper.children[i].classList.add(`image-${i+1}`);
            thumbnailWrapper.children[i].children[0].setAttribute('data-parallax',`{"x": 0, "y":${i+5*10}}`)
        }
        
        const profileShare = document.getElementById('profile-share')

        const testimonialTooltip = ['Hemen','Aramıza','Katılın'];

        for (let i = 0; i < 3; i++) {
            profileShare.children[i].setAttribute('data-tooltip',testimonialTooltip[i])
        }

    </script>
</body>

</html>
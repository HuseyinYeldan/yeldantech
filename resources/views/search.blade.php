<!DOCTYPE html>
<html lang="en">

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
    <title>Araştır - {{setting('site.title')}} </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/plugins/sal.css">
    <link rel="stylesheet" href="assets/css/plugins/feather.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.css">
    <link rel="stylesheet" href="assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plyr.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="rbt-header-sticky">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVLKZ553"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('templates.header')

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--40 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Araştır</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Araştır</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-elements-area bg-color-darker rbt-section-gap p-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{route('search')}}" method="GET" class="rbt-search-style me-0">
                        <input type="text" name="ara" placeholder="Araştır..">
                        <button type="submit" class="rbt-search-btn rbt-round-btn">
                            <i class="feather-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="row g-5 mt--15">
                
                @if($blogSearch->isEmpty())
                <div class="rbt-error-area">
                    <div class="error-area">
                        <div class="container">
                            <div class="row justify-content-center text-center">
                                <div class="col-12">
                                    <h1 class="title" id="title" style="font-size: 72pt">😭 Sonuç Bulunamadı 😭</h1>
                                    <p>Başka anahtar kelimelerle aramayı deneyebilirsin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @foreach ($blogSearch->sortByDesc('created_at') as $blog)


                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="/blog/{{$blog->slug}}">
                                <img src="{{Voyager::Image($blog->image)}}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h5>
                            @if ($blog->created_at > $mytime = Carbon\Carbon::yesterday()) <span class="rbt-badge-card" style="position: absolute; left:10px; top:10px;;"> Yeni🔥 @endif </span>
                            <div class="author-info mb--10"> <img src="{{Voyager::Image($blog->user->avatar)}}" alt="{{$blog->user->name}} profil resmi" style="border-radius: 100px; width:40px; margin-right:10px;">  paylaşan <a href="/profil/{{$blog->user->name}}">{{$blog->user->name}} <img src="/assets/images/icons/verified.webp" alt="Onaylı Kullanıcı İşareti" style="width:20px;"></a>   </div>
                            <p class="rbt-card-text mb--10">{{$blog->excerpt}}</p>
                            <b class="color-primary" style="font-size: 12pt; margin-left:-5px;">⚡Ortalama {{ floor(count(preg_split('/\s+/u', strip_tags($blog->content)))/120) }} dakika </b>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="/blog/{{$blog->slug}}">Devamını oku <i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>


    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    @include('templates.footer')


    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/swiper.js"></script>
    <script src="assets/js/vendor/magnify.min.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/odometer.js"></script>
    <script src="assets/js/vendor/backtotop.js"></script>
    <script src="assets/js/vendor/isotop.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>

    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/magnify-popup.min.js"></script>
    <script src="assets/js/vendor/paralax-scroll.js"></script>
    <script src="assets/js/vendor/paralax.min.js"></script>
    <script src="assets/js/vendor/countdown.js"></script>
    <script src="assets/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog - {{setting('site.title')}} </title>
    <meta name="robots" content=" follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Light.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Medium.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-SemiBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    
    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/plugins/sal.css">
    <link rel="stylesheet" href="/assets/css/plugins/feather.css">
    <link rel="stylesheet" href="/assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="/assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnify.css">
    <link rel="stylesheet" href="/assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="/assets/css/plugins/animation.css">
    <link rel="stylesheet" href="/assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/plyr.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="rbt-header-sticky">


    @include('templates.header')
    @foreach ($blogs->sortByDesc('created_at')->slice(0,1) as $blog)


    <div class="rbt-page-banner-wrapper" style="padding: 80px 0px 235px;">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">
            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="/">Anasayfa</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">Bloglar</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">Tüm Bloglarımız</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> {{$blog->count()}} blog mevcut
                                </a>
                            </div>
                            <p class="description">Tüm bloglarımızı oku ve bilgilen! </p>

                            <h4 class="description">Kategoriler</h4>
                            <a href="/kategori/seo"> <button class="category-button">SEO</button></a>
                            <a href="/kategori/yazilim"> <button class="category-button">Yazılım</button></a>
                            <a href="/kategori/tasarim"> <button class="category-button">Tasarım</button></a>
                            <a href="/kategori/yapay-zeka"> <button class="category-button">Yapay Zeka</button></a>
                            <a href="/kategori/diger"> <button class="category-button">Diğer</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
        </div>
    </div>

    <!-- Start Card Style -->
    <div class="rbt-blog-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">

            <div class="row row--15">

                <!-- Start Single Card  -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--50" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-02 height-330 rbt-hover">
                        @if ($blog->created_at > $mytime = Carbon\Carbon::yesterday()) <span class="rbt-badge-card" style="position: absolute; left:10px; top:10px;;"> Yeni🔥 @endif </span>
                        <div class="rbt-card-img">
                            <a href="/blog/{{$blog->slug}}">
                                <img src="{{Voyager::Image($blog->image)}}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h3 class="rbt-card-title"><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h3>
                            
                            <div class="author-info mb--10"> <img src="{{Voyager::Image($blog->user->avatar)}}" alt="{{$blog->user->name}} profil resmi" style="border-radius: 100px; width:40px; margin-right:10px;">  paylaşan <a href="/profil/{{$blog->user->name}}">{{$blog->user->name}} <img src="/assets/images/icons/verified.webp" alt="Onaylı Kullanıcı İşareti" style="width:20px;"></a>   </div>
                            <p class="rbt-card-text">{{$blog->excerpt}}</p>
                            <div class="rbt-card-bottom">
                                <b class="color-primary" style="font-size: 12pt;">⚡Ortalama {{ floor(count(preg_split('/\s+/u', strip_tags($blog->content)))/120) }} dakika </b>
                                <a class="transparent-button" href="/blog/{{$blog->slug}}">Devamını oku<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
                @endforeach
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--20" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">

                    <!-- Start Single Card  -->
                    @foreach ($blogs->sortByDesc('created_at')->slice(1,3) as $blog)
                    <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                        @if ($blog->created_at > $mytime = Carbon\Carbon::yesterday()) <span class="rbt-badge-card" style="position: absolute; left:10px; top:10px;;"> Yeni🔥 @endif </span>
                        <div class="rbt-card-img">
                            <a href="/blog/{{$blog->slug}}">
                                <img src="{{Voyager::Image($blog->image)}}" alt="Card image"> 
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h5>
                            <div class="author-info mb--10" style="font-size: 10pt"> <img src="{{Voyager::Image($blog->user->avatar)}}" alt="{{$blog->user->name}} profil resmi" style="border-radius: 100px; width:25px; margin-right:10px;">  paylaşan <a href="/profil/{{$blog->user->name}}">{{$blog->user->name}} <img src="/assets/images/icons/verified.webp" alt="Onaylı Kullanıcı İşareti" style="width:15px;"></a>   </div>
                            <b class="color-primary" style="font-size: 10pt; margin-left:-5px;">⚡Ortalama {{ floor(count(preg_split('/\s+/u', strip_tags($blog->content)))/120) }} dakika </b>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="/blog/{{$blog->slug}}"  >Devamını oku<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Card  -->

                </div>
            </div>

            <!-- Start Card Area -->
            <div class="row g-5 mt--15">

                @foreach ($blogs->sortByDesc('created_at')->slice(4) as $blog)

                <!-- Start Single Card  -->
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
                <!-- End Single Card  -->

                @endforeach

            </div>
            <div class="row">
                <div class="col-lg-12 mt--60">
                    <nav>
                        <ul class="rbt-pagination">
                            <!-- Previous Page Button -->
                            @if ($blogs->onFirstPage())
                                <li class="disabled"><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                            @else
                                <li><a href="{{ $blogs->previousPageUrl() }}" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                            @endif
            
                            <!-- Numbered Pages -->
                            @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                @if ($page == $blogs->currentPage())
                                    <li class="active"><a href="{{ $url }}">{{ $page }}</a></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
            
                            <!-- Next Page Button -->
                            @if ($blogs->hasMorePages())
                                <li><a href="{{ $blogs->nextPageUrl() }}" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                            @else
                                <li class="disabled"><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <!-- End Card Style -->

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

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
    <script src="/assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="/assets/js/vendor/jquery-ui.js"></script>
    <script src="/assets/js/vendor/magnify-popup.min.js"></script>
    <script src="/assets/js/vendor/paralax-scroll.js"></script>
    <script src="/assets/js/vendor/paralax.min.js"></script>
    <script src="/assets/js/vendor/countdown.js"></script>
    <script src="/assets/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>
</body>

</html>
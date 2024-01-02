<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Projeler - {{setting('site.title')}} </title>
    <meta name="robots" content="follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Light.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Medium.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-SemiBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>

<body class="rbt-header-sticky">

    @include('templates.header')

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--60 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Projelerimiz</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="/">Ana Sayfa</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Projelerimiz</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-advance-tab-area  bg-color-extra2">
        <div class="container">
            <div class="row mb--40">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-secondary-opacity">Projeler</span>
                        <h2 class="title">En Sevilen İşlerimiz</h2>
                          
                          <div class="main-wrapper">
                             <div class="section slideStyle is--black">
                                <div class="swiper swiperParallax is-gallery">
                                   <div role="list" class="swiper-wrapper is-gallery">
                                    @foreach ($projects as $proje)
                                      <div role="listitem" class="swiper-slide is-gallery">
                                         <div class="gallery-img__wrapper">
                                            <img data-swiper-parallax-x="25%" loading="lazy" alt="{{$proje->alt}}"
                                               src="{{Voyager::Image($proje->image)}}"
                                               class="gallery-img" />
                                         </div>
                                         <div class="gallery-info__wrapper">
                                            <div class="heading-medium">{{$proje->title}}</div>
                                         </div>
                                      </div>
                                    @endforeach
                                   </div>
                                </div>
                             </div>
                          </div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-10 offset-lg-1">
                    <div class="advance-tab-button">
                        <ul class="nav nav-tabs tab-button-style-2" id="myTab-4" role="tablist">
                            <li role="presentation">
                                <a href="#" class="tab-button" id="home-tab-4" data-bs-toggle="tab" data-bs-target="#home-4" role="tab" aria-controls="home" aria-selected="false">
                                    <span class="title">Tasarım</span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="tab-button active" id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#profile-4" role="tab" aria-controls="profile-4" aria-selected="true">
                                    <span class="title">Süreç</span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="tab-button" id="contact-tab-4" data-bs-toggle="tab" data-bs-target="#contact-4" role="tab" aria-controls="contact-4" aria-selected="false">
                                    <span class="title">Sonuç</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="tab-content advance-tab-content-style-2">
                        <div class="tab-pane fade" id="home-4" role="tabpanel" aria-labelledby="home-tab-4">
                            <div class="content">
                                <p>Hızlıca işinize uygun tasarım örnekleri çıkartıp size sunuyoruz. Seçiminiz üzerine tasarımı aklınızdaki gibi özelleştirip göze harika görünen sonuçlar çıkartıyoruz.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
                            <div class="content">
                                <p>Tasarımdan sonraki aşama ise işinde profesyonel Web Yazılımcılarımıza kalıyor. Web Yazılımcılarımız sizin web sitenizi mesleğinize veya projenize uygun bir şekilde kodlayıp modern SEO teknikleriyle besleyip harika bir internet sitesi çıkartıyor.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-4" role="tabpanel" aria-labelledby="contact-tab-4">
                            <div class="content">
                                <p>Sonuçta ise hayalinizdeki web sitesine kavuşuyorsunuz. Modern SEO teknikleriyle yapılan bu internet sitesi sayesinde arama motorlarında öne çıkıyor ve mükemmel sonuçlar alıyorsunuz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--40">
                @foreach ($projects->slice(1,1) as $proje)

                    
                <div class="col-lg-6">
                    <div class="rbt-category-gallery">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{Voyager::Image($proje->image)}}" alt="Gallery Images">
                            </a>
                            <div class="rbt-bg-overlay"></div>
                            <div class="hover-content">
                                <h3 class="title">{{$proje->title}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-lg-6">
                    <div class="row g-5">
                        @foreach ($projects->slice(0,1) as $proje)
                        <div class="col-lg-12">
                            <div class="rbt-category-gallery">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{Voyager::Image($proje->image)}}" alt="Gallery Images">
                                    </a>
                                    <div class="rbt-bg-overlay"></div>
                                    <div class="hover-content">
                                        <h3 class="title">{{$proje->title}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @foreach ($projects->slice(1,2) as $proje)

                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="rbt-category-gallery">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{Voyager::Image($proje->image)}}" alt="Gallery Images">
                                    </a>
                                    <div class="rbt-bg-overlay"></div>
                                    <div class="hover-content">
                                        <h3 class="title">{{$proje->title}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('templates.footer')

    <!-- JS
============================================ -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const gallerySlider = new Swiper(".swiper.is-gallery", {
        loop: true,
        slidesPerView: 2,
        centeredSlides: true,
        speed: 300,
        grabCursor: true,
        parallax: true
        });

        // Dark and Light Style
        const control = document.getElementById("direction-toggle");
        const wrapper = document.querySelector(".slideStyle");
        const footer = document.querySelector(".footer");

        control.addEventListener("click", () => {
        control.classList.toggle("darkStyle");
        wrapper.classList.toggle("darkStyle");
        footer.classList.toggle("darkStyle");
        });
    </script>
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
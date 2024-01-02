<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hakkımızda - {{setting('site.title')}} </title>
    <meta name="robots" content="follow"/>
    <meta name="description" content="Yeldan Tech, Türkiye'nin en kaliteli web ajanslarındandır. Gelişmiş SEO teknikleriyle piyasada bir numara hizmet sunar.">
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

    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-8 variation-02">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-10 offset-lg-1">
                    <div class="content">
                        <div class="inner text-center">
                            <div class="rbt-new-badge rbt-new-badge-one">
                                <span class="rbt-new-badge-icon">🏆</span> #1 Piyasada Lider 
                            </div>

                            <h1 class="title">Aradığınız Şey 
                                <span class="header-caption">
                                    <span class="cd-headline clip is-full-width">
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible theme-gradient">Güvenilir Bir İş</b>
                                            <b class="is-hidden theme-gradient">Kaliteli Bir Website</b>
                                            <b class="is-hidden theme-gradient">Başarılı Olmak</b>
                                        </span>
                                </span>
                                </span>
                                İse
                            </h1>
                            <p class="description has-medium-font-size mt--20">O zaman <b> kesinlikle doğru </b> bir seçim yapmak üzeresiniz! Tüm süreç boyunda 7/24 destek ile 
                                istediğiniz sonuca rahatlıkla ulaşmaya hazırsanız hemen bizimle <a href="/iletisim">iletişime geçin</a> ve yolculuğunuza başlayın.
                            </p>
                            <div class="slider-btn rbt-button-group justify-content-center">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="tel:{{setting('site.telefon')}}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Bizi Arayın</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                                <a class="rbt-btn hover-icon-reverse btn-white" href="/projelerimiz">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Projelerimiz</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    @include('templates.about-details')

    <!-- Start Accordion Area  -->
    <div class="rbt-accordion-area accordion-style-1 bg-color-extra2 rbt-section-gap">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1 mt_md--40 mt_sm--40">

                        <div class="rbt-accordion-style accordion">
                            @foreach ($pages as $sss)
                            @if ($sss->slug == 'sss-yazisi')
                                
                            <div class="section-title text-start">
                                <span class="subtitle bg-pink-opacity">{{$sss->excerpt}}</span>
                                <h2 class="title">{{$sss->title}}</h2>
                                <p class="description has-medium-font-size mt--20 mb--40">{!!$sss->body!!}</p>
                            </div>

                            @endif                                
                            @endforeach

                            <div class="rbt-accordion-style rbt-accordion-02 accordion">
                                <div class="accordion" id="accordionExampleb2">

                                    @foreach ($faqs as $sss)
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="headingTwo{{$sss->id}}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{$sss->id}}" aria-expanded="false" aria-controls="collapseTwo{{$sss->id}}">
                                                {{$sss->title}}
                                            </button>
                                        </h2>
                                        <div id="collapseTwo{{$sss->id}}" class="accordion-collapse collapse" aria-labelledby="headingTwo{{$sss->id}}" data-bs-parent="#accordionExampleb2">
                                            <div class="accordion-body card-body">
                                                {!!$sss->body!!}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($pages as $sss)
                    @if ($sss->slug == 'sss-yazisi')
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="thumbnail rbt-image-gallery-1 mb--80 text-end" id="faq-gallery">
                            @foreach (json_decode($sss->gallery) as $image)
                            <img class="rbt-radius" data-parallax='{"x": 0, "y": 30}' src="{{Voyager::Image($image)}}" alt="Education Images">
                            @endforeach
                        </div>
                    </div>
                    @endif                                
                    @endforeach

                </div>
            </div>
    </div>
    <!-- End Accordion Area  -->

    @include('templates.testimonial')

    @include('templates.cta2')

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


    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "FAQPage",
          "mainEntity": [
            @foreach ($faqs->slice(0,$faqs->count()-1) as $sss)
{
              "@type": "Question",
              "name": "{{$sss->title}}",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "{!!$sss->body!!}"
               }
            },
            @endforeach
@foreach ($faqs->slice($faqs->count()-1, $faqs->count()) as $sss)
{
              "@type": "Question",
              "name": "{{$sss->title}}",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "{!!$sss->body!!}"
              }
            }
@endforeach
          ]
        }
    </script>

    <script>


        const thumbnailWrapper = document.getElementById('thumbnail-wrapper')

        for (let i = 0; i < 3; i++) {
            thumbnailWrapper.children[i].classList.add(`image-${i+1}`);
            thumbnailWrapper.children[i].children[0].setAttribute('data-parallax',`{"x": 0, "y":${i+5*10}}`)
        }

        const faqGallery = document.getElementById('faq-gallery');

        for(let i = 0; i<2; i++){
            faqGallery.children[i].classList.add(`image-${i+1}`);
            faqGallery.children[i].setAttribute('data-parallax',`{"x": 0, "y":${i+5*10}}`) 
        }

    </script>
</body>

</html>
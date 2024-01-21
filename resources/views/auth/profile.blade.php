<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $user->name }} - Yeldan Tech</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
</head>

<body>

    @include('templates.header')

    <!-- Start Card Style -->
    <div class="rbt-dashboard-area rbt-section-overlayping-top pt--200 rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Dashboard Top  -->
                    <div class="rbt-dashboard-content-wrapper">
                        <div class="tutor-bg-photo bg_image height-350 profile-banner-image"
                            @if ($user->banner) style="background-image:url('{{ Voyager::Image($user->banner) }}')" @endif>
                        </div>
                        <!-- Start Tutor Information  -->
                        <div class="rbt-tutor-information pb--20 pt--20"
                            style="background: rgba(20, 20, 20, 0.5); backdrop-filter:blur(5px); width:auto; border-top-right-radius:5px; border-bottom-right-radius:5px; @if ($user->role_id == 1) background:rgba(0, 82, 82, 0.6); box-shadow:inset 0px 0px 20px 2px rgba(0, 255, 255, 0.253); border:2px solid #4EC4FE @endif ">
                            <div class="rbt-tutor-information-left">
                                <div class="thumbnail rbt-avatars size-lg">
                                    <img src="{{ Voyager::Image($user->avatar) }}" alt="Instructor">
                                </div>
                                <div class="tutor-content">
                                    <h5 class="title">{{ $user->name }}
                                        @if ($user->role_id == '1' || $user->role_id == '3')
                                            <img src="/assets/images/icons/verified.webp" alt=""
                                                title="Verified" style="width:20px;">
                                        @endif
                                    </h5>
                                    {{-- <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div> --}}
                                    <ul class="rbt-meta rbt-meta-white mt--5 mb--5">
                                        <li><i class="feather-book"></i>{{ $user->blogs->count() }} Blog</li>
                                        <li><i
                                                class="feather-clock"></i>{{ \Carbon\Carbon::parse($user->created_at)->locale('tr')->isoFormat('DD MMMM YYYY') }}
                                        </li>
                                    </ul>
                                    @if (Auth::check() && Auth::user()->name == $user->name)
                                        <a href="/profil-duzenle" class="custom-button-small">Düzenle ✏️</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Tutor Information  -->
                    </div>
                    <!-- End Dashboard Top  -->
                </div>
                <div class="col-lg-12 mt--30">

                    <div class="profile-content rbt-shadow-box">
                        <h4>Biyografi</h4>
                        <div class="row g-5">
                            <div class="col-lg-8">
                                <p class="mt--10 mb--20">{{ $user->biography }} @if (Auth::check() && !$user->biography && Auth::user()->name == $user->name)
                                        <a href="/profil-duzenle" class="custom-button-small">Biyografi Ekle ✏️</a>
                                    @endif
                                </p>
                                <ul class="social-icon social-default justify-content-start">

                                    @if ($user->facebook)
                                        <li>
                                            <a href="{{ Str::startsWith($user->facebook, ['http://', 'https://']) ? $user->facebook : 'https://' . $user->facebook }}"
                                                target="_blank">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($user->twitter)
                                        <li>
                                            <a href="{{ Str::startsWith($user->twitter, ['http://', 'https://']) ? $user->twitter : 'https://' . $user->twitter }}"
                                                target="_blank">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($user->instagram)
                                        <li>
                                            <a href="{{ Str::startsWith($user->instagram, ['http://', 'https://']) ? $user->instagram : 'https://' . $user->instagram }}"
                                                target="_blank">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($user->linkedin)
                                        <li>
                                            <a href="{{ Str::startsWith($user->linkedin, ['http://', 'https://']) ? $user->linkedin : 'https://' . $user->linkedin }}"
                                                target="_blank">
                                                <i class="feather-linkedin"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($user->website)
                                        <li>
                                            <a href="{{ Str::startsWith($user->website, ['http://', 'https://']) ? $user->website : 'https://' . $user->website }}"
                                                target="_blank" rel="nofollow">
                                                <i class="feather-globe"></i>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            @if ($user->role_id == 3 || $user->role_id == 1)
                                <div class="col-lg-4">
                                    <div class="feature-sin best-seller-badge text-end h-100">
                                        <span class="rbt-badge-2 w-100 text-center badge-full-height">
                                            <span class="image"><img src="/assets/images/icons/card-icon-1.png"
                                                    alt="Best Seller Icon"></span> Yeldan Tech tarafından onaylandı
                                        </span>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @if ($user->role_id == 3 || $user->role_id == 1)

                <!-- Start Card Area -->
                <div class="rbt-profile-course-area">
                    <div class="row g-5 mt--5">
                        <h2 class="rbt-title-style-3 mb-0 ml--25" id='bloglarim'> Bloglar </h2>

                        <!-- Start Single Card  -->
                        @foreach ($blogsPaginate->sortByDesc('created_at') as $blog)
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="200" data-sal="slide-up"
                                data-sal-duration="800">
                                <div class="rbt-card variation-01 rbt-hover">
                                @if ($blog->created_at > $mytime = Carbon\Carbon::yesterday()) <span class="rbt-badge-card" style="position: absolute; left:35px; top:35px;;"> Yeni🔥 @endif </span>
                                    <div class="rbt-card-img">
                                        <a href="/blog/{{ $blog->slug }}">
                                            <img src="{{ Voyager::Image($blog->image) }}"
                                                alt="{{ $blog->title }} Bloğu Görseli">
                                        </a>
                                    </div>
                                    <div class="rbt-card-body">
                                        <div class="rbt-card-top">
                                            {{-- <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> {{$blog->views}} kişi beğendi</span>
                                                </div> --}}

                                        </div>
                                        <h4 class="rbt-card-title"><a
                                                href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
                                        </h4>

                                        <p class="rbt-card-text">{{ $blog->excerpt }}</p>
                                        <div class="rbt-card-bottom">
                                            <div class="rbt-review">
                                                <div class="rating">
                                                    <i class="feather-eye"></i>
                                                </div>
                                                <span class="rating-count"> {{ $blog->views }} kişi okudu</span>
                                            </div>

                                            <a class="rbt-btn-link left-icon" href="/blog/{{ $blog->slug }}">
                                                <i class="feather-book-open"></i>
                                                Tamamını Oku
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Card  -->
                        @endforeach

                    </div>
                </div>
                <!-- End Card Area -->

                <div class="row">
                    <div class="col-lg-12 mt--60">
                        <nav>
                            <ul class="rbt-pagination">
                                @if ($blogsPaginate->onFirstPage())
                                    <li class="disabled"><a href="#" aria-label="Previous"><i
                                                class="feather-chevron-left"></i></a></li>
                                @else
                                    <li><a href="{{ $blogsPaginate->previousPageUrl() }}" aria-label="Previous"><i
                                                class="feather-chevron-left"></i></a></li>
                                @endif

                                <!-- Numbered Pages -->
                                @foreach ($blogsPaginate->getUrlRange(1, $blogsPaginate->lastPage()) as $page => $url)
                                    @if ($page == $blogsPaginate->currentPage())
                                        <li class="active"><a href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @else
                                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach

                                <!-- Next Page Button -->
                                @if ($blogsPaginate->hasMorePages())
                                    <li><a href="{{ $blogsPaginate->nextPageUrl() }}" aria-label="Next"><i
                                                class="feather-chevron-right"></i></a></li>
                                @else
                                    <li class="disabled"><a href="#" aria-label="Next"><i
                                                class="feather-chevron-right"></i></a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>


            @endif

        </div>
    </div>
    <!-- End Card Style -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    @include('templates.footer')
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

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

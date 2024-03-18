    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-10">
        <!-- Start Header Top  -->
        <div class="rbt-header-top rbt-header-top-1 header-space-betwween bg-not-transparent bg-color-darker top-expended-activation">
            <div class="container-fluid">
                <div class="top-expended-wrapper">
                    <div class="top-expended-inner rbt-header-sec align-items-center ">
                        <div class="rbt-header-sec-col rbt-header-left d-none d-xl-block">
                            <div class="rbt-header-content">
                                <!-- Start Header Information List  -->
                                <div class="header-info">
                                    <ul class="rbt-information-list">
                                        <li>
                                            <a href="{{setting('site.instagram')}}" target="_blank" target="_blank"><i class="fab fa-instagram"></i> <span class="d-none d-xxl-block">Bizi Takip Edin</span></a>
                                        </li>
                                        <li>
                                            <a href="{{setting('site.facebook')}}" target="_blank"><i class="fab fa-facebook-square"></i> <span class="d-none d-xxl-block">Bizi Takip Edin</span></a>
                                        </li>
                                        <li>
                                            <a href="tel:{{setting('site.telefon')}}"><i class="feather-phone"></i>{{setting('site.telefon')}}</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Header Information List  -->
                            </div>
                        </div>
                        <div class="rbt-header-sec-col rbt-header-center">
                            <div class="rbt-header-content justify-content-start justify-content-xl-center">
                                <div class="header-info">
                                    <div class="rbt-header-top-news">
                                        <div class="inner">
                                            <div class="content">
                                                <span class="rbt-badge variation-02 bg-color-primary color-white radius-round">Kampanya</span>
                                                <span class="news-text">Referansla getirdiğiniz her kişi için <strong>500TL</strong> geri ödeme!</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rbt-header-sec-col rbt-header-right mt_md--10 mt_sm--10">
                            <div class="rbt-header-content justify-content-start justify-content-lg-end">
                                <div class="header-info d-none d-xl-block">
                                    <ul class="social-share-transparent">
                                        <li>
                                            <a href="{{setting('site.facebook')}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{setting('site.twitter')}}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{setting('site.linkedin')}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{setting('site.instagram')}}" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- <div class="rbt-separator d-none d-xl-block"></div>

                                <div class="header-info">
                                    <ul class="rbt-dropdown-menu switcher-language">
                                        <li class="has-child-menu">
                                            <a href="#">
                                                <img class="left-image" src="/assets/images/icons/en-us.png" alt="Language Images">
                                                <span class="menu-item">English</span>
                                                <i class="right-icon feather-chevron-down"></i>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image" src="/assets/images/icons/fr.png" alt="Language Images">
                                                        <span class="menu-item">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image" src="/assets/images/icons/de.png" alt="Language Images">
                                                        <span class="menu-item">Deutsch</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div> -->

      
                            </div>
                        </div>
                    </div>
                    <div class="header-info">
                        <div class="top-bar-expended d-block d-lg-none">
                            <button class="topbar-expend-button rbt-round-btn"><i class="feather-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top  -->
        <div class="rbt-header-wrapper header-space-betwween header-sticky">
            <div class="container-fluid">
                <div class="mainbar-row rbt-navigation-center align-items-center">
                    <div class="header-left rbt-header-content">
                        <div class="header-info">
                            <div class="logo">
                                <a href="/">
                                    <img src="/assets/images/logo/logo.png" alt="Yeldan Tech Logo">
                                </a>
                            </div>
                        </div>
                        <div class="header-info">
                            <div class="rbt-category-menu-wrapper">
                                <div class="rbt-category-btn rbt-side-offcanvas-activation">
                                    <span class="category-text d-none d-xl-block p-0">⚡ Hızlı Menü</span>
                                </div>

                                <div class="category-dropdown-menu d-none d-xl-block">
                                    <div class="category-menu-item">
                                        <div class="rbt-vertical-nav">
                                            <ul class="rbt-vertical-nav-list-wrapper vertical-nav-menu">
                                                <li class="vertical-nav-item active">
                                                    <a href="#tab1"><span class="emoji">🎨</span> Son Projelerimiz</a>
                                                </li>
                                                <li class="vertical-nav-item">
                                                    <a href="#tab2"> <span class="emoji">📰</span>Popüler Bloglar</a>
                                                </li>
                                                {{-- <li class="vertical-nav-item">
                                                    <a href="#tab3"> <span class="emoji">❓</span>Popüler Testler</a>
                                                </li> --}}
                                                <li class="vertical-nav-item">
                                                    <a href="/iletisim"> <span class="emoji">📞</span>Hemen İletişim</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rbt-vertical-nav-content">
                                            <!-- Start One Item  -->
                                            <div class="rbt-vertical-inner tab-content" id="tab1" style="display: block">
                                                <div class="rbt-vertical-single">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm12 col-12">
                                                            <div class="vartical-nav-content-menu">
                                                                <h3 class="rbt-short-title">Projeler</h3>
                                                                <ul class="rbt-vertical-nav-list-wrapper">
                                                                    @foreach ($projects as $proje)

                                                                    <li><a href="/projelerimiz">{{ $proje->title }}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End One Item  -->

                                            <!-- Start One Item  -->
                                            <div class="rbt-vertical-inner tab-content" id="tab2">
                                                <div class="rbt-vertical-single">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="vartical-nav-content-menu">   
                                                                <h3 class="rbt-short-title">Bloglar</h3>
                                                                <ul class="rbt-vertical-nav-list-wrapper">
                                                                    @foreach ($blogs->sortByDesc('views')->slice(0, 4) as $blogNav)
                                                                        <li><a href="/blog/{{$blogNav->slug}}">{{$blogNav->title}}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End One Item  -->

                                            {{-- <!-- Start One Item  -->
                                            <div class="rbt-vertical-inner tab-content" id="tab3">
                                                <div class="rbt-vertical-single">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="vartical-nav-content-menu">
                                                                <h3 class="rbt-short-title">Testler</h3>
                                                                <ul class="rbt-vertical-nav-list-wrapper">
                                                                    <li><a href="#">Yazılım</a></li>
                                                                    <li><a href="#">SEO</a></li>
                                                                    <li><a href="#">Diğer</a></li>
                                                                </ul>
                                                                <div class="read-more-btn">
                                                                    <a class="rbt-btn-link" href="/testler">Tüm Testler<i
                                                                    class="feather-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End One Item  --> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rbt-main-navigation d-none d-xl-block">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li>
                                    <a href="/">Ana Sayfa </a>
                                </li>

                                <li>
                                    <a href="/hakkimizda">Hakkımızda</a>
                                </li>

                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="/projelerimiz">Projelerimiz
                                        <i class="feather-chevron-down"></i>
                                    </a>
                                    <!-- Start Mega Menu  -->
                                    <div class="rbt-megamenu menu-skin-dark">
                                        <div class="wrapper">
                                            <div class="row row--15 home-plesentation-wrapper single-dropdown-menu-presentation">
                                                @foreach ($projects as $proje)
                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="/projelerimiz"><img src="{{Voyager::Image($proje->image)}}" alt="{{$proje->alt}}"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="/projelerimiz">{{$proje->title}} <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->
                                                @endforeach

                                            <div class="load-demo-btn text-center">
                                                <a class="rbt-btn-link color-white" href="#">Scroll to view more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu  -->
                                </li>

                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="/blog">Blog <i class="feather-chevron-down"></i></a>
                                    <!-- Start Mega Menu  -->
                                    <div class="rbt-megamenu grid-item-3">
                                        <div class="wrapper">
                                            <div class="row row--15">
                                                <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                                    <h3 class="rbt-short-title">Son Bloglar 📰</h3>
                                                    <ul class="mega-menu-item">
                                                        @foreach ($blogs->sortByDesc('created_at')->slice(0, 5) as $blogNav)
                                                            <li><a href="/blog/{{$blogNav->slug}}">{{$blogNav->title}}  @if ($blogNav->created_at > $mytime = Carbon\Carbon::yesterday()) <span class="rbt-badge-card"> Yeni🔥 @endif </span> </a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                                <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                                    <h3 class="rbt-short-title">Popüler Bloglar ❤️‍🔥 </h3>
                                                    <ul class="mega-menu-item">
                                                        @foreach ($blogs->sortByDesc('views')->slice(0, 5) as $blogNav)
                                                            <li><a href="/blog/{{$blogNav->slug}}">{{$blogNav->title}}  @if ($blogNav->created_at > $mytime = Carbon\Carbon::yesterday()) <span class="rbt-badge-card"> Yeni🔥 @endif </span> </a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                                <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                                    <div class="rbt-ads-wrapper">
                                                        <a class="d-block" href="/blog"><img src="/assets/images/blog/blog-banner.webp" alt="Yeldan Tech Blog"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu  -->
                                </li>

                                <li>
                                    <a href="/kategori/hizmet-bolgesi">Hizmet Bölgelerimiz</a>
                                </li>
                                <li>
                                    <a href="/iletisim">İletişim </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="header-right">

                        <!-- Navbar Icons -->
                        <ul class="quick-access">
                            <li class="access-icon">
                                <a class="search-trigger-active rbt-round-btn" href="#">
                                    <i class="feather-search"></i>
                                </a>
                            </li>
                        </ul>

                        @if(Auth::check())

                        <li class="account-icon rbt-user-wrapper d-none d-xl-block pl--10" style="border-left: 1px solid rgb(225, 225, 225)">
                            <a href="/profil/{{Auth::user()->name}}">
                                <i class="feather-user mr--10"></i>
                                {{ Auth::user()->name }} 
                                @if(Auth::user()->role_id == '1' || Auth::user()->role_id == '3')
                                    <img src="/assets/images/icons/verified.webp" alt="" style="width:20px;">
                                @endif
                            </a>

                            <div class="rbt-user-menu-list-wrapper">
                                <div class="inner">
                                    <div class="rbt-admin-profile">
                                        <div class="admin-thumbnail">
                                            <img src="{{Voyager::Image(Auth::user()->avatar)}}" alt="User Images">
                                        </div>
                                        
                                        <div class="admin-info">
                                            <span class="name">{{Auth::user()->name}}</span>
                                            <a class="rbt-btn-link color-primary" href="/profil/{{Auth::user()->name}}">Profilini Ziyaret Et</a>
                                        </div>
                                    </div>
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="/profil/{{Auth::user()->name}}">
                                                <i class="feather-user"></i>
                                                <span>Profilim</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/profil/{{Auth::user()->name}}#bloglarim">
                                                <i class="feather-list"></i>
                                                <span>Bloglarım</span>
                                            </a>
                                        </li>
                                        @if (Auth::user()->name == 'admin')
                                        <li>
                                            <a href="/admin">
                                                <i class="feather-airplay"></i>
                                                <span>Admin Paneli</span>
                                            </a>
                                        </li>
                                        @endif

                                    </ul>

                                    <hr class="mt--10 mb--10">
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="/profil-duzenle">
                                                <i class="feather-settings"></i>
                                                <span>Ayarlar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="feather-log-out"></i>
                                                    <span>Çıkış Yap</span>
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        @if(Auth::user()->role_id == '1' || Auth::user()->role_id == '3')
                            <li class="account-icon rbt-user-wrapper d-none d-xl-block">
                                <a href="/blog-ekle" class="ml--20 custom-add-blog"> <i class="feather-plus"></i> Blog Ekle </a>
                            </li>
                        @endif

                        {{-- MOBILE ACCOUNT --}}

                        <li class="access-icon account-access rbt-user-wrapper d-block d-xl-none">
                            <a class="rbt-round-btn" href="#"><i class="feather-user"></i></a>
                            <div class="rbt-user-menu-list-wrapper">
                                <div class="inner">
                                    <div class="rbt-admin-profile">
                                        <div class="admin-thumbnail">
                                            <img src="{{Voyager::Image(Auth::user()->avatar)}}" alt="User Images">
                                        </div>
                                        <div class="admin-info">
                                            <span class="name">                            
                                                <a href="/profil/{{Auth::user()->name}}">
                                                    {{ Auth::user()->name }} 
                                                    @if(Auth::user()->role_id == '1' || Auth::user()->role_id == '3')
                                                        <img src="/assets/images/icons/verified.webp" alt="" style="width:20px;">
                                                    @endif
                                                </a>
                                            </span>
                                            <a class="rbt-btn-link color-primary" href="/profil/{{Auth::user()->name}}">Profili Görüntüle</a>
                                        </div>
                                    </div>
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="/profil/{{Auth::user()->name}}">
                                                <i class="feather-user"></i>
                                                <span>Profilim</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/profil/{{Auth::user()->name}}#bloglarim">
                                                <i class="feather-list"></i>
                                                <span>Bloglarım</span>
                                            </a>
                                        </li>
                                        @if (Auth::user()->name == 'admin')
                                        <li>
                                            <a href="/admin">
                                                <i class="feather-airplay"></i>
                                                <span>Admin Paneli</span>
                                            </a>
                                        </li>
                                        @endif

                                    </ul>
                                    <hr class="mt--10 mb--10">
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="/profil-duzenle">
                                                <i class="feather-settings"></i>
                                                <span>Ayarlar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="feather-log-out"></i>
                                                    <span>Çıkış Yap</span>
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if (!Auth::check())
                            
                        <a class="rbt-btn btn-sm btn-border rbt-switch-btn  mr--20" href="/login">
                            <span data-text="Giriş Yap">Giriş Yap</span>
                        </a>

                        <a class="rbt-btn btn-sm btn-gradient rbt-switch-btn rbt-switch-x mr--20" href="/register">
                            <span data-text="Kayıt Ol">Kayıt Ol</span>
                        </a>

                        @endif
                        

                        
                        

                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button rbt-round-btn">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->

                    </div>
                </div>
            </div>
            <!-- Start Search Dropdown  -->
            <div class="rbt-search-dropdown">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-lg-12">

                            <form action="{{route('search')}}" method="GET">  
                                <input type="text" name="ara" id="sonuc" placeholder="Ne Araştırmak İstiyorsun?">
                                <div class="submit-btn">
                                    <button type="submit" class="rbt-btn btn-gradient btn-md">Ara</button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="rbt-separator-mid">
                        <hr class="rbt-separator m-0">
                    </div>

                    <div class="row g-4 pt--30 pb--60">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h5 class="rbt-title-style-2">Bunları Araştırmak İstiyor Olabilirsin</h5>
                            </div>
                        </div>

                        @foreach ($blogs->sortbyDesc('created_at')->slice(0,4) as $bloglar)
                        <!-- Start Single Card  -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="/blog/{{$bloglar->slug}}">
                                        <img src="{{Voyager::Image($bloglar->image)}}" alt="Yeldan Tech Blog">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="/blog/{{$bloglar->slug}}">{{$bloglar->title}}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                        @endforeach

                    </div>
                    

                </div>
            </div>
            <!-- End Search Dropdown  -->
        </div>

        <a class="rbt-close_side_menu" href="javascript:void(0);"></a>
    </header>
    
    <!-- Mobile Menu Section -->
    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <a href="/">
                            <img src="/assets/images/logo/logo.png" alt="Yeldan Tech Logo">
                        </a>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                <p class="description">Yeldan Tech, yeni teknolojileriyle müşterilerine harika SEO hizmetleri vermeyi hedefler.</p>
                <ul class="navbar-top-left rbt-information-list justify-content-start">
                    <li>
                        <a href="mailto:{{setting('site.eposta')}}"><i class="feather-mail"></i>{{setting('site.eposta')}}</a>
                    </li>
                    <li>
                        <a href="tel:{{setting('site.telefon')}}"><i class="feather-phone"></i>{{setting('site.telefon')}}  </a>
                    </li>
                </ul>
            </div>

            <nav class="mainmenu-nav">
                <ul class="mainmenu">
                    <li>
                        <a href="/">Ana Sayfa</a>
                    </li>

                    <li>
                        <a href="/hakkimizda">Hakkımızda</a>
                    </li>

                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="/projelerimiz">Projelerimiz <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-4">
                            <div class="wrapper">
                                <div class="row row--15">
                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            @foreach ($projects as $proje)
                                            <li><a href="/projelerimiz">{{ $proje->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="/blog">Blog <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-4">
                            <div class="wrapper">
                                <div class="row row--15">
                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            @foreach ($blogs->reject(function($blog) { return $blog->category == 'hizmet-bolgesi'; })->sortByDesc('created_at')->slice(0, 5) as $bloglar)

                                            <li class="mb--10"><a href="/blog/{{$bloglar->slug}}" class="d-flex" style="justify-content: space-between">{{$bloglar->title}}  @if ($bloglar->created_at > $mytime = Carbon\Carbon::yesterday()) <span class="rbt-badge-card"> Yeni🔥 @endif </span> </a></li>
                                            @endforeach
                                            <li class="mb--10"><a href="/blog" class="d-flex"> Tüm Bloglarımız </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li>
                        <a href="/kategori/hizmet-bolgesi">Hizmet Bölgelerimiz</a>
                    </li>

                    <li>
                        <a href="/iletisim">İletişim</a>
                    </li>
                </ul>
            </nav>

            <div class="mobile-menu-bottom">
                <div class="rbt-btn-wrapper mb--20">
                    <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center" href="tel:{{setting('site.telefon')}}">
                        <span>Bizi Arayın</span>
                    </a>
                </div>

                <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">Sosyal Medyalarımız</span>
                    <ul class="social-icon social-default transparent-with-border justify-content-start">
                        <li><a href="{{setting('site.facebook')}}" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li><a href="{{setting('site.twitter')}}" target="_blank">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                        </li>
                        <li><a href="{{setting('site.instagram')}}" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li><a href="{{setting('site.linkedin')}}" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

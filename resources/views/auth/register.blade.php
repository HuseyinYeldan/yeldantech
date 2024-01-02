<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kayıt Ol - Yeldan Tech</title>
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

    @include('templates.header')


    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--50 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Kayıt Ol</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="/">Ana Sayfa</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Kayıt Ol</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-elements-area bg-color-white ">
        <div class="container">
            <div class="row gy-5 row--30 d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h3 class="title">Kayıt Ol</h3>

                        <form class="max-width-auto" method="POST" action="/register">
                            @csrf
                            <div class="form-group">
                                <input name="email" type="text" required/>
                                <label>E-Posta *</label>
                                <span class="focus-border"></span>
                                @error('email')
                                <div class="bg-color-danger-opacity color-danger" style="padding-block: 2px; padding-inline:5px;">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <input name="name" type="text" required />
                                <label>Kullanıcı Adı *</label>

                                @error('name')
                                    <div class="bg-color-danger-opacity color-danger" style="padding-block: 2px; padding-inline:5px;">{{ $message }}</div>
                                @enderror
                                <p style="font-size: 10pt;">🛈 Kullanıcı adı küçük harflerle olmalı ve özel karakterler olmamalı.</p>

                            </div>
                        
                            <div class="form-group">
                                <input name="password" type="password" required/>
                                <label>Şifre *</label>
                                <span class="focus-border"></span>
                                @error('password')
                                <div class="bg-color-danger-opacity color-danger" style="padding-block: 2px; padding-inline:5px;">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <input name="password_confirmation" type="password" required/>
                                <label>Şifre Tekrar *</label>
                                <span class="focus-border"></span>
                                @error('password_confirmation')
                                <div class="bg-color-danger-opacity color-danger" style="padding-block: 2px; padding-inline:5px;">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Kayıt Ol</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                            <p class="ptb--20">Zaten hesabın var mı? <a href="/login">Giriş Yap</a> </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
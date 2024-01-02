<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Instructor Settings - Online Courses & Education Bootstrap5 Template</title>
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

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image" style="background-image:url({{Voyager::Image(Auth::user()->banner)}}) !important; background-position:center!important; background-size:cover !important;"></div>
        <!-- End Banner BG Image  -->
    </div>

    <!-- Start Card Style -->
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-overlay-edit rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row g-5 d-flex justify-content-center align-items-center">
                        <div class="col-lg-9">
                            <!-- Start Instructor Profile  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">
                                    <p style="font-size:12pt; color:var(--color-danger)" class="mb--10">         
                                        @error('current_password')
                                        {{ $message }} <br>
                                        @enderror

                                        @error('new_password')
                                        {{ $message }} <br>
                                        @enderror
                                    </p>

                                    <div class="advance-tab-button mb--30">
                                        <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">

                                            <li role="presentation">
                                                <a href="#" class="tab-button active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                                    <span class="title">Profile</span>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#" class="tab-button" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" role="tab" aria-controls="password" aria-selected="false">
                                                    <span class="title">Password</span>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#" class="tab-button" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" role="tab" aria-controls="social" aria-selected="false">
                                                    <span class="title">Linkler</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data" class="rbt-profile-row rbt-default-form row row--15">
                                        @csrf
                                        @method('POST')

                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="rbt-dashboard-content-wrapper">
                                                    <div class="profile-banner-image height-245" @if($user->banner) style="background-image:url('{{Voyager::Image(Auth::user()->banner)}}')"  @endif></div>
                                                    <!-- Start Tutor Information  -->
                                                    <div class="rbt-tutor-information">
                                                        <div class="rbt-tutor-information-left">
                                                            <div class="thumbnail rbt-avatars size-lg position-relative">
                                                                <img src="{{Voyager::Image(Auth::user()->avatar)}}" alt="Instructor">
                                                                <div class="rbt-edit-photo-inner">
                                                                    <button class="rbt-edit-photo" title="Upload Photo">
                                                                        <i class="feather-camera"></i>
                                                                        <input type="file" name="avatar" id="avatar-input" onchange="handleFileSelection()" style="position: absolute; left:0; top:0px; opacity:0; cursor:pointer;">
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="rbt-tutor-information-right" >
                                                            <div class="tutor-btn" >
                                                                <a class="rbt-btn btn-sm btn-border color-white radius-round-10">
                                                                    Edit Cover Photo 
                                                                    <input type="file" name="banner" id="banner-input" onchange="handleFileSelection()" style="position: absolute; right:0; top:0; opacity:0; cursor:pointer;">
                                                                    <p style="font-size:10pt; color:var(--color-danger)" class="mb--10">{{ $errors->first('banner') }}</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Tutor Information  -->
                                                </div>
                                                <!-- Start Profile Row  -->
                                                @if(session('success'))
                                                    <div class="alert alert-success">
                                                        {{ session('success') }}
                                                    </div>
                                                @endif
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-12">
                                                        <div class="rbt-form-group">
                                                            <label for="name">Kullanıcı Adı </label>
                                                            <input id="name" name="name"
                                                            @if(\Carbon\Carbon::now()->diffInDays(Auth::user()->last_username_change) >= 30)
                                                            {{-- Enable username change --}}
                                                            @else
                                                                disabled
                                                                title="Kullanıcı adını sadece ayda bir değiştirebilirsin. {{$remainingDays = 30 - \Carbon\Carbon::now()->diffInDays(Auth::user()->last_username_change); }} gün kaldı."
                                                            @endif
                                                        
                                                            type="text" value="{{Auth::user()->name}}">
                                                            <p style="font-size:10pt; color:var(--color-warning);" class="mb--10">⚠️ Kullanıcı adını sadece ayda bir değiştirebilirsin.</p>
                                                            <p style="font-size:10pt; color:var(--color-danger)" class="mb--10">{{ $errors->first('name') }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="rbt-form-group">
                                                            <label for="bio">Bio</label>
                                                            <textarea id="bio" name="biography" cols="20" rows="5">{{ old('biography', Auth::user()->biography) }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt--20">
                                                        <div class="rbt-form-group">
                                                            <button class="rbt-btn btn-gradient" id="submit-button"  type="submit" >Güncelle</button>
                                                        </div>
                                                    </div>
                                                <!-- End Profile Row  -->
                                            </div>
                                    </form>

                                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                            <!-- Start Profile Row  -->

                                            <form method="POST" action="{{ route('update-password') }}" class="rbt-profile-row rbt-default-form row row--15">
                                                @csrf
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="current_password">Mevcut Şifre</label>
                                                        <input id="current_password" name="current_password" type="password" placeholder="Mevcut Şifre">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="new_password">Yeni Şifre</label>
                                                        <input id="new_password" name="new_password" type="password" placeholder="Yeni Şifre">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="new_password_confirmation">Yeni Şfire Tekrar</label>
                                                        <input id="new_password_confirmation" name="new_password_confirmation" type="password" placeholder="Yeni Şifre Tekrar">
                                                    </div>
                                                </div>
                                                <div class="col-12 mt--10">
                                                    <div class="rbt-form-group">
                                                        <button class="rbt-btn btn-gradient" type="submit">Şifreyi Güncelle</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- End Profile Row  -->
                                        </div>

                                        <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                            <!-- Start Profile Row  -->
                                            <form action="{{ route('profile.linkUpdate') }}" method="POST" class="rbt-profile-row rbt-default-form row row--15">
                                                @csrf
                                                @method('POST')
                                                
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="facebook"><i class="feather-facebook"></i> Facebook</label>
                                                        <input id="facebook" name="facebook" type="text" value="{{Auth::user()->facebook}}" placeholder="https://facebook.com/yeldantech">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="instagram"><i class="feather-instagram"></i> Instagram</label>
                                                        <input id="instagram" name="instagram" value="{{Auth::user()->instagram}}" type="text" placeholder="https://instagram.com/yeldantech">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="twitter"><i class="feather-twitter"></i> Twitter</label>
                                                        <input id="twitter" name="twitter" value="{{Auth::user()->twitter}}" type="text" placeholder="https://twitter.com/yeldantech">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="linkedin"><i class="feather-linkedin"></i> Linkedin</label>
                                                        <input id="linkedin" name="linkedin" value="{{Auth::user()->linkedin}}" type="text" placeholder="https://linkedin.com/in/yeldantech">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="website"><i class="feather-globe"></i> Website</label>
                                                        <input id="website" name="website" value="{{Auth::user()->website}}" type="text" placeholder="https://www.example.com/">
                                                    </div>
                                                </div>
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">

                                                            @foreach ($errors->all() as $error)
                                                                <p>{{ $error }}</p>
                                                            @endforeach

                                                    </div>
                                                @endif
                                                <div class="col-12 mt--10">
                                                    <div class="rbt-form-group">
                                                        <button class="rbt-btn btn-gradient" type="submit">Güncelle</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- End Profile Row  -->
                                        </div>

                                    </div>





                                </div>
                            </div>
                            <!-- End Instructor Profile  -->

                        </div>
                    </div>

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

<script>
    var avatarInput = document.getElementById('avatar-input');
    var bannerInput = document.getElementById('banner-input');
    var submitButton = document.getElementById('submit-button');
    var timeoutId;

    function handleFileSelection() {
        if (avatarInput.files.length > 0 || bannerInput.files.length > 0) {
            clearTimeout(timeoutId); // Clear any previous timeouts
            submitButton.disabled = true; // Disable the submit button

            // Set a timeout to enable the submit button after 3 seconds
            timeoutId = setTimeout(function () {
                submitButton.disabled = false;
            }, 3000); // 3 seconds (adjust as needed)
        }
    }
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
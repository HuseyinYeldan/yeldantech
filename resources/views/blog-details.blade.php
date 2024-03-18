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
    <title>{{ $blog->title }} - {{ setting('site.title') }} </title>
    <meta name="description" content="{{ $blog->excerpt }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="{{ $blog->title }}">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Turkish">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">
    <link rel="preload" href="/assets/js/toc.js" as="script" />
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Bold.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Light.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Medium.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Regular.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-SemiBold.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">

    @if (Auth::check() && Auth::user()->role_id == 1)
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins.pkgd.min.css"
            integrity="sha512-XwCeQEt8/jJY7NJ52u1V7T2q+6jjMSmok3KFENpt9oxAkgDGgBiQu5t9UeSzoz96lD3AlopD0IAi1s9CSDm7Pg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/froala_editor.min.css"
            integrity="sha512-S+WwSA86TK605zB4r47+0aSE9nFiaM2W5UXmESo71W0ac8juYCRS7wQyn3wiCrEYbmfYkkUGCSKfDENgQdYHmQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins/char_counter.min.css"
            integrity="sha512-stdwLLupHh/SUnX7Kc1+WRdSGoARaEbl/XpLrdYdMJ7X1SIjGUU9mjg51gqJFWiB+N+M3Ud8bVqT1ZunLEybMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/third_party/image_tui.min.css"
            integrity="sha512-xnPeQ/lUBY7RPJ080OeCS4FAUT6jokd10GNS4zrh2PVQ54EqB1M+lfVRlkCfcUutIJFU6Wk8kDY45zLtOOqy6Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins/image_manager.min.css"
            integrity="sha512-l4zfUfFjTgHkjcqAxIsZWcbyDKJqZQfJom0jEbOeiAjWM/33Ll7nJzpVlrBjGulHy5JC0xnCPiQOdeUZBVSDCg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins/image.min.css"
            integrity="sha512-r6OPm8VyOBMkvzm9JrnOakshxzXKxt00oPZ+jDdL+SozXi2zVEvZJzvS6/EQjxIV3jpVbQ0eOSPhsd5rdH0Cxg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/themes/dark.min.css"
            integrity="sha512-rImHRGRHBB1aXdu3tA9ry9Kc2mRVBkZ9uRe4F+hoEaj9sYgVGfPhtu5/j86V9pieSwb3F2F4121j05TwMVS9UA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins/emoticons.min.css"
            integrity="sha512-wc3fTBj7DFRomYBw0ggfyZJJPOTEvDZ94TvYz4o/7GrjUqOnwoalU8dJzx5pYTsT5wBKsCBDFkgxaD94KTfTNg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins/file.min.css"
            integrity="sha512-WemGw24rXNLuG0CmDKOxsImsWkRDpUhwaU0hhoE4WKx2Yd1cb0vUlOR6r88yEgg9EY4qWKxMowhu9k2da1QiDg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins/files_manager.min.css"
            integrity="sha512-2k8BWYsUUVKZjVLdUtRXfgLqUxJ57KccF/izPWwqSUX1UPApTwy9SQPI26xNihhiI1R3QapdVYum6Z5T7duM9w=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endif

    {{-- OG TAGS --}}

    <meta property="og:title" content="{{ $blog->title }}">
    <meta property="og:site_name" content="{{ setting('site.title') }}">
    <meta property="og:url" content="yeldantech.com">
    <meta property="og:description" content="{{ $blog->excerpt }}">
    <meta property="og:type" content="Article">
    <meta property="og:image" content="{{ Voyager::Image($blog->image) }}">

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
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/plyr.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="canonical" href="https://yeldantech.com/blog/{{ $blog->slug }}">
    <style>
        #isPasted {
            padding: 10px;
        }
    </style>
</head>

<body class="rbt-header-sticky">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVLKZ553"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('templates.header')

    <div class="rbt-overlay-page-wrapper">
        <div class="breadcrumb-image-container breadcrumb-style-max-width">
            <div class="breadcrumb-image-wrapper">
                <img src="/assets/images/bg/bg-image-10.jpg" alt="Blog Arkaplanı">
            </div>
            <div class="breadcrumb-content-top text-center">
                <ul class="meta-list justify-content-center mb--10">
                    <li class="list-item">
                        <div class="author-thumbnail">
                            <img src="{{ Voyager::Image($blog->user->avatar) }}"
                                alt="{{ $blog->user->name }} kullanıcısının profil resmi">
                        </div>
                        <div class="author-info">
                            paylaşan <a
                                href="/profil/{{ $blog->user->name }}"><strong>{{ $blog->user->name }}</strong></a>
                            <img src="/assets/images/icons/verified.webp" alt="Onaylı Kullanıcı İşareti"
                                style="width:20px;">
                        </div>
                    </li>
                    <li class="list-item">
                        <span class="mr--5">Son Güncelleme: </span>
                        <i class="feather-clock"></i>
                        <span>{{ \Carbon\Carbon::parse($blog->updated_at)->locale('tr')->isoFormat('D MMMM YYYY') }}</span>
                    </li>
                    <li class="list-item">
                        <b class="color-primary">⚡Ortalama
                            {{ floor(count(preg_split('/\s+/u', strip_tags($blog->content))) / 120) }} dakika </b>
                    </li>
                    <li class="list-item">
                        <i class="feather-eye"></i> {{ number_format($blog->views) }} kişi okudu.
                    </li>
                    <li class="list-item">
                        <i class="feather-message-circle"></i> {{ $approvedComments->count() }} yorum
                    </li>
                    <li class="list-item">
                        <a href="/kategori/{{ $blog->category }}">
                            <i class="feather-folder"></i>
                            @switch($blog->category)
                                @case('yazilim')
                                    Yazılım
                                @break

                                @case('seo')
                                    SEO
                                @break

                                @case('tasarim')
                                    Tasarım
                                @break

                                @case('yapay-zeka')
                                    Yapay Zeka
                                @break

                                @case('diger')
                                    Diğer
                                @break

                                @case('hizmet-bolgesi')
                                    Hizmet Bölgesi
                                @break

                                @default
                            @endswitch
                            Kategorisi
                        </a>
                    </li>
                    @if ((Auth::check() && Auth::user()->id === $blog->user->id) || (Auth::check() && Auth::user()->role_id == 1))
                        <a href="/blog-duzenle/{{ $blog->id }}" class="custom-add-blog2"
                            style="width:100%; font-size:12pt">Blogu Düzenle <i class="feather-edit"></i> </a>
                    @endif
                </ul>

                <h1 class="title">{{ $blog->title }}</h1>
                <p>{{ $blog->excerpt }}</p>



            </div>

        </div>
        <div class="table-of-contents breadcrumb-image-container breadcrumb-style-max-width">
            <h4>Konu Başlıkları</h4>

            <ol id="tocList">
                <?php
                $headers = [];
                preg_match_all('/<h2>(.*?)<\/h2>/', $blog->content, $matches);
                $headers = $matches[1];
                ?>

                @foreach ($headers as $header)
                    <li><a href="#toc{{ $loop->iteration }}">{{ html_entity_decode($header) }}</a></li>
                @endforeach

            </ol>
        </div>


        <div class="rbt-blog-details-area rbt-section-gapBottom breadcrumb-style-max-width">
            <div class="blog-content-wrapper rbt-article-content-wrapper">




                <div class="content" id="content">
                    <div class="post-thumbnail mb--30 position-relative wp-block-image alignwide">
                        <figure>
                            <img src="{{ Voyager::Image($blog->image) }}" alt="{{ $blog->title }} bloğu görseli">
                        </figure>
                    </div>

                    {!! $blog->content !!}
                    <hr>
                    <a class="rbt-btn w-100 text-center mb--20 btn-gradient rbt-switch-btn rbt-switch-x"
                        style="color:#5c340f; font-weight:900" href="tel:{{ setting('site.telefon') }}">
                        <i class="fa-solid fa-phone"></i> HEMEN TIKLA ARA
                    </a>
                    <div class="content-footer">

                        <form action="#" id="postLike"
                            style="display:flex; justify-items:center; align-items:center; position:relative; ">
                            <div id="ratingColor"
                                style="background: rgb(248, 153, 44); height:100%; overflow:hidden; position: absolute; mix-blend-mode:color; pointer-events: none">
                            </div>
                            <button type="submit" name="rating" class="rating-star" value="1"><i
                                    class="fa-solid fa-star"></i></button>
                            <button type="submit" name="rating" class="rating-star" value="2"><i
                                    class="fa-solid fa-star"></i></button>
                            <button type="submit" name="rating" class="rating-star" value="3"><i
                                    class="fa-solid fa-star"></i></button>
                            <button type="submit" name="rating" class="rating-star" value="4"><i
                                    class="fa-solid fa-star"></i></button>
                            <button type="submit" name="rating" class="rating-star" value="5"><i
                                    class="fa-solid fa-star"></i></button>
                            <span>({{ $blog->likes }}/5) </span>
                        </form>

                        <div class="blog-share">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.yeldantech.com/blog/{{ $blog->slug }}"
                                target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?text={{ $blog->title }} https%3A//www.yeldantech.com/blog/{{ $blog->slug }}"
                                target="_blank">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//www.yeldantech.com/blog/{{ $blog->slug }}"
                                target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <i class="fa-solid fa-share" id="share-blog"></i>
                        </div>

                    </div>

                    <script>
                        var postLike = document.getElementById('postLike');
                        var ratingColor = document.getElementById('ratingColor');
                        var likeCount = {{ $blog->likes }} * 28;
                        ratingColor.style.width = likeCount + 'px';

                        postLike.addEventListener('submit', function(e) {
                            e.preventDefault();
                        })
                    </script>

                    {{-- AUTH COMMENT --}}

                    @if (Auth::check())
                        <div class="comment-respond">
                            <h4 class="title">Yorum Paylaş</h4>
                            <form action="{{ route('comment.share', ['blogId' => $blog->id]) }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="row row--10">
                                    <div class="col-12">
                                        @if (Auth::user()->role_id == 1)
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/froala_editor.pkgd.min.js"
                                                integrity="sha512-trNMDq8hXLk5D1ywYoRz/DAxXYkSmsKS1kPHQ/j1qmZl9RN7V9w/CnSTrlgGaPPwNk3VFiVzzkgMtzL0VQJNGQ=="
                                                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/plugins/char_counter.min.js"
                                                integrity="sha512-89WdIIdfXGq+el8NY7qPzFfMdA4cb2NYeMRClEGV/oNmlTQVgpEkox0AkgdX1+AHPOAOwgimN5tEKh1sJxTGZg=="
                                                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/third_party/image_tui.min.js"
                                                integrity="sha512-RPtDKwUjvCThGAWuNiQ6U38BvjsS0dODnlKDhfcCQhPbzwDy51EgaCoaw2nNih2XnNv92EVoE8X+iCM1zHcnhQ=="
                                                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/plugins/image_manager.min.js"
                                                integrity="sha512-NpKeIMM1qtPgc/jwsEJdVkUx2mTYLiy4Qmo51tvBBLWqPAWRSknDTswzyadd3gXAno76lyfD9myKGWLyB/9zaQ=="
                                                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/plugins/image.min.js"
                                                integrity="sha512-JRktyaSKtdJCncjMHK5IZgnBn//KCovsj86whWPpd56QoibCx2utt9zrzDcUoA2yeMWqRwEOyt8dZZqK7Es1Jw=="
                                                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/plugins/emoticons.min.js"
                                                integrity="sha512-U/B5qHSps8HrXSUGLVEM2Q+kj5v/TS4bRrXmp9epKFjCWyXpnftGND21RRNH8ZY72kckRhB8qhQz1a/O0GUVVQ=="
                                                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/plugins/file.min.js"
                                                integrity="sha512-eraXTE5bNqvZAjwS7nBVdcOmxEEzQE+qJ/F3mJMNuMH4Ad85I5WOU9pW02aAG8BsOS2xzOlBBjhRvAXCg7hy2w=="
                                                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/plugins/files_manager.min.js"
                                                integrity="sha512-XdzpeYYyxaSF+I76YyJMIR9qTfTtcCNfiYQUsKp83gfNek7LNikUKfpfK2kb6hTGRU7gFYnnIqR3yFmKWjacYg=="
                                                crossorigin="anonymous" referrerpolicy="no-referrer"></script>




                                            <textarea name="comment" required id="message"></textarea>
                                        @else
                                            <div class="form-group">
                                                <label for="message">Yorum</label>
                                                <textarea id="message" name="comment"></textarea> <!-- Change name attribute to "comment" -->
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 mt--10">
                                        <button class="rbt-btn btn-gradient icon-hover radius-round btn-md"
                                            type="submit">
                                            <span class="btn-text">Yorum Paylaş</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif


                    @if (!Auth::check())
                        <div class="comment-respond">
                            <h4 class="title">Yorum Paylaş</h4>
                            <form action="{{ route('comment.share', ['blogId' => $blog->id]) }}" method="POST">
                                @csrf
                                @method('POST')

                                <p class="comment-notes"><span id="email-notes">Email adresiniz
                                        görünmeyecektir.</span></p>
                                <div class="row row--10">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            @if (!request()->cookie('comment_name'))
                                                <label for="name">Adınız</label>
                                            @endif
                                            <input id="name" type="text" name="name"
                                                @if (request()->cookie('comment_name')) placeholder="Ad:" value="{{ request()->cookie('comment_name') }}" @endif>
                                            <!-- Add name attribute -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            @if (!request()->cookie('comment_email'))
                                                <label for="email">Email:</label>
                                            @endif
                                            <input id="email" type="email" name="email"
                                                @if (request()->cookie('comment_email')) placeholder="Email: " value="{{ request()->cookie('comment_email') }}" @endif>
                                            <!-- Add name attribute -->
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">Yorum</label>
                                            <textarea id="message" maxlength="1000" name="comment"></textarea> <!-- Change name attribute to "comment" -->
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="comment-form-cookies-consent">
                                            <input id="comment-cookies-consent" name="comment-cookies-consent"
                                                type="checkbox" checked>
                                            <label for="comment-cookies-consent">Bir dahaki yorumum için bilgilerimi
                                                çerezlere kaydet.</label>
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="rbt-btn btn-gradient icon-hover radius-round btn-md"
                                            type="submit">
                                            <span class="btn-text">Yorum Paylaş</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <div class="rbt-comment-area">
                        @if ((int) $approvedComments->count() == 0)
                            <h4 class="title"> Henüz yorum yok! </h4>
                        @else
                            <h4 class="title"> {{ $approvedComments->count() }} Yorum</h4>
                        @endif
                        <ul class="comment-list">
                            @foreach ($approvedComments as $comment)
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="single-comment" style="position: relative">
                                            @if (auth()->check() && auth()->user()->role_id == 1)
                                                <form method="post"
                                                    action="{{ route('comments.delete', ['comment' => $comment->id]) }}">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger"
                                                        style="font-size:10pt; font-weight:bold; position: absolute; right:0;">
                                                        Yorumu Sil <i class="feather-trash"
                                                            style="font-weight: 500"></i> </button>
                                                </form>
                                            @endif
                                            <div class="comment-img">
                                                <!-- You may want to display the commenter's profile image here -->
                                                @if ($comment->user)
                                                    <a href="/profil/{{ $comment->user->name }}">
                                                        <img src="{{ Voyager::Image($comment->user->avatar) }}"
                                                            alt="{{ $comment->user->name }} kullanıcısının profili">
                                                    </a>
                                                @else
                                                    <img src="/assets/images/favicon.png"
                                                        alt="Anonim Yeldan Tech Profili">
                                                @endif
                                            </div>
                                            <div class="comment-inner">

                                                <h6 class="commenter">
                                                    @if ($comment->user)
                                                        <b><a
                                                                href="/profil/{{ $comment->user->name }}">{{ $comment->user->name }}</a>
                                                        </b>
                                                        @if ($comment->user->role_id == 1 || $comment->user->role_id == 3)
                                                            <img src="/assets/images/icons/verified.webp"
                                                                alt="Onaylı Kullanıcı İşareti" style="width:20px;">
                                                        @endif
                                                    @else
                                                        {{ $comment->name }} <sup>(Anonim)</sup>
                                                        <!-- Assuming 'name' is a field in noauthcomments table -->
                                                    @endif
                                                </h6>
                                                <div class="comment-meta">
                                                    <div class="time-spent">
                                                        {{ $comment->created_at->diffForHumans() }}</div>
                                                </div>
                                                <div class="comment-text">
                                                    @if ($comment->user && $comment->user->role_id == 1)
                                                        {!! $comment->comment !!}
                                                    @else
                                                        <p class="b2">{{ $comment->comment }}</p>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                            @if (Auth::check() && Auth::user()->role_id == 1)
                                <hr>
                                <br>
                                <b class="title"> Onaylamayı Bekleyen {{ $waitingComments->count() }} Yorum
                                    Mevcut</b>
                                @foreach ($waitingComments as $bekleyen)
                                    <li class="comment mt--20" id="waitingcomments">
                                        <div class="comment-body">
                                            <div class="single-comment" style="position: relative">
                                                @if (auth()->check() && auth()->user()->role_id == 1)
                                                    <form method="post"
                                                        action="{{ route('comments.delete', ['comment' => $bekleyen->id]) }}">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger"
                                                            style="font-size:10pt; font-weight:bold; position: absolute; top:60px; right:0;">
                                                            Yorumu Sil <i class="feather-trash"
                                                                style="font-weight: 500"></i> </button>
                                                    </form>

                                                    <form method="post"
                                                        action="{{ route('comments.approve', ['comment' => $bekleyen->id]) }}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success"
                                                            style="font-size:10pt; font-weight:bold; position: absolute; top:25px; right:0;">
                                                            Yorumu Onayla <i class="feather-check"
                                                                style="font-weight: 500"></i> </button>
                                                    </form>
                                                @endif
                                                <div class="comment-img">
                                                    <!-- You may want to display the commenter's profile image here -->
                                                    @if ($bekleyen->user)
                                                        <a href="/profil/{{ $bekleyen->user->name }}">
                                                            <img src="{{ Voyager::Image($bekleyen->user->avatar) }}"
                                                                alt="{{ $bekleyen->user->name }} kullanıcısının profili">
                                                        </a>
                                                    @else
                                                        <img src="/assets/images/favicon.png"
                                                            alt="Anonim Yeldan Tech Profili">
                                                    @endif
                                                </div>
                                                <div class="comment-inner">

                                                    <h6 class="commenter">
                                                        @if ($bekleyen->user)
                                                            <b><a
                                                                    href="/profil/{{ $bekleyen->user->name }}">{{ $bekleyen->user->name }}</a>
                                                            </b>
                                                            @if ($bekleyen->user->role_id == 1 || $bekleyen->user->role_id == 3)
                                                                <img src="/assets/images/icons/verified.webp"
                                                                    alt="Onaylı Kullanıcı İşareti"
                                                                    style="width:20px;">
                                                            @endif
                                                        @else
                                                            {{ $bekleyen->name }} <sup>(Anonim)</sup>
                                                            <!-- Assuming 'name' is a field in noauthcomments table -->
                                                        @endif
                                                    </h6>
                                                    <div class="comment-meta">
                                                        <div class="time-spent">
                                                            {{ $bekleyen->created_at->diffForHumans() }}</div>
                                                    </div>
                                                    <div class="comment-text">
                                                        @if ($bekleyen->user && $bekleyen->user->role_id == 1)
                                                            <p class="b2">{!! $bekleyen->comment !!}</p>
                                                        @else
                                                            <p class="b2">{{ $bekleyen->comment }}</p>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif





                        </ul>

                    </div>

                </div>


                <div class="related-post pt--60">
                    <div class="section-title text-start mb--40">
                        <h4 class="title">Alakalı Bloglar</h4>
                    </div>


                    @foreach ($allblogs->slice(0, 4)->where('category', $blog->category) as $bloglar)
                        <!-- Start Single Card  -->
                        <div class="rbt-card card-list variation-02 rbt-hover mt--30" style="overflow: visible">
                            <div class="rbt-card-img">
                                <a href="/blog/{{ $bloglar->slug }}">
                                    <img src="{{ Voyager::Image($bloglar->image) }}"
                                        alt="{{ $bloglar->title }} bloğu görseli"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a
                                        href="/blog/{{ $bloglar->slug }}">{{ $bloglar->title }}</a></h5>
                                <a class="mb--20" href="/blog/{{ $bloglar->slug }}">{{ $bloglar->excerpt }}</a>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="/blog/{{ $bloglar->slug }}">Hemen Oku<i><svg
                                                width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                    <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                </g>
                                            </svg></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                    @endforeach


                </div>
            </div>
        </div>
    </div>



    <div id="read-progress" style="transition: .3s"></div>

    <div id="image-copied"><i class="fa-solid fa-copy"></i> Panyo kopyalandı!</div>

    @include('templates.footer')

    <!-- JS
============================================ -->
    <script>
        new FroalaEditor('#message', {
            charCounterMax: 100000,
            theme: 'dark',
            toolbarSticky: true,
            placeholderText: 'Yazmaya başla...',
            fileUploadURL: '/upload-file',
            imageUploadURL: '/upload-image',
            imageUploadParams: {
                _token: '{{ csrf_token() }}',
            },
        });
    </script>

    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Article",
        "url": "https://yeldantech.com/blog/{{$blog->slug}}",
        "wordCount": "{{ count(preg_split('/\s+/u', strip_tags($blog->content))) }}",
        "mainEntityOfPage": {
          "@type": "Webpage",
          "@id": "https://yeldantech.com/blog/{{$blog->slug}}"
        },
        "headline": "{{$blog->title}}",
        "image": {
          "@type": "ImageObject",
          "url": "{{Voyager::Image($blog->image)}}",
          "width": "1920",
          "height": "1080"
        },
        "datePublished": "{{ \Carbon\Carbon::parse($blog->created_at)->isoFormat('Y-M-DTH:m:s') }}+03:00",
        "dateModified": "{{ \Carbon\Carbon::parse($blog->updated_at)->isoFormat('Y-M-DTH:m:s') }}+03:00",
        "description": "{{$blog->excerpt}}",
        "identifier": "blog/{{$blog->slug}}",
        "publisher": {
          "@type": "Organization",
          "name": "Yeldan Tech",
          "logo": {
            "@type": "ImageObject",
            "url": "/assets/images/favicon.png",
            "width": "670",
            "height": "670"
          }
        },
        "author": {
          "@type": "Person",
          "url": "https://www.yeldantech.com/profil/{{$blog->user->name}}",
          "name": "{{$blog->user->name}}",
          "identifier": "{{$blog->user->id}}"
        }
      }
    </script>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "Product", 
          "name": "{{ $blog->title }}",
          "image": "{{Voyager::Image($blog->image)}}",
          "description": "{{$blog->excerpt}}",
          "brand": {
            "@type": "Brand",
            "name": "Yeldan Tech"
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "{{ $blog->likes }}",
          "bestRating": "5",
          "worstRating": "1",
          "ratingCount": "{{ $blog->likeCount }}"
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
    <script src="/assets/js/vendor/readProgress.js"></script>
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
    <script src="/assets/js/vendor/jquery-ui.js"></script>
    <script src="/assets/js/vendor/magnify-popup.min.js"></script>
    <script src="/assets/js/vendor/paralax-scroll.js"></script>
    <script src="/assets/js/vendor/paralax.min.js"></script>
    <script src="/assets/js/vendor/countdown.js"></script>
    <script src="/assets/js/vendor/plyr.js"></script>
    <script src="https://kit.fontawesome.com/5708151086.js" crossorigin="anonymous"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/toc.js"></script>

</body>

</html>

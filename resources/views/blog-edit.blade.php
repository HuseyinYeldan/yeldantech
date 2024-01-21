<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog Ekle - {{setting('site.title')}} </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preload" href="/assets/fonts/EuclidCircularA-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Light.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Medium.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/EuclidCircularA-SemiBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">

    {{-- GOOLGE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Color+Emoji&display=swap" rel="stylesheet">


    {{-- EDITOR --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins.pkgd.min.css" integrity="sha512-XwCeQEt8/jJY7NJ52u1V7T2q+6jjMSmok3KFENpt9oxAkgDGgBiQu5t9UeSzoz96lD3AlopD0IAi1s9CSDm7Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/froala_editor.min.css" integrity="sha512-S+WwSA86TK605zB4r47+0aSE9nFiaM2W5UXmESo71W0ac8juYCRS7wQyn3wiCrEYbmfYkkUGCSKfDENgQdYHmQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins/char_counter.min.css" integrity="sha512-stdwLLupHh/SUnX7Kc1+WRdSGoARaEbl/XpLrdYdMJ7X1SIjGUU9mjg51gqJFWiB+N+M3Ud8bVqT1ZunLEybMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/third_party/image_tui.min.css" integrity="sha512-xnPeQ/lUBY7RPJ080OeCS4FAUT6jokd10GNS4zrh2PVQ54EqB1M+lfVRlkCfcUutIJFU6Wk8kDY45zLtOOqy6Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins/image_manager.min.css" integrity="sha512-l4zfUfFjTgHkjcqAxIsZWcbyDKJqZQfJom0jEbOeiAjWM/33Ll7nJzpVlrBjGulHy5JC0xnCPiQOdeUZBVSDCg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins/image.min.css" integrity="sha512-r6OPm8VyOBMkvzm9JrnOakshxzXKxt00oPZ+jDdL+SozXi2zVEvZJzvS6/EQjxIV3jpVbQ0eOSPhsd5rdH0Cxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/themes/dark.min.css" integrity="sha512-rImHRGRHBB1aXdu3tA9ry9Kc2mRVBkZ9uRe4F+hoEaj9sYgVGfPhtu5/j86V9pieSwb3F2F4121j05TwMVS9UA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins/emoticons.min.css" integrity="sha512-wc3fTBj7DFRomYBw0ggfyZJJPOTEvDZ94TvYz4o/7GrjUqOnwoalU8dJzx5pYTsT5wBKsCBDFkgxaD94KTfTNg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins/file.min.css" integrity="sha512-WemGw24rXNLuG0CmDKOxsImsWkRDpUhwaU0hhoE4WKx2Yd1cb0vUlOR6r88yEgg9EY4qWKxMowhu9k2da1QiDg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/css/plugins/files_manager.min.css" integrity="sha512-2k8BWYsUUVKZjVLdUtRXfgLqUxJ57KccF/izPWwqSUX1UPApTwy9SQPI26xNihhiI1R3QapdVYum6Z5T7duM9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
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

    <style>
    .rbt-sticky{
        position: static !important;
    }
    </style>
</head>

<body class="rbt-header-sticky" @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 3) style="background: #151515" @endif>



    @include('templates.header')

    <div class="container">
        <div class="row g-5 align-items-center mt--50 mb--50">


        {{-- AUTHORIZED --}}
        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 3)
            <form action="{{ route('blog.guncelle', $post->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <label for="baslik" style="color:white; margin-bottom:15px;">Başlık:</label>
                <input type="text" name="baslik" value="{{ old('baslik', $post->title) }}" placeholder="Başlık..." required class="inputBlogTitle" maxlength="80" minlength="10">

                <label for="aciklama" style="color:white; margin-bottom:15px;">Açıklama:</label>
                <input type="text" name="aciklama" value="{{ old('aciklama', $post->excerpt) }}" placeholder="Blog Açıklaması..." required class="inputBlogTitle" maxlength="155" minlength="10">

                <label for="slug" style="color:white; margin-bottom:15px;">URL:</label>
                <input type="text" name="slug" value="{{ old('slug', $post->slug) }}" placeholder="Blog url (harika-blog-basligim)" required class="inputBlogTitle" maxlength="80" minlength="10" pattern="[a-zA-Z0-9-]+">

                <label for="category" style="color:white; margin-bottom:15px;">Kategori:</label>
                <select name="category" id="category" class="mb--20" required>
                    <option value="{{$post->category}}" selected hidden>Mevcut Kategori: {{$post->category}}</option>
                    <option value="seo">SEO</option>
                    <option value="yazilim">Yazılım</option>
                    <option value="tasarim">Tasarım</option>
                    <option value="yapay-zeka">Yapay Zeka</option>
                    <option value="diger">Diğer</option>
                </select>

                <label for="likes" style="color:white; margin-bottom:15px;">Beğenme Sayısı:</label>
                <input type="number" value="{{ old('slug', $post->likes) }}" name="likes" placeholder="Beğenme Sayısı..." required class="inputBlogTitle" maxlength="5" minlength="1" step=".01">
                <label for="likeCount" style="color:white; margin-bottom:15px;">Beğenen Kişi Sayısı:</label>
                <input type="number" value="{{ old('slug', $post->likeCount) }}" name="likeCount" placeholder="Beğenen Kişi Sayısı..." required class="inputBlogTitle" maxlength="10000" minlength="1">

                
                <div class="inputImageBox">
                    <label for="blogThumbnail" id="customBlogThumbnail">Blog Resmi Yükle <i class="feather-plus ml--10"></i> <br> </label>
                    <input accept="image/*" name="blog-thumbnail" type='file' id="blogThumbnail" />
                    <img id="inputImageBoxPlaceholder" src="{{ Voyager::Image($post->image) }}" alt="your image"/>
                </div>

                <textarea name="content" required id="blogEkle">{{ old('content', $post->content) }}</textarea>
                <button id="submitBlog" class="mt--20">PAYLAŞ</button>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
            <form id="deleteForm" action="{{ route('blog.delete', $post->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="button" onclick="confirmDelete()" class="btn btn-danger" style="padding-inline:20px; padding-block:10px; font-size:12pt; font-weight:bold;">Bloğu Sil</button>
            </form>
            
            <script>
                function confirmDelete() {
                    var confirmationInput = prompt('Blogu silmek için "SİL" yaz :');
                    if (confirmationInput !== null && confirmationInput.trim().toUpperCase() === 'SİL') {
                        document.getElementById('deleteForm').submit();
                    } else {
                        alert('Silme işlemi iptal oldu silmek için "SİL" yazınız.');
                    }
                }
            </script>
        @endif




            {{-- NOT AUTHORIZED --}}
            
            @if(Auth::user()->role_id == 2)
                <div class="container" style="padding-block:100px;">
                    <h4 style="text-align: center;">😞 Görünüşe göre blog paylaşmak için yetkiniz yok 😞</h4>
                    <p style="text-align: center;">Eğer blog paylaşmak için yetki istiyorsanız yetkililere ulaşabilirsiniz.</p>
                </div>
            @endif


        </div>
    </div>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/froala_editor.pkgd.min.js" integrity="sha512-trNMDq8hXLk5D1ywYoRz/DAxXYkSmsKS1kPHQ/j1qmZl9RN7V9w/CnSTrlgGaPPwNk3VFiVzzkgMtzL0VQJNGQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/plugins/char_counter.min.js" integrity="sha512-89WdIIdfXGq+el8NY7qPzFfMdA4cb2NYeMRClEGV/oNmlTQVgpEkox0AkgdX1+AHPOAOwgimN5tEKh1sJxTGZg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/third_party/image_tui.min.js" integrity="sha512-RPtDKwUjvCThGAWuNiQ6U38BvjsS0dODnlKDhfcCQhPbzwDy51EgaCoaw2nNih2XnNv92EVoE8X+iCM1zHcnhQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/plugins/image_manager.min.js" integrity="sha512-NpKeIMM1qtPgc/jwsEJdVkUx2mTYLiy4Qmo51tvBBLWqPAWRSknDTswzyadd3gXAno76lyfD9myKGWLyB/9zaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/plugins/image.min.js" integrity="sha512-JRktyaSKtdJCncjMHK5IZgnBn//KCovsj86whWPpd56QoibCx2utt9zrzDcUoA2yeMWqRwEOyt8dZZqK7Es1Jw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/plugins/emoticons.min.js" integrity="sha512-U/B5qHSps8HrXSUGLVEM2Q+kj5v/TS4bRrXmp9epKFjCWyXpnftGND21RRNH8ZY72kckRhB8qhQz1a/O0GUVVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/plugins/file.min.js" integrity="sha512-eraXTE5bNqvZAjwS7nBVdcOmxEEzQE+qJ/F3mJMNuMH4Ad85I5WOU9pW02aAG8BsOS2xzOlBBjhRvAXCg7hy2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.3/js/plugins/files_manager.min.js" integrity="sha512-XdzpeYYyxaSF+I76YyJMIR9qTfTtcCNfiYQUsKp83gfNek7LNikUKfpfK2kb6hTGRU7gFYnnIqR3yFmKWjacYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        new FroalaEditor('#blogEkle', {
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

        document.getElementById('blogThumbnail').onchange = function(evt) {
        const [file] = evt.target.files;
        const inputImageBoxPlaceholder = document.getElementById('inputImageBoxPlaceholder');

        if (file) {
            inputImageBoxPlaceholder.src = URL.createObjectURL(file);
        }
    };
    </script>

</body>

</html>
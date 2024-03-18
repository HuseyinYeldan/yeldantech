    <!-- Start Footer aera -->
    <a href="https://api.whatsapp.com/send?phone=90{{ setting('site.telefon') }}&text=Merhaba%2C%20website%20hizmeti%20almak%20istiyorum.%20" class="whatsapp-button" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <script src="https://kit.fontawesome.com/5708151086.js" crossorigin="anonymous"></script>
    <footer class="rbt-footer footer-style-1 bg-color-white overflow-hidden">
        <div class="footer-top">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <div class="logo">
                                <a href="/">
                                    <img src="/assets/images/logo/logo.png" alt="Yeldan Tech logo">
                                </a>
                            </div>

                            <p class="description mt--20">Yeldan Tech, yeni teknolojileriyle müşterilerine harika SEO
                                hizmetleri vermeyi hedefler.</p>

                            <ul class="social-icon social-default justify-content-start">


                                <li><a href="{{ setting('site.facebook') }}" target="_blank">
                                        <i class="feather-facebook"></i>
                                    </a>
                                </li>
                                <li><a href="{{ setting('site.twitter') }}" target="_blank">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="{{ setting('site.instagram') }}" target="_blank">
                                        <i class="feather-instagram"></i>
                                    </a>
                                </li>
                                <li><a href="{{ setting('site.linkedin') }}" target="_blank">
                                        <i class="feather-linkedin"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class="contact-btn mt--30">
                                <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round"
                                    href="tel:{{ setting('site.telefon') }}">
                                    <div class="icon-reverse-wrapper">
                                        <span class="btn-text">Bizi Arayın</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">Hızlı Linkler⚡</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="/">Ana Sayfa</a>
                                </li>
                                <li>
                                    <a href="/hakkimizda">Hakkımızda</a>
                                </li>
                                <li>
                                    <a href="/projelerimiz">Projelerimiz</a>
                                </li>
                                <li>
                                    <a href="/blog">Blog</a>
                                </li>
                                <li>
                                    <a href="/kategori/hizmet-bolgesi">Hizmet Bölgelerimiz</a>
                                </li>
                                <li>
                                    <a href="/iletisim">İletişim</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">Son Bloglarımız</h5>
                            <ul class="ft-link">
                                @foreach ($blogs->reject(function ($blog) {
            return $blog->category == 'hizmet-bolgesi';
        })->sortByDesc('created_at')->slice(0, 3) as $blog)
                                    <li class="mb-4">
                                        <a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">İletişim</h5>
                            <ul class="ft-link">
                                <li><span>Phone:</span> <a
                                        href="tel:{{ setting('site.telefon') }}">{{ setting('site.telefon') }}</a></li>
                                <li><span>E-mail:</span> <a href="mailto:info@yeldantech.com">info@yeldantech.com</a>
                                </li>
                            </ul>

                            {{-- <form class="newsletter-form mt--40" action="#">
                                <h6 class="w-600">İndirimler & Haberler</h6>
                                <p class="description mb-3">Hemen kayıt olun ve indirimleri kaçırmayın ve daha fazla müşteriye ulaşın!</p>

                                <div class="form-group right-icon icon-email">
                                    <label for="email">E-Posta</label>
                                    <input id="email" type="email">
                                </div>

                                <div class="form-group mb--0">
                                    <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                                        <span data-text="Gönder">Gönder</span>
                                    </button>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-style-1 ptb--20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                        <p class="rbt-link-hover text-center text-lg-start">Copyright &copy; 2024 <b>Yeldan Tech.</b>
                            Tüm hakları saklıdır.</p>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                        {{-- <ul
                            class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                            <li><a href="#">Kullanım Şartları</a></li>
                            <li><a href="#">Gizlilik Politikası</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
    <!-- End Footer aera -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Start CallTo Action Area  -->
    <div class="rbt-call-to-action-area rbt-section-gap bg-gradient-6 rbt-call-to-action-5">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="rbt-cta-5">
                            @foreach ($pages as $cta)
                            @if($cta->slug == 'cta-yazisi')
                            <div class="content">
                                <h1 class="title">{{$cta->getTranslatedAttribute('title','tr')}}</h1>
                                <p>{!!$cta->getTranslatedAttribute('body','tr')!!}</p>
                                <div class="rbt-button-group justify-content-start">
                                    <a class="rbt-btn btn-gradient" href="tel:{{setting('site.telefon')}}">Bizi Arayın</a>
                                    <a class="rbt-btn btn-border" href="/iletisim">İletişim</a>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-images">
            <img src="/assets/images/icons/three-shape.png" alt="Shape Images">
        </div>
    </div>
    <!-- End CallTo Action Area  -->
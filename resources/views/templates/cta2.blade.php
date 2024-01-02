    <!-- Start Call To Action  -->
    <div class="rbt-callto-action-area bg-color-extra2 rbt-section-gap">
        <div class="rbt-callto-action rbt-cta-default style-2">
            <div class="container content-wrapper overflow-hidden">
                <div class="row gy-5 align-items-center">

                    @foreach($pages as $cta)
                    @if($cta->slug == 'cta-yazisi')
                    <div class="col-lg-8">
                        <div class="inner">
                            <div class="content text-left">
                                <h3 class="title" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">{{$cta->getTranslatedAttribute('title','tr')}}</h3>
                                <h6 class="subtitle" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">{!!$cta->getTranslatedAttribute('body','tr')!!}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="call-to-btn text-start text-lg-end position-relative" data-sal="slide-up" data-sal-duration="400" data-sal-delay="400">
                            <a class="rbt-btn rbt-switch-btn rbt-switch-y" href="tel:{{setting('site.telefon')}}">
                                <span data-text="Hemen Ara">Hemen Ara</span>
                            </a>
                            <div class="shape-text-image">
                                <img class="rbt-rotatation-round" src="/assets/images/shape/cta-text.png" alt="Education Images">
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>

    </div>
    <!-- End Call To Action  -->

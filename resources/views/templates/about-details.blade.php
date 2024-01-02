    <!-- Start About Area  -->
    @foreach ($pages as $hakkimizda)
    @if ($hakkimizda->slug == 'hakkimizda-yazisi')
    
    <div class="rbt-about-area bg-color-white rbt-section-gapTop pb_md--80 pb_sm--80 about-style-1">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-wrapper" id="thumbnail-wrapper">
                        @foreach(json_decode($hakkimizda->gallery) as $image)

                        <div class="thumbnail ">
                            <img data-parallax='{"x": 0, "y": -20}' src="{{Voyager::image($image)}}" alt="Education Images">
                        </div>

                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_sm--0 pl_md--0">
                        <div class="section-title text-start">
                            <span class="subtitle bg-coral-opacity">{{$hakkimizda->excerpt}}</span>
                            <h2 class="title">{{$hakkimizda->getTranslatedAttribute('title','tr')}}</h2>
                        </div>

                        <p class="description mt--30">{!!$hakkimizda->getTranslatedAttribute('body','tr')!!}</p>

                        <!-- Start Feature List  -->

                        <div class="rbt-feature-wrapper mt--20 ml_dec_20">
                            @foreach ($reasons->slice(2,4) as $nedenbiz)
                            <div class="rbt-feature feature-style-2 card-bg-{{$nedenbiz->cardStyle}} rbt-radius">
                                <div class="icon bg-white-opacity">
                                    <img src="{{Voyager::Image($nedenbiz->icon)}}" alt="" style="width:70%">
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title"> {{$nedenbiz->getTranslatedAttribute('title','tr')}} </h6>
                                    <p class="feature-description"> {!!$nedenbiz->getTranslatedAttribute('content','tr')!!} </p>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- End Feature List  -->
                        <div class="about-btn mt--40">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="tel:{{setting('site.telefon')}}">
                                <span class="icon-reverse-wrapper">
                        <span class="btn-text">Hemen Ara</span>
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

@endif

@endforeach
<!-- End About Area  -->
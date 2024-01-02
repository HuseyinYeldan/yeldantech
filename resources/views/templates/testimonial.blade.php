    <!-- Start Testimonial Area  -->
    <div class="rbt-testimonial-area bg-color-white overflow-hidden">
        <div class="container-fluid">
            <div class="row g-5 align-items-center">
                <div class="col-xl-3">
                    @foreach ($pages as $testimonialText)
                    @if ($testimonialText->slug == 'testimonial-yazisi')
                        
                    <div class="section-title pl--100 pl_sm--30">
                        <span class="subtitle bg-pink-opacity">{{$testimonialText->getTranslatedAttribute('excerpt','tr')}}</span>
                        <h2 class="title">{{$testimonialText->getTranslatedAttribute('title','tr')}}</h2>
                        <p class="description mt--20">{!!$testimonialText->getTranslatedAttribute('body','tr')!!}</p>
                        <div class="veiw-more-btn mt--20">
                            <a class="rbt-btn btn-gradient rbt-marquee-btn marquee-text-y" href="tel:{{setting('site.telefon')}}">
                                <span data-text="Hemen Arayın">Hemen Arayın</span>
                            </a>
                        </div>
                    </div>
                    
                    @endif
                    @endforeach
                </div>
                <div class="col-xl-9">
                    <div class="overflow-hidden">
                        <div class="scroll-animation-wrapper pt--50 pb--30">
                            <div class="scroll-animation scroll-right-left">
                                
                                @foreach ($testimonials->slice(0,9) as $testimonial)
                                <!-- Start Single Testimonial  -->
                                <div class="single-column-20">
                                    <div class="rbt-testimonial-box">
                                        <div class="inner">
                                            <div class="clint-info-wrapper">
                                                <div class="thumb">
                                                    <img src="{{Voyager::Image($testimonial->image)}}" alt="Clint Images">
                                                </div>
                                                <div class="client-info">
                                                    <h5 class="title">{{$testimonial->name}}</h5>
                                                    <span>{{$testimonial->industry}}</i></span>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p class="subtitle-3"> {!!$testimonial->message!!} </p>
                                                <div class="rating mt--20">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Testimonial  -->
                                @endforeach

                            </div>
                        </div>
                        <div class="scroll-animation-wrapper pb--50">
                            <div class="scroll-animation scroll-left-right">

                                @foreach ($testimonials->slice(9,18) as $testimonial)
                                <!-- Start Single Testimonial  -->
                                <div class="single-column-20">
                                    <div class="rbt-testimonial-box">
                                        <div class="inner">
                                            <div class="clint-info-wrapper">
                                                <div class="thumb">
                                                    <img src="{{Voyager::Image($testimonial->image)}}" alt="Clint Images">
                                                </div>
                                                <div class="client-info">
                                                    <h5 class="title">{{$testimonial->name}}</h5>
                                                    <span>{{$testimonial->industry}}</i></span>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p class="subtitle-3"> {!!$testimonial->message!!} </p>
                                                <div class="rating mt--20">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Testimonial  -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Area  -->
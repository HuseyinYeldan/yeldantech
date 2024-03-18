    <!-- Start Blog Style -->
    <div class="rbt-rbt-blog-area bg-color-white rbt-section-gapBottom">
        <div class="container">
            <div class="row mb--30 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-primary-opacity">BİLGİLEN</span>
                        <h2 class="title">Bloglarımız</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="read-more-btn text-start text-md-end">
                        <a class="rbt-btn btn-gradient hover-icon-reverse radius-round" href="/blog">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">TÜM BLOGLAR </span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row row--15">
                @foreach ($blogs->reject(function($blog) { return $blog->category == 'hizmet-bolgesi'; })->sortByDesc('created_at')->slice(0, 1) as $blog)

                <!-- Start Single Card  -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--50" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-02 height-330 rbt-hover">
                        @if ($blog->created_at > $mytime = Carbon\Carbon::yesterday())
                        <div class="newPost">🔥 Yeni</div>
                        @endif
                        <div class="rbt-card-img">
                            <a href="/blog/{{$blog->slug}}">
                                <img src="{{Voyager::Image($blog->image)}}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h3 class="rbt-card-title"><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h3>
                            <b class="color-primary" style="margin-left: -8px">⚡Ortalama {{ floor(count(preg_split('/\s+/u', strip_tags($blog->content)))/120) }} dakika </b>
                            <p class="rbt-card-text text-sm">
                                <i class="feather-clock"></i>
                                <span>{{ \Carbon\Carbon::parse($blog->updated_at)->locale('tr')->isoFormat('D MMMM YYYY') }}</span>
                            </p>
                            <p class="rbt-card-text">{{$blog->excerpt}}</p>

                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="/blog/{{$blog->slug}}">Devamını oku<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
                @endforeach
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--20" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">

                    <!-- Start Single Card  -->
                    @foreach ($blogs->reject(function($blog) { return $blog->category == 'hizmet-bolgesi'; })->sortByDesc('created_at')->slice(1, 3) as $blog)
                    <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                        @if ($blog->created_at > $mytime = Carbon\Carbon::yesterday())
                        <div class="newPost">🔥 Yeni</div>
                        @endif
                        <div class="rbt-card-img">
                            <a href="/blog/{{$blog->slug}}">
                                <img src="{{Voyager::Image($blog->image)}}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h5>
                            <b class="color-primary" style="font-size: 10pt; margin-left:-5px">⚡Ortalama {{ floor(count(preg_split('/\s+/u', strip_tags($blog->content)))/120) }} dakika </b>
                            <p class="rbt-card-text" style="font-size: 10pt">{{$blog->excerpt}}</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="/blog/{{$blog->slug}}"  >Devamını oku<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Card  -->

                </div>
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Blog Style -->
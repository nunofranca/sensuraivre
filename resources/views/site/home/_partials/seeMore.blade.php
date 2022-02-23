<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-3">
                        <div class="section-tittle mb-30">
                            <h3>Whats New</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        @foreach($posts as $post)

                                            @if($loop->index > 9 and $loop->index < 14)
                                        <div class="col-lg-6 col-md-6 border-bottom mb-5">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{url("storage/{$post->images[0]->path}")}}"
                                                         alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">{{$post->category->name}}</span>
                                                    <h4><a href="{{route('materia', $post['slug'])}}">{{$post->title}}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                            @endif

                                            @endforeach


                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- End Nav Card -->
                    </div>
                </div>
            </div>
{{--            <div class="col-lg-4">--}}
{{--                <!-- Section Tittle -->--}}
{{--                <div class="section-tittle mb-40">--}}
{{--                    <h3>Follow Us</h3>--}}
{{--                </div>--}}
{{--                <!-- Flow Socail -->--}}
{{--                ANuncios--}}
{{--                <!-- New Poster -->--}}
{{--                <div class="news-poster d-none d-lg-block">--}}
{{--                    <img src="assets/img/news/news_card.jpg" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>

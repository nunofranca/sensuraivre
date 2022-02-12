<!-- Trending Area Start -->
<div class="trending-area fix">
    <div class="container">
        <div class="trending-main mt-4">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="trending-top mb-30">
                        <div class="trend-top-img">
                            <img src='{{url("storage/{$posts[0]->images[0]->path}")}}' alt="">
                            <div class="trend-top-cap">
                                <span>{{$posts[0]->category->name}}</span>
                                <h2><a href="{{route('materia', $posts[0]->slug)}}}">{{$posts[0]->title}}</a></h2>
                            </div>
                        </div>
                    </div>

                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            @foreach($posts as $post)
                                @if($loop->index > 0 and $loop->index  < 4)
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <div class="trend-bottom-cap">
                                                    <span class="color1">{{$post->category->name}}</span>
                                                    <h4><a href="{{route('materia', $post['slug'])}}}">{{$post->title}}</a></h4>
                                                </div>
                                                <img src='{{url("storage/{$post->images[0]->path}")}}'
                                                     alt="">
                                            </div>

                                        </div>
                                    </div>
                                @endif
                            @endforeach


                        </div>
                    </div>
                </div>

                <!-- Riht content -->
                <div class="col-lg-4">
                    @foreach($posts as $post)

                        @if($loop->index > 3 and $loop->index  < 10)
                            <div class="trand-right-single  d-flex">
                                <div class="trand-right-cap">
                                    <span class="color1">{{$post->category->name}}</span>
                                    <h4><a href="{{route('materia', $post['slug'])}}}">{{$post->title}}</a></h4>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->

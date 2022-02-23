@extends('site.master.index')
@section('title', $post->title)
@section('metas-og')
    <meta property="og:locale" content="pt_BR"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="https://www.semcensura.tv.br/materia/{{ $post->slug }}"/>
    <meta property="og:title" content="{{ $post->title }}"/>
    <meta property="og:site_name" content="O Protagonista"/>
    <meta property="og:description" content="{{ $post->subtittle ?? '' }}"/>
    <meta property="og:image"
          content="https://www.semcensura.tv.br/storage/{{$post->images[0]->path}}"/>
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:alt" content="{{ $post->title }}"/>
    <meta property="og:image:width" content="652"/>
    <meta property="og:image:height" content="408"/>
@endsection
@section('content')

    <main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                <!-- Hot Aimated News Tittle-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>{{$post->category->name}}</strong>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Tittle -->
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <img src="{{url("storage/{$post->images[0]->path}")}}" alt="">
                            </div>
                            <div class="section-tittle mb-30 pt-30">
                                <h3>{{$post->title}}</h3>
                            </div>
                            <div class="about-prea">

                                <p class="about-pera1 mb-25">
                                    {!! $post->text !!}
                                </p>
                            </div>


                        </div>
                        <!-- From -->
                        <div class="row">
                            <div class="col-lg-8">
                                <form id="formComment" data-post="{{$post->slug}}">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100 error" name="text" id="message"
                                                          cols="30" rows="9" onfocus="this.placeholder = ''"
                                                          onblur="this.placeholder = 'Escreva seu comentário'"
                                                          placeholder="Escreva seu comentário"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="button btn-block button-contactForm boxed-btn">
                                            Enviar comentário
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div aria-live="polite" aria-atomic="true"  style="position: relative; min-height: 200px;">
            <div class="toast" id="toast" style="position: absolute; top: 0; right: 0;">
                <div class="toast-header">
                    <img width="25%" src="{{asset('assets/images/site/logo/sl.png')}}" class="rounded mr-2" alt="...">
                    <strong class="mr-auto">Obrigado</strong>
                   <small>{{Carbon\Carbon::now()->format('d-m-y h:i:s')}}</small><button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    Seu Comentário foi enviado e será avaliado
                </div>
            </div>
        </div>


        <!-- About US End -->
    </main>

@endsection
@section('js')
    <script>
        document.querySelector('#formComment').addEventListener('submit', async function (e) {
            e.preventDefault()
            const slug = this.getAttribute('data-post')

            const formData = new FormData(this);
            formData.append('slug', slug)


            await fetch('/painel/comentarios/store', {
                method: 'POST',
                body: formData,
                headers: {
                    // 'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            }).then(response => response.json()).then(res => {
                this.reset();
                $('#toast').toast('show')
            })


        })
    </script>
@endsection

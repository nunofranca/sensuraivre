@extends('painel.master.index')
@section('css')

    <link href="{{mix('assets/filepond/css/filepond.css')}}" rel="stylesheet"/>
    <link href="{{mix('assets/filepond/css/filepond-plugin-image-preview.css')}}" rel="stylesheet"/>

@endsection
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between">
                        <h6>Editar Post</h6>
                        <form action="{{route('post.destroy', $post->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                        {{--                        <a type="button" class="btn btn-primary btn-lg" href="{{route('post.create')}}">NOVO POST</a>--}}
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="align-items-center m-4">
                            <form action="{{route('post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @include('painel.posts._partials.form')

                                <button type="submit" class="btn btn-primary">EDITAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    {{--    <script src="{{mix('assets/filepond/js/filepond-plugin-image-preview.js')}}"></script>--}}


    {{--    <script src="{{mix('assets/filepond/js/filepond.js')}}"></script>--}}
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

    <script>

        FilePond.registerPlugin(FilePondPluginImagePreview);
        // Get a reference to the file input element
        const inputElement = document.querySelector('#file');
        // Create a FilePond instance
        const pond = FilePond.create(inputElement);
        FilePond.setOptions({
            server: {
                url: '{{route('images.store')}}',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            },
        });

    </script>


    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#text'))
            .catch(error => {
                console.error(error);
            });
    </script>


@endsection


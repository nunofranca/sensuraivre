@extends('painel.master.index')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between">
                        <h6>Novo Post</h6>
{{--                        <a type="button" class="btn btn-primary btn-lg" href="{{route('post.create')}}">NOVO POST</a>--}}
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                      <div class="align-items-center m-4">
                          <form action="{{route('post.store')}}" method="POST">
                              @csrf
                              <div class="mb-3">
                                  <label for="title" class="form-label">Título*</label>
                                  <input type="text" class="form-control" id="title" name="title" autocomplete="off">
                              </div>
                              <div class="mb-3">
                                  <label for="subtitle" class="form-label">Subtitulo</label>
                                  <input type="text" class="form-control" name="subtitle" id="subtitle" autocomplete="off">
                              </div>

                              <div class="row">
                                  <div class="col-12 col-sm-12 col-md-8">
                                      <div class="mb-3">

                                          <textarea name="text" id="text"></textarea>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-12 col-md-4">
                                      <div class="mb-3">

                                          <input type="file">
                                      </div>
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <label for="exampleDataList" class="form-label">Editorial</label>
                                  <select name="category_id" class="form-control" required>
                                      <option value="">Informe a categoria</option>
                                  @foreach($categories as $category)
                                          <option value="{{$category->id}}">{{$category->name}}</option>
                                      @endforeach
                                  </select>
                              </div>

                              <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#text' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

<div class="mb-3">
    <label for="title" class="form-label">Título*</label>
    <input type="text" value="{{$post->title ?? old('title')}}" class="form-control" id="title" name="title" autocomplete="off">
</div>
<div class="mb-3">
    <label for="subtitle" class="form-label">Subtitulo</label>
    <input type="text" class="form-control" value="{{$post->subtitle ?? old('subtitle')}}" name="subtitle" id="subtitle"
           autocomplete="off">
</div>

<div class="row">
    <div class="col-12 col-sm-12 col-md-8">
        <div class="mb-3">

            <textarea name="text" id="text">
                {{$post->text ?? old('text')}}
            </textarea>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4">
        <div class="mb-3">

            <input type="file" name="image" id="file">
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

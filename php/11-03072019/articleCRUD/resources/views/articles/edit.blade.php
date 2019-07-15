@extends('layout.master')
@section('headscripts')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
@endsection
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
@endsection
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="{{route('articles.update', $article->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                      <label for="title" class="font-weight-bold">Title</label>
                      <input type="text" name="title" id="title" class="form-control" value="{{$article->title}}">
                    </div>
                    <div class="form-group">
                        <label for="slug" class="font-weight-bold">Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control" value="{{$article->slug}}">
                    </div>
                    <div class="form-group">
                        <label for="categories" class="font-weight-bold">Category</label>
                        <select class="form-control select2-multi" id="categories" name="categories[]" multiple="multiple">
                            @foreach ($categories as $category)
                                <option value="">{{$category}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description" class="font-weight-bold">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3" value="">{{$article->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content" class="font-weight-bold">Content</label>
                        <textarea name="content" id="editor" cols="30" rows="10" value="">{{$article->content}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-success text-uppercase">save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('ckeditor')
    <script>
        CKEDITOR.replace('editor', {
            filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
            filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
        });
    </script>
@endsection
@section('scripts')
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script>
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($article->categories()->allRelatedIds()) !!}).trigger('change');
    </script>
@endsection

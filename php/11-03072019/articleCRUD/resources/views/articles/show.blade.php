@extends('layout.master')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h1>{{$article->title}}</h1>
                <p class="text-muted">{{$article->slug}}</p>
                @if ($article->created_at != null)
                    <p class="text-muted">Created_at: {{$article->created_at}}</p>
                @endif
                @foreach ($article->categories as $category)
                    <button type="button" class="btn btn-secondary btn-sm">{{$category->name}}</button>
                @endforeach
                <hr>
                <p class="font-weight-bolder">{{$article->description}}</p>
                {!!$article->content!!}
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="form-row">
                    <form action="{{route('articles.edit', $article->id)}}" method="get">
                        <button type="submit" class="btn btn-sm btn-warning ml-2">Edit</button>
                    </form>
                    <form action="{{route('articles.destroy', $article->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger ml-2">Delete</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

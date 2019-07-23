@extends('users.layout.master')

@section('content')

<div class="container">
        <div class="row d-flex d-md-flex">
            @foreach ($articles as $article)
            <div class="col-12 col-md-6 mb-3">
                    <div class="card flex-md-row">
                        <div class="card-body bg-light text-light">
                             <p class="text-info font-weight-bold">
                                @foreach ($article->categories as $category)
                                    <button type="button" class="btn btn-secondary btn-sm"><a href="{{route('home.showCategory', $category->name)}}" class="text-dark" style="text-decoration: none;">{{$category->name}}</a></button>
                                @endforeach
                            </p>
                            <h2 class="Font--custom text-dark">{{$article->title}}</h2>
                            <p class="lead text-dark">{{$article->description}}</p>
                            <p class="text-muted small">Posted on {{date("d M Y", strtotime($article->created_at))}}</p>
                            <a class="lead small" href="{{route('home.show', $article->slug)}}">Continue reading</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

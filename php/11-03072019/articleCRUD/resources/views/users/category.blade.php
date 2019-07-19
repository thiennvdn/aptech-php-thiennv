@extends('users.layout.master')

@section('content')
{{-- header --}}
<div class="container Header--height ">
        <div class="row h-100 border-bottom d-flex justify-content-between align-items-center">
            <div class="col-md-4 d-none d-md-flex text-muted justify-content-lg-start">
                <h6 class="font-weight-normal">Subscribe</h6>
            </div>
            <div class="col-md-4 col-12 d-flex justify-content-around">
                <h1><a class="Font--custom font-weight-bold text-dark" style="text-decoration: none;" href="{{route('home.index')}}"> My Blog</a></h1>
                <nav class="navbar navbar-light d-md-none">
                    <button class="navbar-toggler btn btn-outline-success" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
            <div class="col-md-4 d-none d-md-flex justify-content-end">
                <button type="button" class="btn btn-outline-secondary">Sign-up</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-block d-md-none">
                <div class="navbar collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link text-muted" href="{{route('home.showCategory', $category->name)}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 d-md-block d-none ">
                <nav class="nav d-flex justify-content-between">
                    @foreach ($categories as $category)
                        <a class="nav-link text-muted" href="{{route('home.showCategory', $category->name)}}">{{$category->name}}</a>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>
    {{-- end header --}}
<div class="container">
        <div class="row d-flex d-md-flex">
            @foreach ($articles as $article)
            <div class="col-12 col-md-6 mb-3">
                    <div class="card flex-md-row">
                        <div class="card-body bg-light text-light">
                             <p class="text-info font-weight-bold">
                                @foreach ($article->categories as $category)
                                    <button type="button" class="btn btn-secondary btn-sm">{{$category->name}}</button>
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

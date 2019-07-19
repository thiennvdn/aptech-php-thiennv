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
<div class="container text-dark bg-light mb-5">
    <div class="row h-100 m-1 rounded">
        <div class="col-12 d-flex align-items-center">
            <div>
                <h1 class="font-italic Font--custom">{{$article->title}}</h1>
                <p class="lead">{{$article->description}}</p>
                <p class="text-muted small">Posted on {{date("d M Y", strtotime($article->created_at))}}</p>
                {!!$article->content!!}
            </div>
        </div>
    </div>
</div>
@endsection

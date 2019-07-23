@extends('users.layout.master')

@section('content')
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

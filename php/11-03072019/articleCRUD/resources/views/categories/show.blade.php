@extends('layout.master')

@section('content')
    <div class="container mt-3">
        <div class="row d-flex align-items-center">
            <div class="col-10">
                <h1>{{$category->name}} <small class="text-muted">{{ $category->articles()->count() }} Article</small></h1>
            </div>
            <div class="col-2 d-flex justify-content-around">
                <form action="{{route('categories.edit', $category->id)}}" method="get">
                    <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                </form>
                <form action="{{route('categories.destroy', $category->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category->articles as $article)
                            <tr>
                                <th>{{$article->id}}</th>
                                <td>{{$article->title}}</td>
                                <td>
                                    @foreach ($article->categories as $category)
                                        <button type="button" class="btn btn-sm btn-secondary">{{$category->name}}</button>
                                    @endforeach
                                </td>
                                <td>
                                    <form action="{{route('articles.show', $article->id)}}" method="get">
                                        <button type="submit" class="btn btn-sm btn-info">View</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

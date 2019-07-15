@extends('layout.master')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr class="text-center">
                                <td>{{$article->id}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->description}}</td>
                                <td class="d-flex justify-content-around align-items-center">
                                    <form action="{{route('articles.show', $article->id)}}" method="get">
                                        <button type="submit" class="btn btn-sm btn-primary">Show</button>
                                    </form>
                                    <form action="{{route('articles.edit', $article->id)}}" method="get">
                                        <button type="submit" class="btn btn-sm btn-warning">Edit</button>
                                    </form>
                                    <form action="{{route('articles.destroy', $article->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{$articles->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

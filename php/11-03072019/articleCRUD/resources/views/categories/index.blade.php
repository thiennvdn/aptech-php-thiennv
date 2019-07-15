@extends('layout.master')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-9">
                <h1>Categories</h1>
                <table class="table">
                    <thead class="text-center"
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Article</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td><small>{{$category->articles()->count()}}</small></td>
                                <td class="d-flex justify-content-around align-items-center">
                                     <form action="{{route('categories.show', $category->id)}}" method="get">
                                        <button type="submit" class="btn btn-sm btn-primary mr-1">Show</button>
                                    </form>
                                    <form action="{{route('categories.edit', $category->id)}}" method="get">
                                        <button type="submit" class="btn btn-sm btn-warning mr-1">Edit</button>
                                    </form>
                                    <form action="{{route('categories.destroy', $category->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-3">
                <form action="{{route('categories.store')}}" method="post">
                    @method('post')
                    @csrf
                    <h2>New Category</h2>
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary btn-block">Create New Category</button>
                </form>
            </div>
        </div>
    </div>
@endsection

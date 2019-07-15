@extends('layout.master')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-4">
                <form action="{{route('categories.update', $category->id)}}" method="post">
                @method('put')
                @csrf
                    <h2>Edit Category</h2>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="" value="{{$category->name}}">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary btn-block">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
@endsection

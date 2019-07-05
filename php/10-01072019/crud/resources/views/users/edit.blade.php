@extends('layout.master')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="{{route('users.update',$user->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name" class="text-uppercase font-weight-bold">name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-uppercase font-weight-bold">email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="text-uppercase btn btn-success font-weight-bold">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

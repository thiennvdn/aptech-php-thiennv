@extends('layout.master')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{route('users.store')}}" method="post">
                    @method('post')
                    @csrf
                    <div class="form-group">
                        <label for="name" class="text-uppercase font-weight-bold">name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-uppercase font-weight-bold">email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-uppercase font-weight-bold">password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary text-uppercase">confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

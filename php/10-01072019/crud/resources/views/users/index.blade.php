@extends('layout.master')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="text-center">
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="d-flex align-items-center justify-content-around">
                                    <form action="{{route('users.show', $user->id)}}" method="get">
                                        <button type="submit" class="btn btn-sm btn-primary">Show</button>
                                    </form>
                                    <form action="{{route('users.edit', $user->id)}}" method="get">
                                        <button type="submit" class="btn btn-sm btn-warning">Edit</button>
                                    </form>
                                    <form action="{{route('users.destroy', $user->id)}}" method="post">
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
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

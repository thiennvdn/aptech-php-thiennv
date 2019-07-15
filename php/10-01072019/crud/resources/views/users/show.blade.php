@extends('layout.master')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Updated Date</th>
                            <th scope="col" colspan="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td class="d-flex align-items-center justify-content-around">
                                <form action="{{route('users.edit', $user->id)}}" method="get">
                                    <button type="submit" class="btn btn-sm  btn-warning mx-2">Edit</button>
                                </form>
                                <form action="{{route('users.destroy', $user->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger mx-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

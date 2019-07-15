<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{route('user.create')}}" method="get">
            <button type="submit">Create New User</button>
        </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>
                        <form action="{{route('user.show', $user->id)}}" method="get">
                            <button type="submit">Show</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('user.edit', $user->id)}}" method="get">
                            <button type="submit">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('user.destroy', $user->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">{{$users->links()}}</div>
</body>
</html>


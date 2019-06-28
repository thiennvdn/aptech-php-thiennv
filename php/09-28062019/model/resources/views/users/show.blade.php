<p><b>ID :</b> {{$user->id}}</p>
<p><b>Name :</b> {{$user->name}}</p>
<p><b>Email :</b> {{$user->email}}</p>
<p><b>Password :</b> {{$user->password}}</p>
<form action="{{asset('users/index')}}" method="get">
    <button type="submit">Back</button>
</form>

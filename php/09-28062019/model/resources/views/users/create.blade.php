<form action="{{asset('users/index')}}" method="post">
    @csrf
    <div>
        <label for="">Name</label>
        <input type="text" name="name" id="">
    </div>
    <div>
        <label for="">Email</label>
        <input type="email" name="email" id="">
    </div>
    <div>
        <label for="">Password</label>
        <input type="password" name="password" id="">
    </div>
    <button type="submit">Create New User</button>
</form>


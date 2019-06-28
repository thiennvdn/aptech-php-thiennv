<form action="{{asset('users/index')}}" method="post">
    @method('PUT')
    @csrf
    <div>
        <label for="">ID: {{$user->id}}</label>
        <input type="hidden" name="id" value="{{$user->id}}">
    </div>
    <div>
        <label for="">Name</label>
        <input type="text" name="name" id="" value="{{$user->name}}">
    </div>
    <div>
        <label for="">Email</label>
        <input type="email" name="email" id="" value="{{$user->email}}">
    </div>
    <button type="submit">Update</button>
</form>

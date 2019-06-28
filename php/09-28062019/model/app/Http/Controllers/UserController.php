<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index() {
        $users = DB::table('users')->get();
        return view('users.index', ['users' => $users]);
    }

    function show($id) {
        $user = DB::table('users')->where('id',$id)->get();
        return view('users.show', ['user' => $user[0]]);
    }

    function destroy($id) {
        $user = DB::table('users')->where('id',$id)->delete();
        $users = DB::table('users')->get();
        return view('users.index', ['users' => $users]);
    }

    function edit($id) {
        $user = DB::table('users')->where('id',$id)->get();
        return view('users.edit', ['user' => $user[0]]);
    }

    function update() {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        DB::table('users')->where('id',$id)->update([
            'name' => $name,
            'email' => $email
        ]);
        $users = DB::table('users')->get();
        return view('users.index', ['users' => $users]);
    }

    function create() {
        return view('users.create');
    }

    function store() {
        $name = $_POST['name'];
        $email = $_POST['email'];
        DB::table('users')->increment([
            'name' => $name,
            'email' => $email
        ]);
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->save();
        $users = DB::table('users')->get();
        return view('users.index', ['users' => $users]);
    }
}


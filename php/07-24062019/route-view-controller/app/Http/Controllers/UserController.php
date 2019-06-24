<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index() {
        $users = DB::table('users')->get();
        // return "<h1>". $users[0]->name ."</h1>";
        // dd($users);
        return view('data', ['users' => $users]);
    }
}

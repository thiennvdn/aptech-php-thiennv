<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    function hienThiTatCa() {
        $users = DB::table('users')->get();
        return $users;
    }

    function hienThiMotNguoi($idNguoiDung) {
        $user = DB::table('users')->where('id', $idNguoiDung)->get();
        return $user;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    function hienThiFormNguoiDung() {
        return 'Form Nguoi Dung';
    }

    function hienThiTatCa() {
        $users = DB::table('users')->get();
        return view('hien-thi-tat-ca', ['users' => $users]);//tro den view hien-thi-tat-ca.blade.php
    }

    function hienThiMotNguoi($idNguoiDung) {
        $user = DB::table('users')->where('id', $idNguoiDung)->get();
        return view('hien-thi-mot-nguoi', ['user' => $user]);//tro den view hien-thi-mot-nguoi.blade.php
    }

    function formSuaNguoiDung() {
        return 'Form Sua Nguoi Dung';
    }
}

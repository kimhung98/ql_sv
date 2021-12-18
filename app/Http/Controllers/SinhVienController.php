<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SinhVienController extends Controller
{
    function getLogin()
    {
        return view('login');
    }

    function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('sinhvien.index');
        } else {
            return redirect()->route('user.login')->with('thongbao', 'Đăng nhập không thành công');
        }
    }

    function getLogout()
    {
        Auth::logout();
        return redirect()->route('user.login');
    }

    function getDanhSach() {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://ql.sinhvien.my/api/sinhvien');
        $sinhvien = json_decode($res->getBody()->getContents());

        return view('danhsach', compact('sinhvien'));
    }

    function create() {
        return view('them');
    }

    function edit($id) {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://ql.sinhvien.my/api/sinhvien/' . $id);
        $sinhvien = json_decode($res->getBody()->getContents());

        return view('sua', compact('sinhvien'));
    }
}

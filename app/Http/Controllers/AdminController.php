<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pengguna(){
        return view('admin.pengguna');
    }

    public function order(){
        return view('admin.order');
    }

    public function grup(){
        return view('admin.grup');
    }

    public function voucher(){
        return view('admin.voucher');
    }
}

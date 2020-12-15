<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $id = Order::where('user_id', Auth::id())->first();
        $user = User::find(Auth::id());
        $product = Product::first();
        if($user->role == 'admin'){
            return view('admin.dashboard');
        }else{
            if($id == null){
                return view('dashboard',compact('user', 'product'));
            }else if($id->status == 3){
                return view('dashboard-verified')->with('user', $user);
            }
            else{
                $payment = Payment::where('id', $id->payment_id)->first();
                return view('dashboard-ordered',compact('payment', 'product'));
            }
        }
    }
}

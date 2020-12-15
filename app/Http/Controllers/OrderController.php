<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order(Request $input){
        Order::create([
            'user_id' => Auth::id(),
            'product_id' => 1,
            'payment_id' => $input->metode,
            'total' => 25000,
            'status' => 1
        ]);

        return redirect()->route('dashboard');
    }

    public function verifikasi(){
        $id = Order::where('user_id', Auth::id())->first('status');

        if($id == null){
            return redirect()->route('dashboard');
        }
        else if($id->status == 1){
            return view('verifikasi');
        }else if($id->status == 2){
            return view('verifikasi-v2');
        }else{
            return redirect()->route('dashboard');
        }
    }

    public function verifikasi_store(Request $input){
        Validator::make($input->all(), [
            'image' => ['required', 'image'],
        ])->validate();
 
        $folder = public_path('uploads/');
        $file = $input->file('image');
        $file->move($folder, $file->getClientOriginalName());

        Order::where('user_id', Auth::id())
            ->update([
                'photo' => $file->getClientOriginalName(),
                'status' => 2
            ]);

        return redirect()->route('dashboard');
    }

    public function gantiMethod(Request $request){
        Order::where('user_id', Auth::id())
            ->update([
                'payment_id' => $request->metode,
            ]);
        
        return redirect()->route('dashboard');
    }
}

<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;

class Pemesanan extends Component
{
    use WithPagination;

    public $filter;
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        return view('livewire.admin.pemesanan', [
            'orders' => $this->filter == 2 ? Order::where('status', 2)->paginate(20) : ($this->filter == 3 ? Order::where('status', 3)->paginate(20) : Order::whereNotNull('photo')->paginate(20))
        ]);
    }

    public function verify($id)
    {
        if($id){
            Order::where('id', $id)->update(['status' => 3]);
            session()->flash('success','Pemesanan berhasil divalidasi!');
        }
    }

    public function reject($id)
    {
        if($id){
            $order = Order::where('id', $id)->update(['status' => 0, 'photo' => null]);
            // File::delete('uploads/'.$order->photo);
            session()->flash('reject','Pemesanan berhasil ditolak!');
        }
    }
}

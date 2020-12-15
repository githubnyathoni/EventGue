<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Order;
use App\Models\Group;

class Dashboard extends Component
{
    public $user, $order, $unverified, $grup;

    public function mount(){
        $this->user = User::where('role', 'user')->count();
        $this->grup = Group::count();
        $this->order = Order::where('status',3)->count();
        $this->unverified = Order::where('status',2)->count();
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}

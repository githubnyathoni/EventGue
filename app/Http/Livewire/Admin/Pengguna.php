<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Order;
use Hash;
use App\Models\Kelas;

class Pengguna extends Component
{
    public $new_pass;

    public function render()
    {
        return view('livewire.admin.pengguna', [
            'users' => User::where('role','user')->get()
        ]);
    }

    public function change($id)
    {
        User::find($id)->update(['password' => Hash::make($this->new_pass)]);
        session()->flash('success','Password berhasil diubah!');
    }

    public function delete($id)
    {
        Order::where('user_id',$id)->delete();
        User::find($id)->delete();
        session()->flash('success','User berhasil dihapus!');
    }
}

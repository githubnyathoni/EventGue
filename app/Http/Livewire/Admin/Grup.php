<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Group;
use App\Models\GroupMember;

class Grup extends Component
{
    public $nama_grup, $kuota, $link, $anggota;


    public function render()
    {
        return view('livewire.admin.grup', [
            'groups' => Group::get(),
        ]);
    }

    public function buatGrup(){
        Group::create([
            'nama_grup' => $this->nama_grup,
            'kuota' => $this->kuota,
            'link' => $this->link
        ]);

        session()->flash('success','Grup Berhasil dibuat!');
    }

    public function anggota($id){
        $this->members = GroupMember::where('group_id',$id)->get();
    }
}

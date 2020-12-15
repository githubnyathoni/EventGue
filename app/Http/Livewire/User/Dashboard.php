<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Order;
use App\Models\Group;
use App\Models\GroupMember;
use Auth;

class Dashboard extends Component
{
    public $payment_id;

    public function mount(){
        // $this->member = GroupMember::where('user_id', Auth::user()->id)->first();
        // $this->groupmember = GroupMember::where('user_id', Auth::user()->id)->first();
        // dd($this->groupmember->group_id);
    }

    public function render()
    {
        return view('livewire.user.dashboard', [
            'groupmember' => GroupMember::where('user_id', Auth::user()->id)->first(),
            'member' => GroupMember::where('user_id', Auth::user()->id)->first()
        ]);
    }

    public function joinGroup(){
        $groups = Group::get();
        for($i = 0; $i < count($groups); $i++){
            $members = GroupMember::where('group_id', $groups[$i]->id)->count();
            if($members >= $groups[$i]->kuota){
                continue;
            }
            else{
                $member = GroupMember::where('user_id', Auth::user()->id)->first();
                if($member == null){
                    GroupMember::create([
                        'group_id' => $groups[$i]->id,
                        'user_id' => Auth::user()->id,
                    ]);
                }
                else{
                    break;
                }
            }
        }
    }

    public function order(){
        Order::create([
            'user_id' => Auth::id(),
            'product_id' => 1,
            'payment_id' => $this->payment_id,
            'total' => 25000,
            'status' => 0
        ]);

    }
}

<?php
namespace App\Http\Livewire;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class UsersLivewire extends Component
{
    use WithPagination, HasRoles;

    public $search;
    public $ids;
    public $name;
    public $email;
    public $roleName;
    public $role_id;

    public function resetInput(){
        $this->ids='';
        $this->roleName='';
        $this->role_id = '';
    }

    public function render()
    {
        $search = '%'.$this->search . '%';
        $users = User::where('name','LIKE',$search)
                ->orWhere('email','LIKE',$search)
                ->latest()->paginate(10);
        $roles = Role::all();
        return view('livewire.users-livewire',compact('users','roles'))->extends('backend.layouts.index')
            ->section('content');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $this->ids = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->roleName = $user->getRoleNames()->implode(" ");
    }

    public function update(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($this->ids){
            $user = User::findOrFail($this->ids);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
            $this->syncrole($user);
            $this->resetInput();
//            Toastr::success('Successfully member updated.', 'Success');
            $this->emit('userUpdated');
        }
    }

    public function syncrole(User $user){
        $role = DB::table('model_has_roles')->where('model_id',$user->id)->first();
        if (!$role){
            DB::table('model_has_roles')->insert([
                'role_id' => $this->role_id,
                'model_type' => 'App\Models\User',
                'model_id' => $user->id
            ]);
        }else{
            DB::table('model_has_roles')->where('model_id',$user->id)->update(['role_id' => $this->role_id]);
        }
    }

    public function close(){
        $this->ids = '';
    }
}

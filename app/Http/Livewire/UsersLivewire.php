<?php
namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Traits\HasRoles;

class UsersLivewire extends Component
{
    use WithPagination, HasRoles;

    public $search;

    public function render()
    {
        $search = '%'.$this->search . '%';
        $users = User::where('name','LIKE',$search)
                ->orWhere('email','LIKE',$search)
                ->latest()->paginate(10);
        return view('livewire.users-livewire',compact('users'))->extends('backend.layouts.index')
            ->section('content');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RolesLivewire extends Component
{
    public function render()
    {
        return view('livewire.roles-livewire')->extends('backend.layouts.index')
        ->section('content');
    }
}

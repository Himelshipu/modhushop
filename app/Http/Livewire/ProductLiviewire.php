<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductLiviewire extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.product-liviewire',compact('products',))->extends('backend.layouts.index')
            ->section('content');
    }
}

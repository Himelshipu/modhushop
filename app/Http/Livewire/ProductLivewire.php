<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductLivewire extends Component
{
    public $name, $category_id, $new_price, $old_price, $sku_number, $discount, $description, $first_image, $second_image;
    public $image_url=[];

    public function inputFieldReset(){
        $this->name = '';
        $this->category_id = '';
        $this->new_price = '';
        $this->old_price = '';
        $this->sku_number = '';
        $this->description = '';
        $this->discount = '';
        $this->discount = '';
        $this->second_image = '';
        $this->image_url = '';
    }

    public function render()
    {
        $products = Product::all();
        $categories = Category::active()->latest()->get();
        return view('livewire.product-livewire',compact('products','categories'))->extends('backend.layouts.index')
            ->section('content');
    }

    protected $rules = [
        'name' => 'required',
        'category_id' => 'required',
        'old_price' => 'required',
        'sku_number' => 'required',
        'description' => 'required',
        'discount' => 'required',
        'second_image' => 'required',
    ];

    public function store(){
        dd(request()->all());
        $this->validate();
    }
}

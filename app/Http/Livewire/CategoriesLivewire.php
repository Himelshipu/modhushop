<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Brian2694\Toastr\Facades\Toastr;

class CategoriesLivewire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $category_name, $status ,$category_id, $search;
    public $updateMode = false;

    public function render()
    {
        $search = '%'.$this->search . '%';
        $categories = Category::where('category_name','LIKE',$search)
                    ->latest()->paginate(2);
        return view('livewire.categories-livewire',compact('categories',))->extends('backend.layouts.index')
        ->section('content');
    }

    private function resetInputFields(){
        $this->category_name = '';
        $this->status = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'category_name' => 'required',
            'status' => 'required',
        ]);
        Category::create($validatedDate);
        \Toastr::success('Successfully category created.', 'Success');
        // session()->flash('message', 'Category Created Successfully.');
        $this->resetInputFields();
        $this->emit('CategoryStore');
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $category = Category::where('id',$id)->first();
        $this->category_id = $id;
        $this->category_name = $category->category_name;
        $this->status = $category->status;
    }

    public function deleteModal($id)
    {
        $this->updateMode = true;
        $this->category_id = $id;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }


    public function update()
    {
        $this->validate([
            'category_name' => 'required',
            'status' => 'required',
        ]);

        if ($this->category_id) {
            $category  = Category::find($this->category_id);
            $category ->update([
                'category_name' => $this->category_name,
                'status' => $this->status,
            ]);
            $this->updateMode = false;
            Toastr::success('Successfully category updated.', 'Success');
            // session()->flash('message', 'Category Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if($id){
            Category::where('id',$id)->delete();
            session()->flash('message', 'Category Deleted Successfully.');
        }
    }

}

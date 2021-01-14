
<div>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Category </h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active"><a href="#">Simple Tables</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-12">
                @include('livewire.create-category-livewire')
                @include('livewire.update-category-livewire')
                @if (session()->has('message'))
                    <div class="alert alert-success" style="margin-top:10px;">x
                      {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="search">
                        <input type="text" placeholder="search...." style="height: 35px;" class="inline float float-right"
                               wire:model="search">
                        <h3 class="tile-title">Category List</h3>
                    </div>

                    <table class="table table-bordered mt-5">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->category_name }}</td>
                                <td>{{ $value->status }}</td>
                                <td>
                                <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                                <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{$categories->links()}} --}}

                </div>
            </div>
        </div>
    </main>


    {{-- @include('backend.update') --}}
</div>


<div>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Product List</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active"><a href="#">Simple Tables</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-12">
                @include('backend.product.create-livewire')
                @include('backend.product.update-livewire')
                @include('backend.product.deleteModal')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="search">
                        <input type="text" placeholder="search...." style="height: 35px;" class="inline float float-right"
                               wire:model="search">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoryModal">
                            Add Product
                        </button>
                    </div>
                    <table class="table table-bordered mt-5">
                        <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($products as $index=>$value)
                            <tr class="text-center">
                                <td>{{$products->firstItem()+$index}}</td>
                                <td>{{ $value->category_name }}</td>
                                <td>
                                    @if($value->status == 1 )
                                        <span class="badge badge-success mt-2">Active</span>
                                    @else
                                        <span class="badge badge-warning mt-2">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                                    <button data-toggle="modal" data-target="#deleteModal" wire:click="deleteModal({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
{{--                    {{$products->links()}}--}}
                </div>
            </div>
        </div>
    </main>
</div>

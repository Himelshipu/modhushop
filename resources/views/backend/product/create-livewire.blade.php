<!-- Modal -->
<div wire:ignore.self class="modal fade" id="productModal" tabindex="-1" role="dialog"
     aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog-lg" role="document" style="width: 80%; margin-left: 200px; margin-top: 20px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Create Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" wire:model="name">
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Category</label>
                                <select class="form-control" name="" id="" wire:model="category_id">
                                    <option value="" selected hidden class="form-control">Select Category</option>
                                    @forelse($categories as $category)
                                        <option value="{{$category->id}}"
                                                class="form-control">{{$category->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                                @error('category_id') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">New Price</label>
                                <input type="text" class="form-control" wire:model="new_price" placeholder="New Price">
                                @error('new_price') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Old Price</label>
                                <input type="text" class="form-control" wire:model="old_price" placeholder="Old Price">
                                @error('old_price') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Discount</label>
                                <input type="text" class="form-control" wire:model="discount" placeholder="Discount">
                                @error('discount') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Sku Number</label>
                                <input type="text" class="form-control" wire:model="sku_number" placeholder="Sku Number">
                                @error('sku_number') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Status</label>
                                <select class="form-control" name="" id="" wire:model="status">
                                    <option value="" selected hidden class="form-control">Select Status</option>
                                    <option value="1" class="form-control">Active</option>
                                    <option value="2" class="form-control">Pending</option>
                                </select>
                                @error('status') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">First Image</label>
                                <input type="file" class="form-control" wire:model="first_image">
                                @error('first_image') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Second Image</label>
                                <input type="file" class="form-control" wire:model="second_image">
                                @error('second_image') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Multiple Image</label>
                                <input type="file" class="form-control" wire:model="image_url">
                                @error('image_url') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Description</label>
                                <textarea type="text" class="form-control" cols="4" rows="5"
                                          wire:model="description"></textarea>
                                @error('description') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn close-modal" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

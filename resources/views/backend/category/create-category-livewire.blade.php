<!-- Modal -->
<div wire:ignore.self class="modal fade" id="categoryModal" tabindex="-1" role="dialog"
     aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel">Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Category Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name"
                               wire:model="category_name">
                        @error('category_name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Status</label>
                        <select class="form-control" name="" id="" wire:model="status">
                            <option value="" selected hidden class="form-control">Select Status</option>
                            <option value="1" class="form-control">Active</option>
                            <option value="2" class="form-control">Pending</option>
                        </select>
                        @error('status') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save changes
                </button>
            </div>
        </div>
    </div>
</div>

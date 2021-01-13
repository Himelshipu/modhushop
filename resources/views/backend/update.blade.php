{{--    Add Member Modal--}}
<div wire:ignore.self class="modal fade" id="userUpdateModal" tabindex="-1" role="dialog"
     aria-labelledby="userUpdateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userUpdateModalLabel">Update User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" name="id" wire:model="ids">
                    <div class="form-group">
                        <label class="col-form-label">Name:</label>
                        <input type="text" name="name" wire:model="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Email:</label>
                        <input type="email" name="email" wire:model="email" class="form-control">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Role: {{$roleName}}</label>
                        <select name="" id="" class="form-control" wire:model="role_id">
                            @forelse($roles as $role)
                                <option value="{{$role->id}}" {!! $roleName == $role->name ? 'selected' : ''!!} ">{{$role->name}}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="close()">Close</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="update">Submit</button>
            </div>
        </div>
    </div>
</div>

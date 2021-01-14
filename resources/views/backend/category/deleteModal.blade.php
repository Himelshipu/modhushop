<!-- Modal -->
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-body">
                <h3>Do you want to delete this? </h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click="delete({{ $category_id }})" class="btn btn-danger" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>

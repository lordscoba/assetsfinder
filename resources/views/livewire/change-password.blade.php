<div>
    @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
    <!-- edit password modal start -->
    <div class="modal fade edit-profile-modal" id="edit-password" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row gx-3">
                            <input type="hidden" wire:model="user_id">
                            <div class="form-group col-12">
                                <label for="old_password">current password</label>
                                <input wire:model.defer="old_password" type="password" class="form-control" id="old_password">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-12">
                                <label for="new_password">enter new password</label>
                                <input wire:model.defer="new_password" type="password" class="form-control" id="new_password">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-12">
                                <label for="confirm_password">confirm your password</label>
                                <input wire:model.defer="confirm_password" type="password" class="form-control" id="confirm_password">
                                @error('confirm_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" wire:click.prevent.defer="cancel()" class="btn btn-dashed color-2 btn-pill"
                        data-bs-dismiss="modal">Cancel</button>
                    <button wire:click.prevent="update()" class="btn btn-gradient color-2 btn-pill"
                    data-bs-dismiss="modal" >Save
                        changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- edit password modal start -->
</div>

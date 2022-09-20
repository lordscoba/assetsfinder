<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    {{-- @if ($updateMode) --}}
    {{-- @include('livewire.change-email') --}}
{{-- @endif --}}
    <!-- edit Email address modal start -->
    <div class="modal fade edit-profile-modal" id="edit-address" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change email address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row gx-3">
                            <input type="hidden" wire:model="user_id">
                            <div class="form-group col-12">
                                <label for="old_email">current email</label>
                                <input wire:model.defer="old_email" type="email" class="form-control" id="old_email">
                                @error('old_email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-12">
                                <label for="new_email">enter new email</label>
                                <input wire:model.defer="new_email" type="email" class="form-control" id="new_email">
                                @error('new_email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-12">
                                <label for="confirm_email">confirm your email</label>
                                <input wire:model.defer="confirm_email" type="email" class="form-control"
                                    id="confirm_email">
                                @error('confirm_email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click.prevent.defer="cancel()" class="btn btn-dashed color-2 btn-pill"
                        data-bs-dismiss="modal">Cancel</button>
                    <button wire:click.prevent.defer="update()" class="btn btn-gradient color-2 btn-pill"
                        data-bs-dismiss="modal">Save
                        changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- edit address modal start -->
</div>

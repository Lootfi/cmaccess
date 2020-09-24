@extends('livewire.user.layout')

@section('managecontent')

<form method="POST" wire:submit.prevent="changePassword" class="px-4 py-5 bg-white sm:p-6">
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="Mot de passe Actuel" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full"
                wire:model.defer="current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="Nouveau Mot de passe" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="password"
                autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="Confirmation" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full"
                wire:model.defer="password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </div>

    <div class="mt10 float-right">
        <x-jet-action-message class="mr-3" on="saved">
            Saved.
        </x-jet-action-message>

        <x-jet-button>
            Save
        </x-jet-button>
    </div>
</form>


@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {});
</script>
@endpush
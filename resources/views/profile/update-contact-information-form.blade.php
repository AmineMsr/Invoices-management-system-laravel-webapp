<x-jet-form-section submit="updateContactInformation">
    <x-slot name="title">
        <div class="text-[#014a75] text-xl font-bold">{{ __('Coordonnées') }}</div>
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

        <x-slot name="form">
            <!-- Phone -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="phone" value="{{ __('Téléphone') }}" />
                <x-jet-input id="phone" type="text" class="mt-1 block w-full" wire:model.defer="state.phone" autocomplete="phone" />
                <x-jet-input-error for="phone" class="mt-2" />
            </div>

            <!-- Address -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="address" value="{{ __('Adresse') }}" />
                <x-jet-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="state.address" autocomplete="address" />
                <x-jet-input-error for="address" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __('Saved.') }}
            </x-jet-action-message>

            <x-jet-button wire:loading.attr="disabled" wire:target="photo">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>

</x-jet-form-section>
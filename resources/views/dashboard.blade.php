<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    <div class="grid place-items-center pt-40">
        <a href="{{ route('dashboard') }}">
            <x-jet-application-logo class="block h-9 w-auto" />
        </a>
    </div>
</x-app-layout>

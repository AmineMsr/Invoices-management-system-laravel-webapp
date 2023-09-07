<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Factures') }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="py-5">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-2 border-[#014a75]">
                            <form method="POST" action="{{ route('invoices.new-invoice-form') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="text-[#014a75] px-2 py-2 text-center text-xl font-bold">
                                    Nouvelle facture
                                </div>

                                <!-- Title -->
                                <div class="mt-2">
                                    <x-jet-label for="title" :value="__('Titre de la facture')" />
                                    <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus placeholder="Titre"/>
                                </div>

                                <!-- Reference -->
                                <div class="mt-2">
                                    <x-jet-label for="reference" :value="__('Référence')" />
                                    <x-jet-input id="reference" class="block mt-1 w-full" type="text" name="reference" :value="old('reference')" required autofocus placeholder="Référence"/>
                                </div>

                                <!-- Description -->
                                <div class="mt-2">
                                    <x-jet-label for="description" :value="__('Description')" />
                                    <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required placeholder="Description"/>
                                </div>
                                
                                <div class="grid grid-cols-2">
                                <!-- Amount due -->
                                <div class="mt-2 mr-2">
                                    <x-jet-label for="amount_due" :value="__('Montant à payer')" />
                                    <x-jet-input id="amount_due" class="block mt-1 w-full" type="text" name="amount_due" :value="old('amount_due')" required autofocus placeholder="Montant"/>
                                </div>

                                <!-- Invoice -->
                                <div class="mt-2 mr-2">
                                    <x-jet-label for="invoice" :value="__('Facture')" />
                                    <x-jet-input id="invoice" class="block mt-1 w-full" type="file" name="invoice" :value="old('invoice')" accept=".pdf" required autofocus placeholder="Facture" />
                                </div>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <x-jet-button class="ml-4" type="submit">
                                        {{ __("Déposer") }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
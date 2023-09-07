<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="text-[#014a75] px-2 py-2 text-center text-xl font-bold">
                INSCRIPTION
            </div>

            <div class="grid grid-cols-2">
            <!-- Fname -->
            <div class="mt-2 mr-2">
                <x-jet-label for="fname" :value="__('Prénom')" />
                <x-jet-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus placeholder="Prénom"/>
            </div>

            <!-- Lname -->
            <div class="mt-2 ml-2">
                <x-jet-label for="lname" :value="__('Nom')" />
                <x-jet-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" required autofocus placeholder="NOM"/>
            </div>
            </div>

            <!-- Email address -->
            <div class="mt-2">
                <x-jet-label for="email" :value="__('Email')" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="exemple@email.com"/>
            </div>

            <!-- Phone -->
            <div class="mt-2">
                <x-jet-label for="phone" :value="__('Télèphone')" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autofocus placeholder="+212000000000"/>
            </div>

            <!-- Address -->
            <div class="mt-2">
                <x-jet-label for="address" :value="__('Adresse')" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus placeholder="Adresse"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Vous êtes déjà inscrit ?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __("S'inscrire") }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
    <div class="py-3 bg-gray-100" ></div>
</x-guest-layout>

<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('You are entering a secure section of the application. For your safety, please confirm your password to proceed.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm Password') }}
            </x-primary-button>
        </div>

        <!-- Additional Guidance -->
        <div class="mt-4 text-sm text-gray-500">
            {{ __('Forgot your password?') }}
            <a href="{{ route('password.request') }}" class="text-blue-600 hover:text-blue-800">
                {{ __('Click here to reset it.') }}
            </a>
        </div>
    </form>
</x-guest-layout>

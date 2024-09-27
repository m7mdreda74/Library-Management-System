<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Enter your email address below, and we will send you a link to reset your password.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="bg-blue-500 hover:bg-blue-700">
                {{ __('Send Password Reset Link') }}
            </x-primary-button>
        </div>

        <!-- Guidance -->
        <div class="mt-6 text-sm text-gray-600">
            <p>Not sure if you have an account? Try signing up <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800">here</a>.</p>
        </div>
    </form>
</x-guest-layout>

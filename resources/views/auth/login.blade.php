<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src='https://lh3.googleusercontent.com/pw/ACtC-3dx5Afj2Nri2NfRKf_sjzmdnEC5XzX01kn5ZNZAOSwtXVUhJnHHYBliOwdxhVSShdQiQdsq6VUw30QyRCjkHs6DUqufqk456E5VqBVggmMM5vdTiPzqFRqoaS-g0jgHrq_9pEjrWiTYncbqNrBXJdaQ=s782-no?authuser=0' alt="W3Schools.com" style="margin-left:500px ;border-radius: 50%;width:20%;height:30%">
      </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

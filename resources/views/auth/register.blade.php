@extends('layout')

@section('content')
    <header>

    </header>
    <div class="container mx-auto flex h-full justify-center mt-8 relative">
        <section class="flex flex-col md:flex-row gap-4 p-4 w-full justify-center">
            <div
                class="bg-blue-200 rounded-2xl flex flex-col px-8 justify-center items-center md:items-start order-2 md:order-1 md:rounded-tl-2xl md:rounded-bl-2xl">
                <h1 class="text-4xl mt-8 md:mt-0 border-b-2 md:border-b-0 text-blue-900">Register</h1>

                <form method="POST" action="{{ route('register') }}" class="mt-8">
                    @csrf

                    <!-- Name -->
                    <div class="w-full">
                        <label class="text-gray-600 font-medium md:my-2">Your Name</label>
                        <input type="text" class="w-full p-2 px-4 border text-xl text-gray-800 focus:outline-none"
                            name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <label class="text-gray-600 font-medium md:my-2">Your Email</label>
                        <input type="email" class="w-full p-2 px-4 border text-xl text-gray-800 focus:outline-none"
                            name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label class="text-gray-600 font-medium md:my-2">Password</label>
                        <input type="password" class="w-full p-2 px-4 border text-xl text-gray-800 focus:outline-none"
                            name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label class="text-gray-600 font-medium md:my-2">Confirm Password</label>
                        <input type="password" class="w-full p-2 px-4 border text-xl text-gray-800 focus:outline-none"
                            name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button
                            class="my-2 py-3 delay-200 text-md uppercase tracking-wider font-medium text-center w-full rounded-full bg-blue-700 text-gray-50 hover:text-blue-900 hover:bg-transparent border hover:border-blue-900 focus:outline-none"
                            type="submit">{{ __('Register') }}</button>
                    </div>
                </form>
            </div>

            <!-- Add additional content as needed -->

        </section>
    </div>
@endsection

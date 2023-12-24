<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Message -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>{{ __('Welcome, :user!', ['user' => Auth::user()->name]) }}</p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Manage Posts -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold mb-2">{{ __('Manage Posts') }}</h3>
                        <p>{{ __('Create, edit, and delete your blog posts.') }}</p>
                        <a href="{{ route('posts.index') }}"
                            class="text-blue-500 hover:underline">{{ __('Go to Posts') }}
                        </a>
                    </div>
                </div>

                <!-- Manage Categories -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold mb-2">{{ __('Manage Categories') }}</h3>
                        <p>{{ __('Create, edit, and delete blog categories.') }}</p>
                        <a href="{{ route('categories.index') }}"
                            class="text-blue-500 hover:underline">{{ __('Go to Categories') }}
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

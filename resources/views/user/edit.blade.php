<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Edit') }}
            <i class="fas fa-tachometer-alt"></i>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("User edit") }}
                </div>
            </div>
            <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mt-4">
                    <x-input-label for="username" value="{{ __('Username') }}" />
                    <x-text-input id="username" class="block mt-1 w-full"
                                type="text"
                                name="username"
                                value="{{ $user->username }}"
                                required autocomplete="username" />
                    <x-input-error :message="$errors->get('username')" class="mt-2"/>
                </div>
                <x-primary-button class="mt-4">
                    {{ __("Update User") }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>

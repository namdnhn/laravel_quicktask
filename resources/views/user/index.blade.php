<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("User list") }}
                </div>
            </div>
            <x-primary-button id="create-user-button" class="mt-4 mb-4">
                {{ __("Create User") }}
            </x-primary-button>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">#</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{ __("First name") }}</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{ __("Last name") }}</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{ __("Email") }}</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{ __("Username") }}</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{ __("Action") }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th class="text-gray-900 dark:text-gray-100 text-center">{{ $user->id }}</th>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $user->firstname }}</td>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $user->lastname }}</td>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $user->email }}</td>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $user->username }}</td>
                            <td class="text-gray-900 dark:text-gray-100 text-center">
                                <x-primary-button class="mt-4">
                                    {{ __("Edit") }}
                                </x-primary-button>
                                <x-primary-button class="mt-4">
                                    {{ __("Delete") }}
                                </x-primary-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

<script>
    document.getElementById('create-user-button').addEventListener('click', function() {
        window.location.href = "{{ route('users.create') }}";
    });
</script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Task list") }}
                </div>
            </div>
            <x-primary-button id="create-task-button" class="mt-4 mb-4">
                {{ __("Create Task") }}
            </x-primary-button>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">#</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{ __("Title") }}</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{ __("Description") }}
                        </th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{ __("User") }}</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{ __("Actions") }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <th class="text-gray-900 dark:text-gray-100 text-center">{{ $task->id }}</th>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $task->title }}</td>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $task->description }}</td>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $task->user->username }}</td>
                            <td class="text-gray-900 dark:text-gray-100 text-center">
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ route('tasks.edit', $task->id)}}"><x-primary-button class="mt-4">
                                            {{ __("Edit") }}
                                        </x-primary-button></a>
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-primary-button class="mt-4">
                                            {{ __("Delete") }}
                                        </x-primary-button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

<script>
    document.getElementById('create-task-button').addEventListener('click', function () {
        window.location.href = "{{ route('tasks.create') }}";
    });
    document.getElementById('delete-task').addEventListener('click', function () {
        window.location.href = "{{ route('tasks.destroy', ['task' => $task->id]) }}";
    });
</script>
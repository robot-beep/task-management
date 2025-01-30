<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tareas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <form method="POST" action="{{ isset($task) ? route('tasks.update', $task) : route('tasks.store') }}" class="max-w-md mx-auto">
            @csrf
            @isset($task) @method('PUT') @endisset

            <div class="space-y-4">
                <!-- titulo --> 
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">{{ __('Título') }}</label>
                    <input
                        id="title"
                        name="title"
                        type="text"
                        value="{{ old('title', $task->title ?? '') }}"
                        required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <!-- descipcion -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">{{ __('Descripción') }}</label>
                    <textarea
                        id="description"
                        name="description"
                        rows="3"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description', $task->description ?? '') }}</textarea>
                </div>

                <!--fecha de vencimiento -->
                <div>
                    <label for="due_date" class="block text-sm font-medium text-gray-700">{{ __('Fecha de vencimiento') }}</label>
                    <input
                        id="due_date"
                        name="due_date"
                        type="date"
                        value="{{ old('due_date', isset($task) ? $task->due_date->format('Y-m-d') : '') }}"
                        required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <!-- estado -->
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">{{ __('Estado') }}</label>
                    <select
                        id="status"
                        name="status"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        @foreach(['pendiente', 'en_progreso', 'completada'] as $status)
                        <option value="{{ $status }}" {{ old('status', $task->status ?? '') == $status ? 'selected' : '' }}>
                            {{ ucfirst($status) }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <!-- asignado a -->
                <div>
                    <label for="assigned_to" class="block text-sm font-medium text-gray-700">{{ __('Asignar a') }}</label>
                    <select
                        id="assigned_to"
                        name="assigned_to"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ old('assigned_to', $task->assigned_to ?? '') == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <button
                    type="submit"
                    class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ isset($task) ? __('Actualizar') : __('Crear') }}
                </button>
            </div>
        </form>
        <div>
            @if ($errors->any()))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            @endif
        </div>
    </div>
</x-app-layout>
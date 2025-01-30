<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tareas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Filtros -->
                    <form method="GET" class="mb-4">
                        <div class="flex gap-4">
                            <select name="status" class="rounded-md">
                                <option value="">Todos los estados</option>
                                @foreach(['pendiente', 'en_progreso', 'completada'] as $status)
                                <option value="{{ $status }}" {{ request('status') == $status ? 'selected' : '' }}>
                                    {{ ucfirst($status) }}
                                </option>
                                @endforeach
                            </select>

                            <select name="assigned_to" class="rounded-md">
                                <option value="">Todos los usuarios</option>
                                @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ request('assigned_to') == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                                @endforeach
                            </select>

                            <x-primary-button>Filtrar</x-primary-button>

                            <a href="{{ route('tasks.index') }}" class="text-blue-600">Limpiar</a>

                            <a href="{{ route('tasks.create') }}" class="text-blue-600">Crear tarea</a>
                        </div>
                    </form>

                    <!-- Tabla de tareas -->
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">ID</th>
                                <th scope="col" class="px-6 py-3">Título</th>
                                <th scope="col" class="px-6 py-3">Descripción</th>
                                <th scope="col" class="px-6 py-3">Asignado a</th>
                                <th scope="col" class="px-6 py-3">Estado</th>
                                <th scope="col" class="px-6 py-3">Due Date</th>
                                <th scope="col" class="px-6 py-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">{{ $task->id }}</td>
                                <td class="px-6 py-4">{{ $task->title }}</td>
                                <td class="px-6 py-4 max-w-40 overflow-hidden">{{ $task->description }}</td>
                                <td class="px-6 py-4">{{ $task->assignedUser->name }}</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 text-sm font-semibold rounded-full 
                                    {{ $task->status === 'pendiente' ? 'bg-red-100 text-red-800' 
                                    : 
                                    ($task->status === 'en_progreso' ? 'bg-yellow-100 text-yellow-800' : 
                                    'bg-green-100 text-green-800') }}">
                                        {{ $task->status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') : 'Sin fecha' }}
                                </td>
                                <td class="px-6 py-4 flex space-x-2">
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="text-blue-600 hover:text-blue-900">Editar</a>
                                    <form method="POST" action="{{ route('tasks.destroy', $task) }}" class="inline">
                                        @csrf @method('DELETE')
                                        <input type="hidden" name="page" value="{{ $tasks->currentPage() }}">
                                        <input type="hidden" name="status" value="{{ request('status') }}">
                                        <input type="hidden" name="assigned_to" value="{{ request('assigned_to') }}">
                                        <button type="submit" onclick="return confirm('¿Eliminar tarea?')" class="text-red-600 hover:text-red-900">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Paginación con filtros -->
                    {{ $tasks->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
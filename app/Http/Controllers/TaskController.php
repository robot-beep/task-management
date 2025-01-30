<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TaskController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::with(['assignedUser', 'creator'])
            ->when(request('status'), fn($q) => $q->where('status', request('status')))
            ->when(request('assigned_to'), fn($q) => $q->where('assigned_to', request('assigned_to')))
            ->paginate(10);

        $users = User::all();

        return view('tasks.index', compact('tasks', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();

        return view('tasks.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date|after:now',
            'status' => 'required|in:pendiente,en_progreso,completada',
            'assigned_to' => 'required|exists:users,id'
        ]);

        Task::create($validated + ['created_by' => Auth::id()]);


        return redirect()->route('tasks.index')
            ->with('success', 'Tarea creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $users = User::all();
        return view('tasks.create', compact('task', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date|after:now',
            'status' => 'required|in:pendiente,en_progreso,completada',
            'assigned_to' => 'required|exists:users,id'
        ]);

        $task->update($validated);

        return redirect()->route('tasks.index')
            ->with('success', 'Tarea actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task, Request $request)
    {
        $task->delete();

        // Obtener la página actual y los filtros desde la solicitud
        $page = $request->input('page', 1);
        $status = $request->input('status');
        $assigned_to = $request->input('assigned_to');

        // Redirigir a la página correcta con los filtros
        return redirect()->route('tasks.index', [
            'page' => $page,
            'status' => $status,
            'assigned_to' => $assigned_to,
        ])->with('success', 'Tarea eliminada exitosamente');
    }
}

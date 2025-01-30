<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_a_task()
    {
        $user = User::factory()->create(); 
        echo $user->id;
        $taskData = [
            'title' => 'Nueva tarea',
            'description' => 'Descripción de la tarea',
            'due_date' => '2025-05-15',
            'status' => 'pendiente',
            'assigned_to' => $user->id, 
            'created_by' => $user->id,
        ];

        $response = $this->actingAs($user)->post(route('tasks.store'), $taskData);

        $response->assertStatus(302); 
        $this->assertDatabaseHas('tasks', $taskData + ['created_by' => $user->id]); 
        $response->assertSessionHas('success', 'Tarea creada exitosamente'); 
    }

 
    public function test_can_update_a_task()
    {
        $user = User::factory()->create(); 
        $task = Task::factory()->create(['created_by' => $user->id]); 

        $updatedTaskData = [
            'title' => 'Tarea actualizada',
            'description' => 'Nueva descripción',
            'due_date' => '2025-05-30',
            'status' => 'en_progreso',
            'assigned_to' => $user->id, 
        ];

        $response = $this->actingAs($user)->put(route('tasks.update', $task), $updatedTaskData);

        $response->assertStatus(302); 
        $this->assertDatabaseHas('tasks', $updatedTaskData); 
        $response->assertSessionHas('success', 'Tarea actualizada exitosamente'); 
    }

    // Prueba para la eliminación de tareas
    public function test_can_delete_a_task()
    {
        $user = User::factory()->create(); 
        $task = Task::factory()->create(['created_by' => $user->id]);

        $response = $this->actingAs($user)->delete(route('tasks.destroy', $task));

        $response->assertStatus(302); 
        $this->assertDatabaseMissing('tasks', ['id' => $task->id]); 
        $response->assertSessionHas('success', 'Tarea eliminada exitosamente'); 
    }

    // Prueba para filtrar tareas por estado
    public function test_can_filter_tasks_by_status()
    {
        $user = User::factory()->create(); 
        Task::factory(2)->create(['status' => 'pendiente', 'created_by' => $user->id]); 
        Task::factory(1)->create(['status' => 'en_progreso', 'created_by' => $user->id]); 

        $response = $this->actingAs($user)->get(route('tasks.index', ['status' => 'pendiente']));

        $response->assertStatus(200); 
        $response->assertViewHas('tasks'); 
        $filteredTasks = $response->viewData('tasks');
        $this->assertCount(2, $filteredTasks);
        foreach ($filteredTasks as $task) {
            $this->assertEquals('pendiente', $task->status); 
        }
    }

    // Prueba para filtrar tareas por usuario asignado
    public function test_can_filter_tasks_by_assigned_user()
    {
        $user1 = User::factory()->create(); 
        $user2 = User::factory()->create();
        Task::factory(2)->create(['assigned_to' => $user1->id, 'created_by' => $user1->id]);
        Task::factory(1)->create(['assigned_to' => $user2->id, 'created_by' => $user2->id]); 

        $response = $this->actingAs($user1)->get(route('tasks.index', ['assigned_to' => $user1->id]));

        $response->assertStatus(200); 
        $response->assertViewHas('tasks'); 
        $filteredTasks = $response->viewData('tasks'); 
        $this->assertCount(2, $filteredTasks); 
        foreach ($filteredTasks as $task) {
            $this->assertEquals($user1->id, $task->assigned_to);
        }
    }
}
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     public function definition(): array
     {
         // Get a random existing User ID
         $randomUserId = User::inRandomOrder()->first()->id;
         $randomUserId2 = User::inRandomOrder()->first()->id;
     
         return [
             'title' => $this->faker->sentence(3),
             'description' => $this->faker->paragraph(1),
             'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
             'status' => $this->faker->randomElement(['en_progreso', 'pendiente', 'completada']),
             'assigned_to' => $randomUserId,  // Assign the random existing User ID
             'created_by' => $randomUserId2, // Assign the same (or a different, if needed) random existing User ID
         ];
     }
        
}

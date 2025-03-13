<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Task 1',
            'description' => 'Task 1 test',
            'due_date' => now(),
            'user_id' => 1,
            'category_id' => 1,
        ]);
    }
}

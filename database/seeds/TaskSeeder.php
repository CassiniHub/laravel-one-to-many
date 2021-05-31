<?php

use App\Employee;
use App\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class, 50) -> make() -> each(function($task) {
            $employee = Employee::inRandomOrder() -> first();
            $task -> employee_id = $employee -> id;
            $task -> save();
        });
    }
}

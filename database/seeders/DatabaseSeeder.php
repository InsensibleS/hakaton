<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         Company::factory(10)->create();
         Project::factory(10)->create();
         Task::factory(10)->create();
    }
}

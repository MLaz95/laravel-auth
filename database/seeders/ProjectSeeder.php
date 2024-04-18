<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newProject = new Project();
        $newProject->name = 'test';
        $newProject->description = 'testtest';
        $newProject->cover = 'testtest';
        $newProject->tech = 'testtest';
        $newProject->github = 'testtest';
        $newProject->save();
    }
}

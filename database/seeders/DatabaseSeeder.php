<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 2 companies
        $companies = Company::factory(2)->create();

        $projects = array();
        // Create 3 projects for each company
        for ($i=0; $i < count($companies); $i++) {
            $seedProjects = Project::factory(3)->create([
                'company_id' => $companies[$i]->id
            ]);

            foreach ( $seedProjects as $seedProject ) {
                array_push($projects, $seedProject);
            }
        }

        // Hire 3 employees for each project
        for ($i=0; $i < sizeof($projects); $i++) {
            Employee::factory(3)->create([
                'company_id' => $projects[$i]->company_id,
                'project_id' => $projects[$i]->id
            ]);
        }
    }
}

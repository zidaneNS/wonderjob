<?php

namespace Database\Seeders;

use App\Models\JobList;
use App\Models\Requirement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $requirements = Requirement::factory(3)->create();
        JobList::factory(10)->hasAttached($requirements)->create();
    }
}

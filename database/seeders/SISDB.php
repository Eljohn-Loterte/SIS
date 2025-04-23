<?php

namespace Database\Seeders;

use App\Models\StudentInfo;
use App\Models\subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SISDB extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            CurriculumSeeder::class,
        ]);
        
        StudentInfo::factory(800)->create();
    }
}

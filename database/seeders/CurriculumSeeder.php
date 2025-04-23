<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // BS BIO
            ['course' => 'BS BIOLOGY', 'year' => '1', 'sem' => '1', 'subject_name' => 'BIO 1'],
            ['course' => 'BS BIOLOGY', 'year' => '1', 'sem' => '1', 'subject_name' => 'CHEM 1'],
            ['course' => 'BS BIOLOGY', 'year' => '1', 'sem' => '1', 'subject_name' => 'STATISTICS'],
            ['course' => 'BS BIOLOGY', 'year' => '1', 'sem' => '1', 'subject_name' => 'ANAPHY 1'],
            ['course' => 'BS BIOLOGY', 'year' => '1', 'sem' => '1', 'subject_name' => 'PathFit'],

            ['course' => 'BS BIOLOGY', 'year' => '1', 'sem' => '2', 'subject_name' => 'BIO 2'],
            ['course' => 'BS BIOLOGY', 'year' => '1', 'sem' => '2', 'subject_name' => 'CHEM 2'],
            ['course' => 'BS BIOLOGY', 'year' => '1', 'sem' => '2', 'subject_name' => 'ANATOMY'],
            ['course' => 'BS BIOLOGY', 'year' => '1', 'sem' => '2', 'subject_name' => 'ANAPHY 2'],

            ['course' => 'BS BIOLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Understanding the Self'],
            ['course' => 'BS BIOLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Ethics'],
            ['course' => 'BS BIOLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Animal Life'],
            ['course' => 'BS BIOLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Fish Anatomy'],
            ['course' => 'BS BIOLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Bacteria and Organisms'],

            ['course' => 'BS BIOLOGY', 'year' => '2', 'sem' => '2', 'subject_name' => 'Life and works of Rizal'],
            ['course' => 'BS BIOLOGY', 'year' => '2', 'sem' => '2', 'subject_name' => 'Physics 1'],
            ['course' => 'BS BIOLOGY', 'year' => '2', 'sem' => '2', 'subject_name' => 'Zoology 1'],

            ['course' => 'BS BIOLOGY', 'year' => '3', 'sem' => '1', 'subject_name' => 'Art Application'],
            ['course' => 'BS BIOLOGY', 'year' => '3', 'sem' => '1', 'subject_name' => 'Physics 2'],
            ['course' => 'BS BIOLOGY', 'year' => '3', 'sem' => '1', 'subject_name' => 'Zoology 2'],

            ['course' => 'BS BIOLOGY', 'year' => '3', 'sem' => '2', 'subject_name' => 'Thesis 1'],
            ['course' => 'BS BIOLOGY', 'year' => '3', 'sem' => '2', 'subject_name' => 'BioPhysics 1'],
            ['course' => 'BS BIOLOGY', 'year' => '3', 'sem' => '2', 'subject_name' => 'Mathematics in the Modern World'],
            ['course' => 'BS BIOLOGY', 'year' => '3', 'sem' => '2', 'subject_name' => 'Science, Technology and Society'],

            ['course' => 'BS BIOLOGY', 'year' => '4', 'sem' => '1', 'subject_name' => 'Thesis 2'],
            ['course' => 'BS BIOLOGY', 'year' => '4', 'sem' => '1', 'subject_name' => 'BioPhysics 2'],

            ['course' => 'BS BIOLOGY', 'year' => '4', 'sem' => '2', 'subject_name' => 'OJT'],

            //BS CHEM
            ['course' => 'BS CHEMISTRY', 'year' => '1', 'sem' => '1', 'subject_name' => 'MOLECULES'],
            ['course' => 'BS CHEMISTRY', 'year' => '1', 'sem' => '1', 'subject_name' => 'CHEM 1'],
            ['course' => 'BS CHEMISTRY', 'year' => '1', 'sem' => '1', 'subject_name' => 'STATISTICS'],
            ['course' => 'BS CHEMISTRY', 'year' => '1', 'sem' => '1', 'subject_name' => 'PHYSICS 1'],

            ['course' => 'BS CHEMISTRY', 'year' => '1', 'sem' => '2', 'subject_name' => 'CHEMPHYSICS 1'],
            ['course' => 'BS CHEMISTRY', 'year' => '1', 'sem' => '2', 'subject_name' => 'CHEM 2'],
            ['course' => 'BS CHEMISTRY', 'year' => '1', 'sem' => '2', 'subject_name' => 'PHYSICS 2'],
            ['course' => 'BS CHEMISTRY', 'year' => '1', 'sem' => '2', 'subject_name' => 'Pathfit'],

            ['course' => 'BS CHEMISTRY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Understanding the Self'],
            ['course' => 'BS CHEMISTRY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Ethics'],
            ['course' => 'BS CHEMISTRY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Atomic Life'],
            ['course' => 'BS CHEMISTRY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Introduction to Advance Chemistry'],
            ['course' => 'BS CHEMISTRY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Chemical Reaction 1'],

            ['course' => 'BS CHEMISTRY', 'year' => '2', 'sem' => '2', 'subject_name' => 'Life and works of Rizal'],
            ['course' => 'BS CHEMISTRY', 'year' => '2', 'sem' => '2', 'subject_name' => 'ChemPhysics 2'],
            ['course' => 'BS CHEMISTRY', 'year' => '2', 'sem' => '2', 'subject_name' => 'Chem Diagram'],

            ['course' => 'BS CHEMISTRY', 'year' => '3', 'sem' => '1', 'subject_name' => 'Art Application'],
            ['course' => 'BS CHEMISTRY', 'year' => '3', 'sem' => '1', 'subject_name' => 'BioChem 1'],
            ['course' => 'BS CHEMISTRY', 'year' => '3', 'sem' => '1', 'subject_name' => 'Art of Chemistry'],

            ['course' => 'BS CHEMISTRY', 'year' => '3', 'sem' => '2', 'subject_name' => 'Thesis 1'],
            ['course' => 'BS CHEMISTRY', 'year' => '3', 'sem' => '2', 'subject_name' => 'BioPhysics 2'],
            ['course' => 'BS CHEMISTRY', 'year' => '3', 'sem' => '2', 'subject_name' => 'Mathematics in the Modern World'],
            ['course' => 'BS CHEMISTRY', 'year' => '3', 'sem' => '2', 'subject_name' => 'Science, Technology and Society'],

            ['course' => 'BS CHEMISTRY', 'year' => '4', 'sem' => '1', 'subject_name' => 'Thesis 2'],
            ['course' => 'BS CHEMISTRY', 'year' => '4', 'sem' => '1', 'subject_name' => 'THe Last subject of Chem'],

            ['course' => 'BS CHEMISTRY', 'year' => '4', 'sem' => '2', 'subject_name' => 'OJT'],

            //BS IT
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '1', 'sem' => '1', 'subject_name' => 'COM PROG 1'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '1', 'sem' => '1', 'subject_name' => 'Mathematics in the Modern World'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '1', 'sem' => '1', 'subject_name' => 'Human Repro'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '1', 'sem' => '1', 'subject_name' => 'Introduction to Comp'],

            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '1', 'sem' => '2', 'subject_name' => 'Physics for Comp'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '1', 'sem' => '2', 'subject_name' => 'Discrete Mathematics'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '1', 'sem' => '2', 'subject_name' => 'Pathfit'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '1', 'sem' => '2', 'subject_name' => 'COM PROG 2'],

            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Understanding the Self'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Ethics'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Object Oriented Programming'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Human Computer Interaction'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Envi Sci'],

            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '2', 'sem' => '2', 'subject_name' => 'Information Management 1'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '2', 'sem' => '2', 'subject_name' => 'Networking 1'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '2', 'sem' => '2', 'subject_name' => 'Web Sys'],

            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '3', 'sem' => '1', 'subject_name' => 'Information Management 2'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '3', 'sem' => '1', 'subject_name' => 'Networking 2'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '3', 'sem' => '1', 'subject_name' => 'Web Dev'],

            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '3', 'sem' => '2', 'subject_name' => 'Capstone 1'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '3', 'sem' => '2', 'subject_name' => 'App Dev'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '3', 'sem' => '2', 'subject_name' => 'Art Application'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '3', 'sem' => '2', 'subject_name' => 'Science, Technology and Society'],

            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '4', 'sem' => '1', 'subject_name' => 'Capstone 2'],
            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '4', 'sem' => '1', 'subject_name' => 'THe Life and Works of Rizal'],

            ['course' => 'BS INFORMATION TECHNOLOGY', 'year' => '4', 'sem' => '2', 'subject_name' => 'OJT'],

            //BS CS
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '1', 'sem' => '1', 'subject_name' => 'COM PROG 1'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '1', 'sem' => '1', 'subject_name' => 'Mathematics in the Modern World'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '1', 'sem' => '1', 'subject_name' => 'Human Repro'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '1', 'sem' => '1', 'subject_name' => 'Introduction to Comp'],

            ['course' => 'BS COMPUTER SCIENCE', 'year' => '1', 'sem' => '2', 'subject_name' => 'Physics for Comp'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '1', 'sem' => '2', 'subject_name' => 'Discrete Mathematics'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '1', 'sem' => '2', 'subject_name' => 'Pathfit'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '1', 'sem' => '2', 'subject_name' => 'COM PROG 2'],

            ['course' => 'BS COMPUTER SCIENCE', 'year' => '2', 'sem' => '1', 'subject_name' => 'Understanding the Self'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '2', 'sem' => '1', 'subject_name' => 'Ethics'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '2', 'sem' => '1', 'subject_name' => 'Object Oriented Programming'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '2', 'sem' => '1', 'subject_name' => 'Calculus 1'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '2', 'sem' => '1', 'subject_name' => 'Envi Sci'],

            ['course' => 'BS COMPUTER SCIENCE', 'year' => '2', 'sem' => '2', 'subject_name' => 'Information Management 1'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '2', 'sem' => '2', 'subject_name' => 'Networking 1'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '2', 'sem' => '2', 'subject_name' => 'Calculus 2'],

            ['course' => 'BS COMPUTER SCIENCE', 'year' => '3', 'sem' => '1', 'subject_name' => 'Information Management 2'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '3', 'sem' => '1', 'subject_name' => 'Networking 2'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '3', 'sem' => '1', 'subject_name' => 'Data Analytics'],

            ['course' => 'BS COMPUTER SCIENCE', 'year' => '3', 'sem' => '2', 'subject_name' => 'Thesis 1'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '3', 'sem' => '2', 'subject_name' => 'Data Science'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '3', 'sem' => '2', 'subject_name' => 'Art Application'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '3', 'sem' => '2', 'subject_name' => 'Science, Technology and Society'],

            ['course' => 'BS COMPUTER SCIENCE', 'year' => '4', 'sem' => '1', 'subject_name' => 'Thesis 2'],
            ['course' => 'BS COMPUTER SCIENCE', 'year' => '4', 'sem' => '1', 'subject_name' => 'THe Life and Works of Rizal'],

            ['course' => 'BS COMPUTER SCIENCE', 'year' => '4', 'sem' => '2', 'subject_name' => 'OJT'],

            //BS MET
            ['course' => 'BS METEOROLOGY', 'year' => '1', 'sem' => '1', 'subject_name' => 'COM PROG 1'],
            ['course' => 'BS METEOROLOGY', 'year' => '1', 'sem' => '1', 'subject_name' => 'Mathematics in the Modern World'],
            ['course' => 'BS METEOROLOGY', 'year' => '1', 'sem' => '1', 'subject_name' => 'Human Repro'],
            ['course' => 'BS METEOROLOGY', 'year' => '1', 'sem' => '1', 'subject_name' => 'Introduction to Meteorology'],

            ['course' => 'BS METEOROLOGY', 'year' => '1', 'sem' => '2', 'subject_name' => 'Physics 1'],
            ['course' => 'BS METEOROLOGY', 'year' => '1', 'sem' => '2', 'subject_name' => 'Basic Calculus'],
            ['course' => 'BS METEOROLOGY', 'year' => '1', 'sem' => '2', 'subject_name' => 'Pathfit'],
            ['course' => 'BS METEOROLOGY', 'year' => '1', 'sem' => '2', 'subject_name' => 'COM PROG 2'],

            ['course' => 'BS METEOROLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Understanding the Self'],
            ['course' => 'BS METEOROLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Ethics'],
            ['course' => 'BS METEOROLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Calculus 1'],
            ['course' => 'BS METEOROLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Advance Meteorology'],
            ['course' => 'BS METEOROLOGY', 'year' => '2', 'sem' => '1', 'subject_name' => 'Envi Sci'],

            ['course' => 'BS METEOROLOGY', 'year' => '2', 'sem' => '2', 'subject_name' => 'Calculus 2'],
            ['course' => 'BS METEOROLOGY', 'year' => '2', 'sem' => '2', 'subject_name' => 'Physics 2'],
            ['course' => 'BS METEOROLOGY', 'year' => '2', 'sem' => '2', 'subject_name' => 'Statistics'],

            ['course' => 'BS METEOROLOGY', 'year' => '3', 'sem' => '1', 'subject_name' => 'Data Analysis'],
            ['course' => 'BS METEOROLOGY', 'year' => '3', 'sem' => '1', 'subject_name' => 'Weathering 1'],
            ['course' => 'BS METEOROLOGY', 'year' => '3', 'sem' => '1', 'subject_name' => 'Climate Change'],

            ['course' => 'BS METEOROLOGY', 'year' => '3', 'sem' => '2', 'subject_name' => 'Thesis 1'],
            ['course' => 'BS METEOROLOGY', 'year' => '3', 'sem' => '2', 'subject_name' => 'Weathering 2'],
            ['course' => 'BS METEOROLOGY', 'year' => '3', 'sem' => '2', 'subject_name' => 'Art Application'],
            ['course' => 'BS METEOROLOGY', 'year' => '3', 'sem' => '2', 'subject_name' => 'Science, Technology and Society'],

            ['course' => 'BS METEOROLOGY', 'year' => '4', 'sem' => '1', 'subject_name' => 'Thesis 2'],
            ['course' => 'BS METEOROLOGY', 'year' => '4', 'sem' => '1', 'subject_name' => 'THe Life and Works of Rizal'],

            ['course' => 'BS METEOROLOGY', 'year' => '4', 'sem' => '2', 'subject_name' => 'OJT'],
        ];

        DB::table('curricula')->insert($data);
    }
}

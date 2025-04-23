<?php

namespace Database\Factories;

use App\Models\curriculum;
use App\Models\StudentInfo;
use App\Models\subject;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\studentInfo>
 */
class studentInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => strtoupper(Str::random(3)) . '-' . str_pad(fake()->numberBetween(1, 99999), 5, '0', STR_PAD_LEFT),
            'lName' => fake()->lastName(),
            'fName' => fake()->firstName(),
            'mName' => fake()->name(),
            'dob' => fake()->date(),
            'nationality' => 'Filipino',
            'gender' => fake()->randomElement(['Male', 'Female']),
            'civilStatus' => fake()->randomElement(['Single', 'Married', 'Widowed', 'Divorced']),
            'contactNo' => '091234567890',
            'pob' => fake()->city(),
            'lrn' => fake()->numberBetween(1000000, 1500000),
            'college' => 'College of Science',
            'course' => fake()->randomElement(['BS Biology', 'BS Chemistry', 'BS Computer Science', 'BS Information Technology', 'BS Meteorology']),
            'year' => fake()->randomElement(['1', '2', '3', '4']),
            'block' => fake()->randomElement(['A', 'B', 'C']),
            'sem' => fake()->randomElement(['1', '2']),
        ];
    }

    public function configure() {

        return $this->afterCreating(function (StudentInfo $student) {
            // Creating related parentInfo
            $student->parentInfo()->create([
                'mLName' => fake()->lastName(),
                'mFName' => fake()->firstName(),
                'mMName' => fake()->name(),
                'mDOB' => fake()->date(),
                'mNationality' => 'Filipino',   
                'mContact' => fake()->phoneNumber(),
                'fLName' => fake()->lastName(),
                'fFName' => fake()->firstName(),
                'fMName' => fake()->name(),
                'fDOB' => fake()->date(),
                'fNationality' => 'Filipino',   
                'fContact' => fake()->phoneNumber(),
                'gLName' => fake()->lastName(),
                'gFName' => fake()->firstName(),
                'gMName' => fake()->name(),  
                'gContact' => fake()->phoneNumber(),
            ]);
    
            // Creating related address
            $student->address()->create([
                'permStreet' => fake()->streetName(),
                'permCity' => fake()->city(),
                'permProvince' => 'Albay',
                'permPostal' => '4501',
                'currStreet' => fake()->streetName(),
                'currCity' => fake()->city(),
                'currProvince' => 'Albay',
                'currPostal' => '4501',
            ]);
    
            $curriculumSubjects = curriculum::where('course', $student->course)
            ->where('year', $student->year)
            ->where('sem', $student->sem)
            ->pluck('subject_name');

            $subjectIds = [];

            foreach ($curriculumSubjects as $subjectName) {
                $subject = \App\Models\subject::firstOrCreate(
                    ['subjectName' => $subjectName],
                    ['subjectId' => strtoupper(Str::random(8))]
                );

                $subjectIds[] = $subject->subjectId;
            }

            // Attach subjects to the student
            $student->subjects()->sync($subjectIds);
        });
    }
}

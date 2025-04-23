<?php

namespace App\Http\Controllers;

use App\Models\curriculum;
use Illuminate\Http\Request;
use App\Models\StudentInfo;
use App\Models\subject;
use Illuminate\Support\Str;

class StudInfo extends Controller
{
    public function store(Request $request) {
        
        $student = studentInfo::create([
            'id' =>  strtoupper(Str::random(3)) . '-' . str_pad(fake()->numberBetween(1, 99999), 5, '0', STR_PAD_LEFT),
            'lName' => $request->lName,
            'fName' => $request->fName,
            'mName' => $request->mName,
            'dob' => $request->dob,
            'nationality' => $request->nationality,
            'gender' => $request->gender,
            'civilStatus' => $request->civilStatus,
            'contactNo' => $request->contactNo,
            'pob' => $request->pob,
            'lrn' => $request->lrn,
            'college' => $request->college,
            'course' => $request->course,
            'year' => $request->year,
            'block' => $request->block,
            'sem' => $request->sem,
        ]);

        $student->parentInfo()->create([
            'mLName' => $request->mLName,
            'mFName' => $request->mFName,
            'mMName' => $request->mMName,
            'mDOB' => $request->mDOB,
            'mNationality' => $request->mNationality,
            'mContact' => $request->mContact,
            'fLName' => $request->fLName,
            'fFName' => $request->fFName,
            'fMName' => $request->fMName,
            'fDOB' => $request->fDOB,
            'fNationality' => $request->fNationality,
            'fContact' => $request->fContact,
            'gLName' => $request->gLName,
            'gFName' => $request->gFName,
            'gMName' => $request->gMName,
            'gContact' => $request->gContact,
        ]);

        $student->address()->create([
            'permStreet' => $request->permStreet,
            'permCity' => $request->permCity,
            'permProvince' => $request->permProvince,
            'permPostal' => $request->permPostal,
            'currStreet' => $request->currStreet,
            'currCity' => $request->currCity,
            'currProvince' => $request->currProvince,
            'currPostal' => $request->currPostal,
        ]);

        $curriculumSubjects = curriculum::where('course', $student->course)->where('year', $student->year)->where('sem', $student->sem)->pluck('subject_name');
        $subjectIds = [];

        foreach ($curriculumSubjects as $subjectName) {
            $subject = subject::firstOrCreate(
                ['subjectName' => $subjectName],
                ['subjectId' => strtoupper(Str::random(8))] // auto-generate unique subjectId
            );

            $subjectIds[] = $subject->subjectId;
        }

        $student->subjects()->sync($subjectIds);
        
        return view('enrollStudent');
    }

    //Functions

    public function index() { //display student info specifically used to display just the name
        $students = studentInfo::all();
        return view('studentInformation', compact('students'));
    }

    public function show($id) { //displaying all student details 
        $student = studentInfo::with(['parentInfo', 'address', 'subjects'])->findOrFail($id);

        $curricula = Curriculum::all();

        return view('studentInfoSpecific', compact('student', 'curricula'));
    }

    public function grade() { //display student info also but for grade blade directory
        $students = studentInfo::all();
        
        return view('gradeStudent', compact('students'));
    }

    public function grading($id) { //grading of students
        $student = studentInfo::with(['parentInfo', 'address', 'subjects'])->findOrFail($id);

        $curricula = Curriculum::all();
        
        return view('grading', compact('student', 'curricula'));
    }

    public function updateGrade(Request $request, $studentId) { //update the grade of the student
        
        $student = studentInfo::findOrFail($studentId);
        $grades = $request->input('grades'); // e.g., ['subjectId1' => '95', 'subjectId2' => '88']

        foreach ($grades as $subjectId => $grade) {
            $student->subjects()->updateExistingPivot($subjectId, ['grade' => $grade]);
        }

        return redirect()->back()->with('success', 'Grade updated successfully!');
    }

    public function edit($id) { //Edit student details . . . specifically for re enrolling student to higher grade
        $student = studentInfo::with(['parentInfo', 'address', 'subjects'])->findOrFail($id);
        return view('studentInfoEdit', compact('student'));
    }

    public function update(Request $request, $id) { //update student details append but not rewrite so the grade record must be kept
        $student = StudentInfo::findOrFail($id);

        // Validate the incoming year and semester
        $validated = $request->validate([
            'year' => 'required|numeric',
            'sem' => 'required|numeric',
        ]);

        // Update student year and semester in the students table
        $student->update([
            'year' => $validated['year'],
            'sem' => $validated['sem'],
        ]);

        // Get curriculum subjects for the updated year and sem
        $curriculumSubjects = Curriculum::where('course', $student->course)
            ->where('year', $student->year)
            ->where('sem', $student->sem)
            ->pluck('subject_name');

        $subjectIds = [];

        // Create or get the subjects for the new year/sem
        foreach ($curriculumSubjects as $subjectName) {
            $subject = Subject::firstOrCreate(
                ['subjectName' => $subjectName],
                ['subjectId' => strtoupper(Str::random(8))] // auto-generate unique subjectId
            );

            $subjectIds[] = $subject->subjectId;
        }

        // Sync subjects to student based on the new year/sem | Use `syncWithoutDetaching` to add new subjects without removing the existing ones, if needed.
        $student->subjects()->syncWithoutDetaching($subjectIds);

        // Return to the student's detail page
        return redirect()->route('studentInfoSpecific', ['id' => $student->id]);
    }


}

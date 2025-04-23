<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $incrementing = false; //identify its not auto inc
    protected $keyType = 'string'; //to identify that pk is a string

    public function parentInfo() {
        return $this->hasOne(parentInfo::class, 'studentId');
    }
    
    public function address() {
        return $this->hasOne(Address::class, 'studentId');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subjects', 'studentId', 'subjectsId')
                    ->withPivot('grade')
                    ->withTimestamps();
    }
 

}

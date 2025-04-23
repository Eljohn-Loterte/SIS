<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    protected $primaryKey = 'subjectId';
    public $incrementing = false;
    protected $keyType = 'string';


    protected $guarded = [];

    public function students()
    {
        return $this->belongsToMany(StudentInfo::class, 'student_subjects', 'subjectsId', 'studentId')
                    ->withPivot('grade')
                    ->withTimestamps();
    }

}

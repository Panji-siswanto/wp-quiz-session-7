<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'student_id', 
        'phone', 
        'address', 
        'city',
        'birth_date'
    ];

    // 1 Profile belongs to 1 Student (1-1)
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

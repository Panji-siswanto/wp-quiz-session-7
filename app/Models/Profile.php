<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id', 
        'phone', 
        'address', 
        'city',
        'birth_date'
    ];

    public function student()// 1 Profile belongs to 1 Student (1-1)
    {
        return $this->belongsTo(Student::class);
    }
}

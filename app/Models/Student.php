<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nim',
        'name',
        'major_id'
    ];

    public function profile() // each has one profile (1-1)
    {
        return $this->hasOne(Profile::class);
    }

    public function major() // belongs to one major (1-1, inverse from major)
    {
        return $this->belongsTo(Major::class);
    }

    public function lectures()// multiple lectures(M-M, via lecture_student table)
    {
        return $this->belongsToMany(Lecture::class);
    }
}
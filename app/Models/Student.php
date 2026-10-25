<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model 
{
    use HasFactory, SoftDeletes;
       
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
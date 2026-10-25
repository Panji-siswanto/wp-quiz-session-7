<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'code', 
        'title', 
        'lecturer_name', 
        'credits'];

    public function students() //(M-M, via lecture+_student table)
    {
        return $this->belongsToMany(Student::class);
    }
}

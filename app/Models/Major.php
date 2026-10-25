<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable = [
        'code',
        'name',
        'faculty'
    ];

    public function students() //one major has many studnts (1-M)
    {
        return $this->hasMany(Student::class);
    }
}

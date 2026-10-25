<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Student;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function oneToOne()
    {
        $students = Student::all();
        return view('one-to-one', compact('students'));
    }

    public function oneToMany()
    {
        $majors = Major::all();
        return view('one-to-many', compact('majors'));
    }

    public function manyToMany()
    {
        $students = Student::all();
        return view('many-to-many', compact('students'));
    }
}

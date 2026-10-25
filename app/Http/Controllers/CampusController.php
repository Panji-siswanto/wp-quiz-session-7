<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Student;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function oneToOne()
    {
        $students = Student::withTrashed()->with('profile')->get();
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

        public function softDelete($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/one-to-one')->with('success', "Student {$student->name} soft-deleted successfully!");
    }

    public function forceDelete($id)
    {
        $student = Student::withTrashed()->findOrFail($id);
        $student->forceDelete();

        return redirect('/one-to-one')->with('success', "Student {$student->name} permanently deleted!");
    }

    public function restore($id)
    {
        $student = Student::withTrashed()->findOrFail($id);
        $student->restore();

        return redirect('/one-to-one')->with('success', "Student {$student->name} restored successfully!");
    }
}

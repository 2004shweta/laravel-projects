<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\FormStudentRequest;


class StudentController extends Controller
{
    //
    // public function index()
    // {
    //     $students = Student::all(); // Fetch all student data
    //     return view('students.index', compact('students'));
    // }
    public function index()
{
    $students = Student::all();
    return view('students.index', compact('students'));
}

    

}

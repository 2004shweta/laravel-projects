<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormStudentRequest;

class FormStudentController extends Controller
{
    //
    public function create() {
        return view('formstudent');
    }

    public function store(FormStudentRequest $request) {
        return back()->with('success', 'Form submitted successfully!');
    }
}


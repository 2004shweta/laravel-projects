<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function handleForm(Request $request)
    {
        // Get form data
        $data = $request->all();

        // Display the submitted data
        return view('form', ['data' => $data]);
    }
}


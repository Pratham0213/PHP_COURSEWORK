<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\StudentRecord;

class StudentRecordController extends Controller
{
    public function create()
    {
        return view('student_records.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'roll_no' => 'required|string|unique:student_records',
            'dob' => 'required|date',
            'admission_no' => 'required|string|unique:student_records',
            'class' => 'required|string',
        ]);

        StudentRecord::create($request->all());

        return redirect()->back()->with('success', 'Student record saved successfully!');
    }
}


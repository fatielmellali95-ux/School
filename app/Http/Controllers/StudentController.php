<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }

    public function create()
    {
        return view('create');
    }


public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'section' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $imageName = time() . '.' . $request->image->extension();

    $request->image->move(public_path('image'), $imageName);

    Student::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'section' => $request->section,
        'image' => $imageName,
    ]);

    return redirect()->route('students.index');
}


    public function show(Student $student)
    {
         return view('show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }


public function update(Request $request, Student $student)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'section' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $imageName = $student->image;

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('image'), $imageName);
    }

    $student->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'section' => $request->section,
        'image' => $imageName,
    ]);

    return redirect()->route('students.index');
}


    public function destroy(Student $student)
    {
        //
    }
}


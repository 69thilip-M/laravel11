<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $students = Student::all();
        return view('student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Student::create($input);
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $student = Student::find($id);
        return view('student.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $student = Student::find($id);
        return view('student.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);
        return redirect()->back();
    }
}

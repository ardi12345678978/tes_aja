<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'nilai1' => 'required|integer',
            'nilai2' => 'required|integer',
            'nilai3' => 'required|integer',
        ]);

        $rata2 = ($data['nilai1'] + $data['nilai2'] + $data['nilai3']) / 3;
        $grade = $rata2 >= 86 ? 'A' : ($rata2 >= 80 ? 'B' : 'C');

        $data['nilai_rata2'] = $rata2;
        $data['grade'] = $grade;

        Student::create($data);
        return redirect()->route('students.index');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'nilai1' => 'required|integer',
            'nilai2' => 'required|integer',
            'nilai3' => 'required|integer',
        ]);

        $rata2 = ($data['nilai1'] + $data['nilai2'] + $data['nilai3']) / 3;
        $grade = $rata2 >= 86 ? 'A' : ($rata2 >= 80 ? 'B' : 'C');

        $data['nilai_rata2'] = $rata2;
        $data['grade'] = $grade;

        $student->update($data);
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}

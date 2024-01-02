<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'Imie' => 'required',
            'Nazwisko' => 'required',
            'Ocena' => 'required',
        ]);
        $newStudent = Student::create($data);
        return view('welcome');
    }

    public function read(){
        $students = Student::all();
        return view('student', ['students' => $students]);
    }

    public function update(Student $student){
        return view('update', ['student' => $student]);
    }

    public function dbupdate(Student $student, Request $request){
        $data = $request->validate([
            'Imie' => 'required',
            'Nazwisko' => 'required',
            'Ocena' => 'required',
        ]);
        $student->update($data);
        return redirect(route('student.read'));
    }
      public function delete(Student $student){
        $student->delete();
        return redirect(route('student.read'));
    }
}

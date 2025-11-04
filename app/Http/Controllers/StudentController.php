<?php


namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
public function index(){
$students = Student::orderBy('id','desc')->paginate(15);
return view('students.index', compact('students'));
}


public function create(){ return view('students.create'); }


public function store(Request $request){
$data = $request->validate([
'name'=>'required|string|max:255',
'email'=>'nullable|email|unique:students,email',
'roll_no'=>'required|unique:students,roll_no',
'class'=>'nullable|string',
'phone'=>'nullable|string',
'address'=>'nullable|string',
]);
Student::create($data);
return redirect()->route('students.index')->with('success','Student added');
}


public function show(Student $student){ return view('students.show', compact('student')); }


public function edit(Student $student){ return view('students.edit', compact('student')); }


public function update(Request $request, Student $student){
$data = $request->validate([
'name'=>'required|string|max:255',
'email'=>'nullable|email|unique:students,email,'.$student->id,
'roll_no'=>'required|unique:students,roll_no,'.$student->id,
'class'=>'nullable|string',
'phone'=>'nullable|string',
'address'=>'nullable|string',
]);
$student->update($data);
return redirect()->route('students.index')->with('success','Student updated');
}


public function destroy(Student $student){
$student->delete();
return redirect()->route('students.index')->with('success','Student deleted');
}
}
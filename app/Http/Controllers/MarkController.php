<?php


namespace App\Http\Controllers;


use App\Models\Mark;
use App\Models\Student;
use Illuminate\Http\Request;


class MarkController extends Controller
{
public function index(){ $marks = Mark::with('student')->latest()->paginate(20); return view('marks.index', compact('marks')); }
public function create(){ $students = Student::orderBy('name')->get(); return view('marks.create', compact('students')); }
public function store(Request $request){
$data = $request->validate([
'student_id'=>'required|exists:students,id',
'subject'=>'required|string',
'marks_obtained'=>'required|integer|min:0',
'max_marks'=>'nullable|integer|min:1'
]);
Mark::create($data);
return redirect()->route('marks.index')->with('success','Marks saved');
}
public function edit(Mark $mark){ $students = Student::orderBy('name')->get(); return view('marks.edit', compact('mark','students')); }
public function update(Request $request, Mark $mark){
$data = $request->validate([
'student_id'=>'required|exists:students,id',
'subject'=>'required|string',
'marks_obtained'=>'required|integer|min:0',
'max_marks'=>'nullable|integer|min:1'
]);
$mark->update($data);
return redirect()->route('marks.index')->with('success','Marks updated');
}
public function destroy(Mark $mark){ $mark->delete(); return redirect()->route('marks.index')->with('success','Deleted'); }
}
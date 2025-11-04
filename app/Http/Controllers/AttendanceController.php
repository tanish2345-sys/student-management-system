<?php
namespace App\Http\Controllers;


use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Http\Request;


class AttendanceController extends Controller
{
public function index(){
$attendances = Attendance::with('student')->latest()->paginate(20);
return view('attendances.index', compact('attendances'));
}


public function create(){
$students = Student::orderBy('name')->get();
return view('attendances.create', compact('students'));
}


public function store(Request $request){
$data = $request->validate([
'student_id'=>'required|exists:students,id',
'date'=>'required|date',
'status'=>'required|in:present,absent,leave'
]);
Attendance::updateOrCreate([
'student_id'=>$data['student_id'],'date'=>$data['date']
], $data);
return redirect()->route('attendances.index')->with('success','Attendance saved');
}


public function edit(Attendance $attendance){
$students = Student::orderBy('name')->get();
return view('attendances.edit', compact('attendance','students'));
}


public function update(Request $request, Attendance $attendance){
$data = $request->validate([
'student_id'=>'required|exists:students,id',
'date'=>'required|date',
'status'=>'required|in:present,absent,leave'
]);
$attendance->update($data);
return redirect()->route('attendances.index')->with('success','Attendance updated');
}


public function destroy(Attendance $attendance){
$attendance->delete();
return redirect()->route('attendances.index')->with('success','Deleted');
}
}
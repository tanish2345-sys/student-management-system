<?php


namespace App\Http\Controllers;


use App\Models\Fee;
use App\Models\Student;
use Illuminate\Http\Request;


class FeeController extends Controller
{
public function index(){ $fees = Fee::with('student')->latest()->paginate(20); return view('fees.index', compact('fees')); }
public function create(){ $students = Student::orderBy('name')->get(); return view('fees.create', compact('students')); }
public function store(Request $request){
$data = $request->validate([
'student_id'=>'required|exists:students,id',
'amount'=>'required|numeric|min:0',
'paid_on'=>'nullable|date',
'status'=>'required|in:pending,paid',
'description'=>'nullable|string'
]);
Fee::create($data);
return redirect()->route('fees.index')->with('success','Fee record saved');
}
public function edit(Fee $fee){ $students = Student::orderBy('name')->get(); return view('fees.edit', compact('fee','students')); }
public function update(Request $request, Fee $fee){
$data = $request->validate([
'student_id'=>'required|exists:students,id',
'amount'=>'required|numeric|min:0',
'paid_on'=>'nullable|date',
'status'=>'required|in:pending,paid',
'description'=>'nullable|string'
]);
$fee->update($data);
return redirect()->route('fees.index')->with('success','Fee updated');
}
public function destroy(Fee $fee){ $fee->delete(); return redirect()->route('fees.index')->with('success','Deleted'); }
}
@extends('layouts.app')
@section('content')
<h3>Edit Student</h3>
<form method="POST" action="{{ route('students.update',$student) }}">
@csrf @method('PUT')
<div class="mb-3"><label>Name</label><input name="name" class="form-control" value="{{ old('name',$student->name) }}" required></div>
<div class="mb-3"><label>Email</label><input name="email" class="form-control" value="{{ old('email',$student->email) }}"></div>
<div class="mb-3"><label>Roll No</label><input name="roll_no" class="form-control" value="{{ old('roll_no',$student->roll_no) }}" required></div>
<div class="mb-3"><label>Class</label><input name="class" class="form-control" value="{{ old('class',$student->class) }}"></div>
<div class="mb-3"><label>Phone</label><input name="phone" class="form-control" value="{{ old('phone',$student->phone) }}"></div>
<div class="mb-3"><label>Address</label><textarea name="address" class="form-control">{{ old('address',$student->address) }}</textarea></div>
<button class="btn btn-primary">Update</button>
</form>
@endsection
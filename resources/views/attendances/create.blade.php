@extends('layouts.app')
@section('content')
<h3>Mark Attendance</h3>
<form method="POST" action="{{ route('attendances.store') }}">
@csrf
<div class="mb-3">
<label>Student</label>
<select name="student_id" class="form-control">
@foreach($students as $s) <option value="{{ $s->id }}">{{ $s->name }} ({{ $s->roll_no }})</option> @endforeach
</select>
</div>
<div class="mb-3"><label>Date</label><input type="date" name="date" class="form-control" value="{{ date('Y-m-d') }}"></div>
<div class="mb-3"><label>Status</label>
<select name="status" class="form-control"><option value="present">Present</option><option value="absent">Absent</option><option value="leave">Leave</option></select>
</div>
<button class="btn btn-primary">Save</button>
</form>
@endsection
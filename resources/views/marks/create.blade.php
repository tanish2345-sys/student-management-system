@extends('layouts.app')
@section('content')
<h3>Add Marks</h3>
<form method="POST" action="{{ route('marks.store') }}">@csrf
<div class="mb-3"><label>Student</label><select name="student_id" class="form-control">@foreach($students as $s)<option value="{{ $s->id }}">{{ $s->name }}</option>@endforeach</select></div>
<div class="mb-3"><label>Subject</label><input name="subject" class="form-control"></div>
<div class="mb-3"><label>Marks Obtained</label><input name="marks_obtained" type="number" class="form-control"></div>
<div class="mb-3"><label>Max Marks</label><input name="max_marks" type="number" class="form-control" value="100"></div>
<button class="btn btn-primary">Save</button>
</form>
@endsection
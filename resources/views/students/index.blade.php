@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
<h3>Students</h3>
<a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
</div>
<table class="table table-striped">
<thead><tr><th>#</th><th>Name</th><th>Roll No</th><th>Class</th><th>Actions</th></tr></thead>
<tbody>
@foreach($students as $s)
<tr>
<td>{{ $s->id }}</td>
<td><a href="{{ route('students.show',$s) }}">{{ $s->name }}</a></td>
<td>{{ $s->roll_no }}</td>
<td>{{ $s->class }}</td>
<td>
<a href="{{ route('students.edit',$s) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
<form action="{{ route('students.destroy',$s) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete?')">
@csrf @method('DELETE')
<button class="btn btn-sm btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
{{ $students->links() }}
@endsection
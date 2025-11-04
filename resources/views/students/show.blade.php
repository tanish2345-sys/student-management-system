@extends('layouts.app')
@section('content')
<h3>{{ $student->name }}</h3>
<p><strong>Roll No:</strong> {{ $student->roll_no }}</p>
<p><strong>Class:</strong> {{ $student->class }}</p>
<p><strong>Email:</strong> {{ $student->email }}</p>
<p><strong>Phone:</strong> {{ $student->phone }}</p>
<hr>
<h5>Attendance</h5>
<ul>
@foreach($student->attendances as $a)
<li>{{ $a->date }} - {{ $a->status }}</li>
@endforeach
</ul>
<h5>Marks</h5>
<ul>
@foreach($student->marks as $m)
<li>{{ $m->subject }}: {{ $m->marks_obtained }}/{{ $m->max_marks }}</li>
@endforeach
</ul>
<h5>Fees</h5>
<ul>
@foreach($student->fees as $f)
<li>{{ $f->amount }} - {{ $f->status }} @if($f->paid_on) ({{ $f->paid_on }}) @endif</li>
@endforeach
</ul>
@endsection
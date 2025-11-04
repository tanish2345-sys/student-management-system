@extends('layouts.app')

@section('content')
    <h3>Attendance List</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->id }}</td>
                    <td>{{ $attendance->student->name ?? 'N/A' }}</td>
                    <td>{{ $attendance->date }}</td>
                    <td>{{ $attendance->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
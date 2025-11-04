@extends('layouts.app')

@section('content')
    <h3>Marks List</h3>

    <a href="{{ route('marks.create') }}" class="btn btn-primary mb-3">Add Marks</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Subject</th>
                <th>Marks</th>
                <th>Exam Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marks as $mark)
                <tr>
                    <td>{{ $mark->id }}</td>
                    <td>{{ $mark->student->name ?? 'N/A' }}</td>
                    <td>{{ $mark->subject }}</td>
                    <td>{{ $mark->marks }}</td>
                    <td>{{ $mark->exam_date }}</td>
                    <td>
                        <a href="{{ route('marks.edit', $mark->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('marks.destroy', $mark->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this record?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
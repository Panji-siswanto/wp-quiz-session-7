@extends('layout.master')

@section('title', 'Many To Many Relationship')

@section('content')
<div class="card p-4">
    <h5 class="text-center fw-bold mb-4">Many To Many</h5>

    <table class="table table-bordered table-striped mb-0">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Major</th>
                <th>Enrolled Courses</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->name }} ({{ $student->nim }})</td>
                    <td>{{ $student->major->name }}</td>
                    <td>
                        @forelse ($student->lectures as $lecture)
                            <div>• {{ $lecture->code }} - {{ $lecture->title }} ({{ $lecture->credits }} Credits)</div>
                        @empty
                            <span class="text-muted">No lectures taken</span>
                        @endforelse
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No student data available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

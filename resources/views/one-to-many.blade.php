@extends('layout.master')

@section('title', 'One To Many Relationship')

@section('content')
<div class="card p-4">
    <h5 class="text-center fw-bold mb-4">Laravel Eloquent Relationship : One To Many (Major &amp; Students)</h5>

    <table class="table table-bordered table-striped mb-0">
        <thead>
            <tr>
                <th>Major Code</th>
                <th>Major Name</th>
                <th>Faculty</th>
                <th>Enrolled Students</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($majors as $major)
                <tr>
                    <td>{{ $major->code }}</td>
                    <td>{{ $major->name }}</td>
                    <td>{{ $major->faculty }}</td>
                    <td>
                        @forelse ($major->students as $student)
                            <div>• {{ $student->name }} ({{ $student->nim }})</div>
                        @empty
                            <span class="text-muted">No students enrolled yet</span>
                        @endforelse
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No major data available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

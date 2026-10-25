@extends('layout.master')

@section('title', 'One To One Relationship')

@section('content')
<div class="card p-4">
    <h5 class="text-center fw-bold mb-4">Laravel Eloquent Relationship : One To One (Student &amp; Profile)</h5>

    <table class="table table-bordered table-striped mb-0">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Student Name</th>
                <th>Phone</th>
                <th>Birth Date</th>
                <th>Address &amp; City</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->profile->phone }}</td>
                    <td>{{ $student->profile->birth_date }}</td>
                    <td>{{ $student->profile->address }}, {{ $student->profile->city }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No student data available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

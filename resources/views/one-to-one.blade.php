@extends('layout.master')

@section('title', 'One To One Relationship')

@section('content')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card p-4">
    <h5 class="text-center fw-bold mb-4">One to One</h5>

    <table class="table table-bordered table-striped mb-0 align-middle">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Student Name</th>
                <th>Phone</th>
                <th>Birth Date</th>
                <th>Address &amp; City</th>
                <th class="text-center" style="width: 220px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr class="{{ $student->trashed() ? 'table-secondary text-muted' : '' }}">
                    <td>{{ $student->nim }}</td>
                    <td>
                        {{ $student->name }}
                        @if ($student->trashed())
                            <span class="badge bg-secondary ms-1">Soft Deleted</span>
                        @endif
                    </td>
                    <td>{{ $student->profile ? $student->profile->phone : '-' }}</td>
                    <td>{{ $student->profile ? $student->profile->birth_date : '-' }}</td>
                    <td>{{ $student->profile ? $student->profile->address . ', ' . $student->profile->city : '-' }}</td>
                    <td class="text-center">
                        @if ($student->trashed())
                            <!-- Restore Action -->
                            <form action="{{ url('/students/' . $student->id . '/restore') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Restore</button>
                            </form>
                            <!-- Permanent Delete Action -->
                            <form action="{{ url('/students/' . $student->id . '/force-delete') }}" method="POST" class="d-inline" onsubmit="return confirm('Permanently delete this student?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        @else
                            <!-- Soft Delete Action -->
                            <form action="{{ url('/students/' . $student->id . '/soft-delete') }}" method="POST" class="d-inline" onsubmit="return confirm('Soft delete this student?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning btn-sm">Soft Delete</button>
                            </form>
                            <!-- Permanent Delete Action -->
                            <form action="{{ url('/students/' . $student->id . '/force-delete') }}" method="POST" class="d-inline" onsubmit="return confirm('Permanently delete this student?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No student data available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

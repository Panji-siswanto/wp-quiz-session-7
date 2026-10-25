@extends('layout.master')

@section('title', 'Campus Article')

@section('content')
<div class="py-2">
    <h1 class="fw-bold mb-2">{{ $title }}</h1>
    <p class="text-muted mb-4">Written by {{ $author }} | Published on {{ $date }}</p>

    <div class="card p-4">
        <p>
            Welcome to Campus Academic Portal. This application manages student data, majors, and class enrollments using <strong>Laravel Eloquent ORM</strong>:
        </p>
        <ul>
            <li><strong>One-to-One:</strong> Links each student to their personal profile.</li>
            <li><strong>One-to-Many:</strong> Connects each major to its enrolled students.</li>
            <li><strong>Many-to-Many:</strong> Allows students to enroll in multiple lecture classes.</li>
        </ul>
        <p class="mb-0">
            Built with <strong>Laravel</strong> and <strong>Bootstrap 5</strong>.
        </p>
    </div>
</div>
@endsection
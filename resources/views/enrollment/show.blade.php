@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Enrollment Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Enrollement Number : {{ $enrollments->enroll_no }}</h5>
                <p class="card-text">Batch ID : {{ $enrollments->batch_id }}</p>
                <p class="card-text">Student ID : {{ $enrollments->student_id }}</p>
                <p class="card-text">Joined Date : {{ $enrollments->join_date }}</p>
                <p class="card-text">Fee : {{ $enrollments->fee }}</p>
            </div>
            </hr>
        </div>
    </div>
@endsection

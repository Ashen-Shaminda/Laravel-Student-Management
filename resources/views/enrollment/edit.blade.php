@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">
            <form action="{{ route('enrollment.update', $enrollments->id) }}" method="post">
                @csrf
                @method('put')
                <label>Enrollment Number</label></br>
                <input type="text" name="enroll_no" id="enroll_no" class="form-control"
                    value="{{ $enrollments->enroll_no }}"></br>
                <label>Batch ID</label></br>
                <input type="text" name="batch_id" id="batch_id" class="form-control"
                    value="{{ $enrollments->batch_id }}"></br>
                <label>Student ID</label></br>
                <input type="text" name="student_id" id="student_id" class="form-control"
                    value="{{ $enrollments->student_id }}""></br>
                <label>Joined Date</label></br>
                <input type="text" name="join_date" id="join_date" class="form-control"
                    value="{{ $enrollments->join_date }}"></br>
                <label>Fee</label></br>
                <input type="text" name="fee" id="fee" class="form-control"
                    value="{{ $enrollments->fee }}"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
        </div>
    </div>

@stop

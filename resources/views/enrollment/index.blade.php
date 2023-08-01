@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Enrollment</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('enrollment.create') }}" class="btn btn-success btn-sm" title="Add New Enrollment">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Add New Enrollment
            </a>
            <br />
            <br />
            @if (session('flash_message'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('flash_message') }}
                </div>
            @endif
            <br />
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enrollment Number</th>
                            <th>Batch ID</th>
                            <th>Student ID</th>
                            <th>Joined Date</th>
                            <th>Fee</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($enrollments as $enrollment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $enrollment->enroll_no }}</td>
                                <td>{{ $enrollment->batch->name }}</td>
                                <td>{{ $enrollment->student->name }}</td>
                                <td>{{ $enrollment->join_date }}</td>
                                <td>{{ $enrollment->fee }}</td>
                                <td>
                                    <a href="{{ route('enrollment.show', $enrollment->id) }}" title="View enrollment">
                                        <button class="btn btn-info btn-sm">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            View
                                        </button>
                                    </a>
                                    <a href="{{ route('enrollment.edit', $enrollment->id) }}" title="Edit enrollment">
                                        <button class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            Edit
                                        </button>
                                    </a>

                                    <form method="POST" action="{{ url('/enrollment' . '/' . $enrollment->id) }}"
                                        accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Entrollement"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

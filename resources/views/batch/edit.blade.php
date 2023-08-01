@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">

            <form action="{{ route('batches.update', $batches->id) }}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id" value="{{ $batches->id }}" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $batches->name }}" class="form-control"></br>
                <label>Course</label></br>
                <select name="course_id" id="course_id" class="form-control">
                    @foreach ($courses as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select><br>
                <label>Start Time</label></br>
                <input type="text" name="start_time" id="start_time" value="{{ $batches->start_time }}"
                    class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
        </div>
    </div>

@stop

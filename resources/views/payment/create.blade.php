@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Enrollment Page</div>
        <div class="card-body">

            <form action="{{ route('enrollment.store') }}" method="post">
                {!! csrf_field() !!}
                <label>Enrollment Number</label></br>
                <select name="enrollment_no" id="enrollment_no" class="form-control">
                    @foreach ($payments as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select></br>
                <label>Paid Date</label></br>
                <input type="text" name="paid_date" id="paid_date" class="form-control"></br>
                <label>Amount</label></br>
                <input type="text" name="amount" id="amount" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop

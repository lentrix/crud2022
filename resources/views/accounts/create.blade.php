@extends('base')

@section('content')

<h1>Create Account</h1>

<div class="row">
    <div class="col-md-4">
        {!! Form::open(['url'=>'/accounts', 'method'=>'post']) !!}

        <div class="mb-3">
            {!! Form::label("user_id", "Select User") !!}
            {!! Form::select("user_id", $users, null, ['class'=>'form-select', 'placeholder'=>'Select user']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("type", "Account Type") !!}
            {!! Form::select("type", [
                'regular'=>'Regular',
                'housing'=>'Housing Loan',
                'calamity'=>'Calamity Loan'
            ], null, ['class'=>'form-select', 'placeholder'=>'Select user']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("balance", "Balance") !!}
            {!! Form::number("balance", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("due", "Due Date") !!}
            {!! Form::number("due", null, ['class'=>'form-control','max'=>'31','min'=>'1']) !!}
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>

        {!! Form::close() !!}
    </div>
</div>

@endsection

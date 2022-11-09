@extends('base')

@section('content')

<h1>Create User</h1>

<div class="row">
    <div class="col-md-4">
        {!! Form::open(['url'=>'/users', 'method'=>'post']) !!}

            <div class="mb-3">
                {!! Form::label("name", "User Name") !!}
                {!! Form::text("name", null, ['class'=>'form-control']) !!}
            </div>

            <div class="mb-3">
                {!! Form::label("email", "Email") !!}
                {!! Form::email("email", null, ['class'=>'form-control']) !!}
            </div>

            <div class="mb-3">
                {!! Form::label("password", "Password") !!}
                {!! Form::password("password", ['class'=>'form-control']) !!}
            </div>

            <button class="btn btn-primary" type="submit">Submit</button>

        {!! Form::close() !!}
    </div>
</div>

@endsection

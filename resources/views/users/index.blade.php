@extends('base')

@section('content')

<div class="float-end">
    <a href="{{url('/users/create')}}" class="btn btn-primary">Create User</a>
</div>
<h1>Users</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

@extends('base')

@section('content')

<div class="float-end">
    <a href="{{url('/accounts/create')}}" class="btn btn-primary">Create Account</a>
</div>

<h1>Accounts</h1>

<table class="table table-bordered">
    <thead>
        <tr class="bg-primary text-white">
            <th>User</th>
            <th>Type</th>
            <th>Balance</th>
            <th>Due Day</th>
        </tr>
    </thead>
    <tbody>

        @foreach($accounts as $account)
            <tr>
                <td>{{$account->user->name}}</td>
                <td>{{$account->type}}</td>
                <td>{{$account->balance}}</td>
                <td>{{$account->due}}</td>
            </tr>
        @endforeach

    </tbody>
</table>

@endsection

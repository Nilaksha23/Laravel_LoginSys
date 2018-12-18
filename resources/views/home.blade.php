@extends('layouts/main')

@section('body')
    <h2>Welcome</h2>

    <ul>
        <li>First Name = {{ Auth::user()->first_name }} </li>
        <li>Last Name  = {{ Auth::user()->last_name }} </li>
        <li>Email      = {{ Auth::user()->email }} </li>
        <li><a href=" {{route('signout')}}">Logout</a></li>
    </ul>
@endsection
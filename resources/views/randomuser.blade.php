@extends('layouts.welcome')
@section('content')
    <h1>Random User</h1>

    <!--<form method='POST' action='randomuser/post'>-->
    <form role="form" ng-submit="generateUsers()">
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        Number of Users: <input type='text' name='num' ng-model='num'><br/>
        Birthday: <input type='checkbox' name='birthday' ng-model='birthday'><br/>
        Profile: <input type='checkbox' name='profile' ng-model='profile'><br/>
        <button type='submit'>Generate</button>
    </form>


    <p>@{{ users }}</p>

@stop
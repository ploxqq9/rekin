@extends('layouts.master')

@section('title')
    Rekin
@endsection

@section('content')
    <h1>Logowanie</h1>
    <form action="{{ route('userlogin') }}" method="post">
        <p>
            <label for="login">Login:</label>
            <input type="text" name="login" id="login">
        </p>
        <p>
            <label for="password">Hasło:</label>
            <input type="password" name="password" id="password">
        </p>
        <p>
            <button type="submit">Zaloguj</button>
        </p>
    </form>
    <p><a href="{{ route('admloginview') }}">Administrator</a> </p>
@endsection
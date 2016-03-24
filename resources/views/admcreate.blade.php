@extends('layouts.master')

@section('title')
    Rekin
@endsection

@section('content')
    <h1>Tworzenie Administratora</h1>
    <form action="{{ route('admcreate') }}" method="post">
        <p>
            <label for="email">email:</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label for="token">Token:</label>
            <input type="password" name="token" id="token">
        </p>
        <p>
            <button type="submit">Stwórz</button>
        </p>
    </form>
    <p><a href="{{ route('admloginview') }}">backadmpanel</a></p>
@endsection
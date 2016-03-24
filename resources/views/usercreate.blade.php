@extends('layouts.master')

@section('title')
    Rekin
@endsection

@section('content')
    <h1>Tworzenie użytkownika</h1>
    <form action="{{ route('usercreate') }}" method="post">
        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <lable for="Role">Rola</lable>
            <select name="role">
                <option value="pupil" selected>Uczeń</option>
                <option value="teacher">Nauczyciel</option>
                <option value="parent">Rodzic</option>
            </select>
        </p>
        <p>
            <button type="submit">Stwórz</button>
        </p>
    </form>
@endsection
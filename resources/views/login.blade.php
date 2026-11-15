@extends('layout.app')
@section('content')
    <h1>Login</h1>
    <form action="/login" method="POST" novalidate>
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>
        @error('email')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        @error('password')
            <span style="color: red;">{{ $message }}</span>
        @enderror

        <br><button type="submit">Login</button>
    </form>
@endsection
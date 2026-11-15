@extends('layout.app')
@section('content')
    <h1>Dashboard Member</h1>
    <p>Selamat Datang, {{ Auth::user()->name }}</p>
@endsection
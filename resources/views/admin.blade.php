@extends('layout.app')
@section('content')

    <h1>Dashboard Admin</h1>
    <p>Selamat Datang, {{ Auth::user()->name }}!! Anda dapat mengakses apa saja di dashboard ini</p>

    @endsection
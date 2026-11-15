@extends('layout.app')
@section('content')
    @if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
    @endif
    <h1>Yoo Haloo</h1>
    @auth
        <P>Anda sudah login sebagai: {{ Auth::user()->name }} </P>
    @endauth
    @guest
        <p>Kamu belum login</p>
    @endauth
@endsection



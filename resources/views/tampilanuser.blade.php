@extends('template')
@section('main')
    <h1>Hello {{ Auth::user()->name }}</h1>
    <h1>Ini halaman user</h1>
@endsection
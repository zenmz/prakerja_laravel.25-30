@extends('template')
@section('main')
    <h1>Ini menggunakan view laravel</h1>

    @php
        $no = 1;
    @endphp

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            <h1>Ini menggunakan blade</h1>
        @endif
    @endfor

    @for ($i = 0; $i < 10; $i++)
        @if ($i % 2)
            <img src="{{ asset('photo-1678055702765-a9fbd945478e.jpeg') }}" alt="" width="300px">
        @endif
    @endfor
@endsection

@extends('layouts.main')

@section('container')

    <h1>Halaman about</h1>
    <h3>Ndie Muhammad</h3>
    <p>{{ $name }}</p>
    <img src="img/{{ $img }}" alt="{{ $img }}" width="200">
    
@endsection
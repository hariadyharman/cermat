@extends('layout.main')
@section('container')
    <h1>ini adalah halaman About</h1>
    <h3>Nama : {{ $name }}</h3>
    <h3>email : {{ $email }}</h3>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
@endsection

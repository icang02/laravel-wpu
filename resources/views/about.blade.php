@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mt-4 py-5">Halaman About</h1>
        <ul>
            <li>Nama : {{ $name }}</li>
            <li>Jurusan : {{ $jurusan }}</li>
        </ul>
    </div>
@endsection

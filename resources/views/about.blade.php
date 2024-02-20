@extends('layouts.main')

@section('content')
<div class="container">
    <h1>About me</h1>
    <table class="table">
        <tr>
            <th>Nama</th>
            <td>{{ $nama }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $email }}</td>
        </tr>
        <tr>
            <th>Kelas</th>
            <td>{{ $kelas }}</td>
        </tr>
        <tr>
            <th>Foto</th>
            <td><img src="{{ $foto }}" alt="{{ $nama }}" width="200"></td>
        </tr>
    </table>
</div>
@endsection

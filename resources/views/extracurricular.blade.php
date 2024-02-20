@extends('layouts.main')

@section('content')
<div class="container">
    <h1>List Ekstrakurikuler</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nama Pembina</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($extra as $extracurricular)
                <tr>
                    <td>{{ $extracurricular['nama'] }}</td>
                    <td>{{ $extracurricular['nama_pembina'] }}</td>
                    <td>{{ $extracurricular['deks'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 

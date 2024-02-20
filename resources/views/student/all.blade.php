@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Siswa</h1>
    <table class="table">
        <thead>

            @if (session()->has('success'))
    <div class ="alert alert-success col-lg-12" role="alert">
        {{session ('success')}}
    </div>

    @endif
            <tr>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{  $student->nis }}</td>
                    <td>{{  $student->nama }}</td>
                    <td>{{ optional($student->kelas)->nama }}</td>
                    <td>{{  $student->alamat }}</td>
                    <td>
                        <a class="btn btn-primary" href="/murid/detail/{{ $student->id }}">Detail</a>
                        <form method="POST" action="/student/delete/{{ $student->id }}" onsubmit="return confirmDelete()">
                        <script>
                            function confirmDelete() {
                                return confirm("Apakah Anda yakin ingin menghapus data siswa ini?");
                            }
                        </script>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

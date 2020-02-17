@extends('layout.main')

@section('title', 'Daftar Karyawan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Karyawan</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Email</th>
                    <th scope="col">Departemen</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $karyawan as $kry )
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $kry->nama }}</td>
                    <td>{{ $kry->nik }}</td>
                    <td>{{ $kry->email }}</td>
                    <td>{{ $kry->dept }}</td>
                    <td>
                    <a href="" class="badge badge-success">Edit</a>
                    <a href="" class="badge badge-danger">Delete</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@extends('layout.main')

@section('title', 'Daftar Karyawan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Karyawan</h1>


            <a href="/employees/create" class="btn btn-primary my-3">Tambah Data</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <ul class="list-group">
                @foreach ( $employees as $emp)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $emp->nama }}
                   <a href="/employees/{{ $emp->id}}" class="badge badge-info">detail</a>
                </li>
                @endforeach
            </ul>
            
        </div>
    </div>
</div>
@endsection
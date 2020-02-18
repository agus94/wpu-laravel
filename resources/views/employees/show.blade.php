@extends('layout.main')

@section('title', 'Detail Karyawan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Karyawan</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $employee->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $employee->nik }}</h6>
                    <p class="card-text">{{ $employee->nama }}</p>
                    <p class="card-text">{{ $employee->dept }}</p>
                    
                    <a href="{{ $employee->id }}/edit" class="btn btn-primary">Edit</a>

                    <form action="/employees/{{ $employee->id }}" method="post" class="d-inline">
                    @method('delete') 
                    @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus data?')">Delete</button>
                    </form>

                    <a href="/employees" class="card-link">Kembali</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
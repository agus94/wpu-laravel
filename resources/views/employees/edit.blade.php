@extends('layout.main')

@section('title', 'Form Ubah Data Karyawan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Karyawan</h1>

            <form method="post" action="/employees/{{ $employee->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $employee->nama }}">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukkan NIK" name="nik" value="{{ $employee->nik }}">
                    @error('nik')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ $employee->email }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dept">Departemen</label>
                    <input type="text" class="form-control @error('dept') is-invalid @enderror" id="dept" placeholder="Masukkan Departemen" name="dept" value="{{ $employee->dept }}">
                    @error('dept')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data!</button>
            </form>
            </form>
            </form>
            
        </div>
    </div>
</div>
@endsection
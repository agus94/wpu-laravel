@extends('layout.main')

@section('title', 'Form Tambah Data Karyawan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Karyawan</h1>

            <form method="post" action="/employees">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" name="nik">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email">
                </div>
                <div class="form-group">
                    <label for="dept">Departemen</label>
                    <input type="text" class="form-control" id="dept" placeholder="Masukkan Departemen" name="dept">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data!</button>
            </form>
            </form>
            </form>
            
        </div>
    </div>
</div>
@endsection
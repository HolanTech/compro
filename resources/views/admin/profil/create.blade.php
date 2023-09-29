@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>Buat Profil Perusahaan Baru</h1>

        <form method="POST" action="{{ route('profil.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Nama Perusahaan</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" name="address" class="form-control" id="address" required>
            </div>

            <div class="form-group">
                <label for="contact">Kontak</label>
                <input type="text" name="contact" class="form-control" id="contact" required>
            </div>

            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" name="logo" class="form-control-file" id="logo" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

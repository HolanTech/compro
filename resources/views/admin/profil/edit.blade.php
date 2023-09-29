@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>Edit Profil Perusahaan</h1>

        <form method="POST" action="{{ route('profile.update', $profile->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nama Perusahaan</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $profile->name }}" required>
            </div>

            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" name="address" class="form-control" id="address" value="{{ $profile->address }}"
                    required>
            </div>

            <div class="form-group">
                <label for="contact">Kontak</label>
                <input type="text" name="contact" class="form-control" id="contact" value="{{ $profile->contact }}"
                    required>
            </div>

            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" name="logo" class="form-control-file" id="logo">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection

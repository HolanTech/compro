@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>Buat Slider Baru</h1>

        <form method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="note">Ucapan Selamat Datang</label>
                <textarea name="note" class="form-control" rows="5" id="note" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" class="form-control-file" id="image" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

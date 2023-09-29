@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>Edit Slider</h1>

        <form method="POST" action="{{ route('slider.update', $slider->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="note">Ucapan Selamat Datang</label>
                <textarea name="note" class="form-control" rows="5" id="note" required>{{ $slider->note }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" class="form-control-file" id="image">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection

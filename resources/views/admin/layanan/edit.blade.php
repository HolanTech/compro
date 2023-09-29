@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>Edit layanan</h1>

        <form method="POST" action="{{ route('layanan.update', $layanan->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Nama Perusahaan</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $profile->title }}" required>
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <textarea name="note" class="form-control" rows="5" id="note" required>{{ $layanan->note }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control-file" id="image">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection

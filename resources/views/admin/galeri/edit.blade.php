@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>Edit Galeri</h1>

        <form method="POST" action="{{ route('galeri.update', $galeri->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="caption">Caption</label>
                <input type="text" name="caption" class="form-control" id="caption" value="{{ $galeri->caption }}">
            </div>
            <td>
                <img src="{{ asset('storage/' . $galeri->image) }}" alt="Logo" width="250">
            </td>
            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" class="form-control-file" id="image">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection

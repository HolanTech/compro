@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>Edit beranda</h1>

        <form method="POST" action="{{ route('beranda.update', $beranda->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="layanan">Layanan</label>
                <textarea name="layanan" class="form-control" rows="5" id="layanan" required>{{ $beranda->layanan }}</textarea>
            </div>
            <div class="form-group">
                <label for="tentang">Tentang</label>
                <textarea name="tentang" class="form-control" rows="5" id="tentang" required>{{ $beranda->tentang }}</textarea>
            </div>



            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection

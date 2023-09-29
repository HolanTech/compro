@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Buat Beranda Baru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('beranda.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="layanan">Layanan</label>
                <textarea name="layanan" class="form-control" rows="5" id="layanan" required></textarea>
            </div>
            <div class="form-group">
                <label for="tentang">Tentang</label>
                <textarea name="tentang" class="form-control" rows="5" id="tentang" required></textarea>
            </div>


            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

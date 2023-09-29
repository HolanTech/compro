@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Galeri Baru</h1>

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

        <form method="POST" action="{{ route('galeri.store') }}" enctype="multipart/form-data">
            @csrf



            <div class="form-group">
                <label for="caption">Caption</label>
                <input type="text" name="caption" class="form-control" id="caption" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control-file" id="image" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

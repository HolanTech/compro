@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>Galeri Perusahaan</h1>
        <a href="{{ route('galeri.create') }}" class="btn btn-success mb-3">Tambah galeri Perusahaan</a>

        <table class="table">
            <thead>
                <tr>

                    <th>Caption</th>
                    <th>Image</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galeri as $galeri)
                    <tr>

                        <td> {{ $galeri->caption }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $galeri->image) }}" alt="Logo" width="250">
                        </td>
                        <td>
                            <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-primary">Edit</a>
                            <form method="POST" action="{{ route('galeri.destroy', $galeri->id) }}"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus galeri perusahaan ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

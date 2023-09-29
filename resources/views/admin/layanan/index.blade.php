@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>Layanan Perusahaan</h1>
        <a href="{{ route('layanan.create') }}" class="btn btn-success mb-3">Buat layanan Perusahaan Baru</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Note</th>
                    <th>Image</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($layanan as $layanan)
                    <tr>

                        <td>{{ $layanan->title }}</td>
                        <td>{{ $layanan->note }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $layanan->image) }}" alt="Logo" width="250">
                        </td>
                        <td>
                            <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn btn-primary">Edit</a>
                            <form method="POST" action="{{ route('layanan.destroy', $layanan->id) }}"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus layanan perusahaan ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

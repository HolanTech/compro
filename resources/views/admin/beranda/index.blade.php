@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>Beranda</h1>
        <a href="{{ route('beranda.create') }}" class="btn btn-success mb-3">Buat beranda</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Layanan</th>
                    <th>Tentang</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beranda as $beranda)
                    <tr>

                        <td>{{ $beranda->layanan }}</td>
                        <td>{{ $beranda->tentang }}</td>

                        <td>
                            <a href="{{ route('beranda.edit', $beranda->id) }}" class="btn btn-primary">Edit</a>
                            <form method="POST" action="{{ route('beranda.destroy', $beranda->id) }}"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus beranda perusahaan ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

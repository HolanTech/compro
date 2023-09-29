@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>Profil Perusahaan</h1>
        <a href="{{ route('profil.create') }}" class="btn btn-success mb-3">Buat Profil Perusahaan Baru</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                    <th>Logo</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $profile)
                    <tr>
                        <td>{{ $profile->name }}</td>
                        <td>{{ $profile->address }}</td>
                        <td>{{ $profile->contact }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $profile->logo) }}" alt="Logo" width="50">
                        </td>
                        <td>
                            <a href="{{ route('profil.edit', $profile->id) }}" class="btn btn-primary">Edit</a>
                            <form method="POST" action="{{ route('profil.destroy', $profile->id) }}"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus profil perusahaan ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>client Perusahaan</h1>
        <a href="{{ route('client.create') }}" class="btn btn-success mb-3">Buat client Perusahaan Baru</a>

        <table class="table">
            <thead>
                <tr>

                    <th>Image</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($client as $client)
                    <tr>


                        <td>
                            <img src="{{ asset('storage/' . $client->image) }}" alt="Logo" width="250">
                        </td>
                        <td>
                            <a href="{{ route('client.edit', $client->id) }}" class="btn btn-primary">Edit</a>
                            <form method="POST" action="{{ route('client.destroy', $client->id) }}"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus client perusahaan ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

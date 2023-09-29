@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>Edit Client</h1>

        <form method="POST" action="{{ route('client.update', $client->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <td>
                <img src="{{ asset('storage/' . $client->image) }}" alt="Logo" width="250">
            </td>
            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" class="form-control-file" id="image">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection

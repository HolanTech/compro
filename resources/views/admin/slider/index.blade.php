@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>slider Perusahaan</h1>
        <a href="{{ route('slider.create') }}" class="btn btn-success mb-3">Buat slider Perusahaan Baru</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Note</th>
                    <th>Image</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sliders as $slider)
                    <tr>

                        <td>{{ $slider->note }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $slider->image) }}" alt="Logo" width="250">
                        </td>
                        <td>
                            <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-primary">Edit</a>
                            <form method="POST" action="{{ route('slider.destroy', $slider->id) }}"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus slider perusahaan ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

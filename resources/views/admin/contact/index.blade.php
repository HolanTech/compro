@extends('layouts.app') {{-- Pastikan ini sesuai dengan layout admin Anda --}}

@section('content')
    <div class="container">
        <h1>Pesan dari User</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Note</th>
                    <th>Created_at</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $contact)
                    <tr>

                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->note }}
                        <td>{{ $contact->created_at }}</td>
                        </td>

                        <td>
                            <form method="POST" action="{{ route('contact.destroy', $contact->id) }}"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus contact perusahaan ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

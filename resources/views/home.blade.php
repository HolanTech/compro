@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <strong class="mb-4 h3">Selamat Datang di Menu Administrator</strong>

                        <!-- Inspirational Image -->
                        <img src="{{ asset('img/brain.png') }}" class="img-fluid mx-auto d-block mb-4"
                            style="max-width: 200px;">

                        <span class="mb-4">"Sukses adalah kunci dari keberanian untuk memulai."</span><br>
                        <span>Semangatkan diri Anda untuk mencapai hal-hal hebat!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

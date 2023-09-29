<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV ADCHA ZULKARNAEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                @foreach ($profile as $profile)
                    <img src="{{ asset('storage/' . $profile->logo) }}" alt="Logo" width="50">
                    <span class="logo-text">
                        <td>{{ $profile->name }}</td>
                    </span>
                @endforeach
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comprof.index', ['scrollTo' => 'beranda']) }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comprof.index', ['scrollTo' => 'layanan']) }}">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comprof.index', ['scrollTo' => 'galeri']) }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comprof.index', ['scrollTo' => 'tentang']) }}">Tentang
                            Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comprof.index', ['scrollTo' => 'klien']) }}">Klien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comprof.index', ['scrollTo' => 'kontak']) }}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
    @yield('content')
    @csrf
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/scrollreveal@4.1.1/dist/scrollreveal.min.js"></script>
    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    @stack('script')
</body>

</html>

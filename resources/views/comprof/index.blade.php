@extends('layouts.comprof')
@section('content')
    <!-- banner start -->
    <div id="carouselExample" class="carousel slide beranda" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($sliders as $key => $slider)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="container-fluid banner"
                        style="background-image: url('{{ asset('storage/' . $slider->image) }}'); height: 700px;">
                        <div class="container text-center" style="position: relative; top: 50%;">
                            @if (!$profile->isEmpty())
                                <h3 class="display-6">Selamat datang di {{ $profile[0]->name }}!</h3>
                            @endif
                            <p></p>
                            <p>{{ $slider->note }}</p>
                            <a href="#layanan">
                                <button type="button" class="btn btn-danger btn-lg">Cek layanan</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- banner end -->

    <!-- layanan start-->
    <div class="container-fluid layanan">
        <div class="container text-center">
            <h2 class="display-3" id="layanan">Layanan</h2>
            @foreach ($beranda as $key => $beranda)
                <p>
                    {{ $beranda->layanan }}
                </p>
            @endforeach
            <div class="row pt-4">
                @foreach ($layanan as $key => $layanan)
                    <div class="col-md-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title mt-3">{{ $layanan->title }}</h3>
                                <br />
                                <img src={{ asset('storage/' . $layanan->image) }} alt="" width="320px"
                                    height="200px" />
                                <p class="card-text">{{ $layanan->note }}</p>
                                <a href="{{ route('comprof.layanan') }}" class="btn btn-primary">Lihat lebih lanjut</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- layanan end -->

    <!-- galeri start-->
    <div class="container-fluid galeri">
        <div class="container text-center">
            <h2 class="display-3" id="galeri">Galeri</h2>
            <div class="row pt-4">
                @foreach ($galeri as $key => $galeri)
                    <div class="col-md-4 col-sm-6">
                        <a href="{{ asset('storage/' . $galeri->image) }}" data-lightbox="galeri">
                            <img src="{{ asset('storage/' . $galeri->image) }}" alt="" width="320px"
                                height="200px" />
                        </a>
                        <p class="card-text">{{ $galeri->caption }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- galeri end -->

    <!-- tentang kami start -->
    <div class="container pt-5 pb-5 tentang">
        <h2 class="display-3 text-center" id="tentang">Tentang kami</h2>
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-10">
                <div class="card">
                    <div class="card-body">
                        <p class="text-justify">{{ $beranda->tentang }}</p>
                        <div class="text-center mt-3">
                            <a href="{{ route('comprof.tentang') }}" class="btn btn-primary">Pelajari lebih lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tentang kami end -->

    <!-- klien -->
    <div class="container-fluid pt-5 pb-5 bg-light klien">
        <div class="container text-center">
            <h2 class="display-3" id="klien">Klien</h2>
            <p>Beberapa klien yang pernah kami tangani</p>
            <div class="row pt-4 gx-4 gy-4">
                @foreach ($client as $key => $client)
                    <div class="col-md-2 text-center klien animated-image">
                        <img src={{ asset('storage/' . $client->image) }} width="100" height="100"
                            class="rounded-3 mb-2" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- klien end -->

    <!-- kontak start-->
    <div class="container-fluid pt-5 pb-5 kontak">
        <div class="container d-flex justify-content-center">
            <div class="col-md-6">
                <h2 class="display-3 text-center" id="kontak">Kontak</h2>
                <p class="text-center">Hubungi kami di:</p>
                <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=6285246696270" target="_blank"
                        class="btn btn-success">WhatsApp</a>
                </div>
                <p class="text-center">Atau</p>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input name="name" class="form-control form-control-lg mb-3" type="text" placeholder="Nama"
                        required />
                    <input name="email" class="form-control form-control-lg mb-3" type="email" placeholder="Email"
                        required />
                    <input name="phone" class="form-control form-control-lg" type="tel" placeholder="No. Phone"
                        required />
                    <textarea name="note" class="form-control form-control-lg" rows="5" placeholder="isi pesan..." required></textarea>
                    <div class="text-center">
                        <br />
                        <button type="submit" class="btn btn-primary btn-kirim">Submit</button>
                        <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- footer start -->
        <div class="container text-center pt-5 pb-5">
            @if (!$profile->isEmpty())
                {{ $profile[0]->name }} _ {{ $profile[0]->address }}
            @endif
        </div>
        <!-- footer end -->
    </div>
    <!-- kontak end -->

    <!-- Lightbox container -->
    <div id="myLightbox" class="lightbox" style="display: none;">
        <!-- Tombol close -->
        <a class="lightbox-close-button" href="javascript:void(0);" onclick="closeLightbox();">&times;</a>

        <!-- Tombol navigasi kiri (Previous) -->
        <a class="lightbox-nav-button lightbox-prev" href="javascript:void(0);" onclick="prevImage();">&#9664;</a>

        <!-- Tombol navigasi kanan (Next) -->
        <a class="lightbox-nav-button lightbox-next" href="javascript:void(0);" onclick="nextImage();">&#9654;</a>

        <!-- Gambar dalam lightbox -->
        <img src="{{ asset('path/to/your/image.jpg') }}" alt="Image 1" />

        <!-- Keterangan atau deskripsi gambar -->
        <div class="lightbox-caption">Deskripsi gambar 1</div>
    </div>
@endsection

@push('script')
    <script>
        // Pastikan kode dijalankan setelah halaman selesai dimuat
        $(document).ready(function() {
            // Menjalankan slider otomatis setiap 2 detik
            setInterval(function() {
                $("#carouselExample").carousel("next");
            }, 3000);
        });
    </script>

    <script>
        const form = document.forms["submit-to-google-sheet-from-company-profile"];
        const btnKirim = document.querySelector(".btn-kirim");
        const btnLoading = document.querySelector(".btn-loading");
        const myAlert = document.querySelector(".my-alert");

        form.addEventListener("submit", e => {
            e.preventDefault();
            //ketika tombol submit di klik
            //tampilkan tombol loading, hilangkan tombol kirim
            btnLoading.classList.toggle("d-none");
            btnKirim.classList.toggle("d-none");
            fetch(form.action, {
                    method: "POST",
                    body: new FormData(form)
                })
                .then(response => {
                    //tampilkan tombol kirim, hilangkan tombol loading
                    btnLoading.classList.toggle("d-none");
                    btnKirim.classList.toggle("d-none");
                    //tampilkan alert
                    myAlert.classList.toggle("d-none");
                    //reset form
                    form.reset();
                    console.log("Success!", response);
                })
                .catch(error => console.error("Error!", error.message));
        });
    </script>
    <script>
        // Check if the query parameter 'scrollTo' is present
        const urlParams = new URLSearchParams(window.location.search);
        const scrollToSection = urlParams.get('scrollTo');

        if (scrollToSection === 'beranda') {
            // Scroll to the #beranda section
            const berandaSection = document.getElementById('beranda');
            if (berandaSection) {
                berandaSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
        if (scrollToSection === 'layanan') {
            // Scroll to the #layanan section
            const layananSection = document.getElementById('layanan');
            if (layananSection) {
                layananSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
        if (scrollToSection === 'tentang') {
            // Scroll to the #tentang section
            const tentangSection = document.getElementById('tentang');
            if (tentangSection) {
                tentangSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
        if (scrollToSection === 'galeri') {
            // Scroll to the #galeri section
            const galeriSection = document.getElementById('galeri');
            if (galeriSection) {
                galeriSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
        if (scrollToSection === 'klien') {
            // Scroll to the #klien section
            const klienSection = document.getElementById('klien');
            if (klienSection) {
                klienSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
        if (scrollToSection === 'kontak') {
            // Scroll to the #kontak section
            const kontakSection = document.getElementById('kontak');
            if (kontakSection) {
                kontakSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'alwaysShowNavOnTouchDevices': true // Tampilkan tombol navigasi di perangkat sentuh
        });

        // Fungsi untuk menutup lightbox
        function closeLightbox() {
            lightbox.close();
        }

        // Fungsi untuk navigasi gambar sebelumnya (Previous)
        function prevImage() {
            lightbox.prev();
        }

        // Fungsi untuk navigasi gambar berikutnya (Next)
        function nextImage() {
            lightbox.next();
        }
    </script>
@endpush

</html>

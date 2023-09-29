@extends('layouts.comprof')
@section('content')
    <div class="card1 justify-content-center" style="margin-top: 75px" fixed-top>
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#"
                        onclick="changeContent(event, 'content1',  this )">Layanan 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="true" href="#"
                        onclick="changeContent(event, 'content2', this)">Layanan 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="true" href="#"
                        onclick="changeContent(event, 'content3', this)">Layanan 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="true" href="#"
                        onclick="changeContent(event, 'content4', this)">Layanan 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="true" href="#"
                        onclick="changeContent(event, 'content5', this)">Layanan 5</a>
                </li>
            </ul>
        </div>
        <div class="card-body" style="display: block">
            <div id="content1">
                <h4 class="text-center">GENERAL SUPPLY</h4>
                <div class="container-fluid layanan pb-5">
                    <div class="row pt-4">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">MATERIAL KONSTRUKSI/CONSTRUCTION MATERIAL</h5>
                                    <ul>
                                        <li>Kayu Kaso, Balok, Papan, Dolken dll</li>
                                        <li>Triplek, Polyfilm, Phenolic film dll</li>
                                        <li>Besi, Tyrod, Wing Nut DLL</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">PERALATAN MEKANIK DAN LISTRIK (MECHANICAL
                                        &ELECTRICAL, EQUIPMENTS)</h5>
                                    <ul>
                                        <li>Alat-alat teknik (kunci-kunci, gurinda, mesin bor dll)</li>
                                        <li>Lampu LED, Box panel, Kabel DLL</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">PERALATAN DAN PERLENGKAPAN KEAMANAN (SAFETY
                                        EQUIPMENTS)</h5>
                                    <ul>
                                        <li>Helm proyek, Sepatu safety, Police line dll</li>
                                        <li>Safetybelt, Body harnes, Rompi dll</li>
                                        <li>Terpal / Bluesheet, Polynet dll</li>
                                        <li>Alat pemadam kebakaran / Apar. DLL</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">FURNITUR KANTOR DAN ALAT TULIS KANTOR/ATK
                                        (STATIONARY)</h5>
                                    <ul>
                                        <li>Meja dan kursi kantor</li>
                                        <li>Alat Tulis Kantor ( ATK ).DLL</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">PERLENGKAPAN RUMAH TANGGA (HOUSEHOLD SUPPLY)</h5>
                                    <ul>
                                        <li>Pantry (Tissue, Lap, kain majun, Ember dll)</li>
                                        <li>Tempat sabun</li>
                                        <li>Obat-obatan dan kotak P3K. DLL</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">SPAREPART ALAT BERAT</h5>
                                    <img src="{{ asset('img/sparepart.png') }}" alt="" width="350px"
                                        height="200px" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">LIGHTING TOWER LAMP</h5>
                                    <img src="{{ asset('img/lighting.png') }}" alt="" width="350px"
                                        height="200px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content2" style="display: none">
                <div class="row g-2">
                    <h4 class="card-title text-center">HYDRAULIC PUMP REPAIRING-SERVICE</h4>
                    <div class="col-md-6 col-sm-6">
                        <div class="card">
                            <img src="{{ asset('img/layanan2.png') }}" class="img-fluid rounded-start" alt="..." />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="card">
                            <p class="card-text">
                                Kami memperbaiki dan melayani pompa hidraulik dengan semua komponen pabrikan di lokasi
                                Kalimantan timur. kami memastikan semua unit pompa hidrolik diuji untuk spesifikasi
                                pabrik oleh teknisi pompa hidraulik terlatih dengan
                                pengalaman. Layanan perbaikan hidraulik, Rebuilding, memperbaiki peralatan hidraulik
                                bekas seperti pompa hidraulik, katup dan katup servo, silinder, motor, jack, rams,
                                aktuator, Hydraulic Power Units (HPU) dan mesin atau
                                sistem hidraulik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content3" style="display: none">
                <h4 class="text-center">HEAVY DUTY SERVICE : ENGINE REPAIR OVERHAUL & REPLACEMENT</h4>
                <div class="container-fluid layanan pb-5">
                    <div class="row pt-4">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">DIESEL</h5>
                                    <img src="{{ asset('img/diesel.png') }}" alt="" width="250px" height="200px" />
                                    <p>
                                        Tugas pemeliharaan yang umum termasuk: Ganti oli & filter, Ganti filter udara,
                                        Ganti filter bahan bakar, Bleed fuel system, Menguras pemisah air, Mengisi ulang
                                        sistem injeksi area, Perawatan Mesin, Perbaikan Mesin dan
                                        Rebuild, Pemeliharaan Transmisi, Transmisi Flush, Timing Belt, Kepala silinder
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">TOP OVERHOUL</h5>
                                    <img src="{{ asset('img/top.png') }}" alt="" width="250px"
                                        height="200px" />
                                    <p>Meliputi perbaikan Alat-Berat seperti Crane, Excavator, Bulldozer, Wheel Loader,
                                        Forklift, Motor Grader, Trailler dll. dari berbagagai Merk KOBELCO, KOMATSU,
                                        TADANO, P&H,HITACHI, KATO, CATT, dll</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">GENERAL OVERHOUL</h5>
                                    <ul>
                                        <li>Overhoul Engine</li>
                                        <li>Overhoul Tranmission System</li>
                                        <li>Overhoul Hidroulic System</li>
                                        <li>Electrical System</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">TROUBLE SHOOTING</h5>
                                    <img src="{{ asset('img/trouble.jpg') }}" alt="" width="250px"
                                        height="200px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content4" style="display: none">
                <h4 class="text-center">FABRIKASI HEAVY EQUIPMENT</h4>
                <div class="container-fluid layanan pb-5">
                    <div class="row pt-4">
                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">PEMBUATAN FUEL TANK</h5>
                                    <img src="{{ asset('img/fabrikasi2.png') }}" alt="" width="350px"
                                        height="200px" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">FABRIKASI KOMPONEN DUMPTRUCK (FRONT WALL )</h5>
                                    <img src="{{ asset('img/fabrikasi1.png') }}" alt="" width="350px"
                                        height="200px" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">FABRIKASI BUCKET</h5>
                                    <img src="{{ asset('img/fabrikasi3.png') }}" alt="" width="350px"
                                        height="200px" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">FABRIKASI ASSEMBLING VESSEL FOR BIG DUMPTRUCK ( ON
                                        SITE )</h5>
                                    <img src="{{ asset('img/fabrikasi4.png') }}" alt="" width="350px"
                                        height="200px" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">PEMBUATAN CABIN GUARD, FRONT BUMPER DAN KOMPONEN
                                        LAINNYA UNTUK TRUCK</h5>
                                    <img src="{{ asset('img/fabrikasi5.png') }}" alt="" width="350px"
                                        height="200px" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">DAN FABRIKASI PEMBUATAN KOMPONEN LAINNYA</h5>
                                    <img src="{{ asset('img/fabrikasi6.png') }}" alt="" width="350px"
                                        height="200px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content5" style="display: none">
                <h4 class="text-center">INFORMATION TECHNOLOGY (IT</h4>
                <div class="container-fluid layanan pb-5">
                    <div class="row pt-4">
                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">MOBILE DEVELOPMENT COMPANY</h5>
                                    <p>
                                        Kami menyediakan jasa pembuatan Aplikasi Mobile custome seperti Jasa Pembuatan
                                        Aplikasi Company Profile, Jasa Pembuatan Aplikasi Katalog Produk, Jasa Pembuatan
                                        Aplikasi E-Commerce, Jasa Pembuatan Aplikasi Streaming.
                                        untuk platform Android, IOS atau Windows Phone.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">MAINTENANCE & SERVICE MANAGEMENT BANDWIDTH</h5>
                                    <p>
                                        Pada sebuah jaringan yang mempunyai banyak client, diperlukan sebuah mekanisme
                                        pengaturan bandwidth dengan tujuan mencegah terjadinya monopoli penggunaan
                                        bandwidth sehingga semua client bisa mendapatkan jatah bandwidth
                                        masing-masing
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">COMPUTING INFRASTRUCTURE</h5>
                                    <p>Desktop, Workstation, AllInOne PC, Laptop, Printer, Server, Dll)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">NETWORKING INFRASTRUCTURE</h5>
                                    <p>LAN, WLAN, WAN, Wireless / WiFi Hotspot, PABX, IP-Phone, Video Conference, Dll
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">SECURITY SYSTEM</h5>
                                    <p>Analog & Digital CCTV, Access Control, Alarm System, Smoke Detector, Dll</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mt-2 mb-2">RADIO COMMUNICATION</h5>
                                    <p>Trunking Radio, Handy Talkie, Marine Radio, SSB, Dll</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        function changeContent(event, contentId, link) {
            event.preventDefault();

            var contents = document.getElementsByClassName("card-body")[0].children;
            var navLinks = document.getElementsByClassName("nav-link");

            for (var i = 0; i < contents.length; i++) {
                if (contents[i].id === contentId) {
                    contents[i].style.display = "block";
                } else {
                    contents[i].style.display = "none";
                }
            }

            for (var j = 0; j < navLinks.length; j++) {
                navLinks[j].classList.remove("active");
            }

            link.classList.add("active");
        }
    </script>
@endpush

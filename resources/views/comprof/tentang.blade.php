@extends('layouts.comprof')
@section('content')
    <!-- tentang start -->
    <div class="container-fluid tentang pt-5 pb-5 mt-3">
        <div class="container">
            <h2 class="display-3 text-center" id="tentang">Tentang Perusahaan</h2>
            <div class="text-justify">
                <p class="justifikasi">
                    CV. ADCHA ZULKARNAEN didirikan pada tahun 2017 kami awalnya mengkhususkan diri dalam penyediaan
                    Produk Konsumabel Perusahaan mulai dari produk elektronik dan aksesori, material bahan bangunan,
                    pasokan bahan makanan, minuman,
                    kebutuhan kantor, dan alat tulis dan layanan IT seperti Service & Pemeliharaan Jaringan, Hardware &
                    Infrastruktur. Dan saat ini kami mengembangkan bisnis kami ke bidang Pertambangan untuk menangani
                    Sparepart Alat Berat, Lighting
                    Tower, Fabrikasi, Perawatan dan Perbaikan mesin disel, serta perawatan dan perbaikan hydraulic
                    cylinder pump.
                </p>
                <p class="justifikasi">
                    Kami fokus untuk memberikan solusi terbaik dengan menggabungkan fungsi khusus yang nantinya akan
                    disesuaikan dengan kebutuhan klien. Pengalaman komprehensif dan visi kreatif yang ekspansif
                    memungkinkan kami untuk menyediakan
                    layanan dan produk yang inovatif, dapat digunakan, dan dapat diandalkan.
                </p>
                <p class="justifikasi">
                    Dengan pengalaman bisnis yang baik dan hubungan yang berkelanjutan dengan perusahaan-perusahaan,
                    Perusahaan kami berkomitmen untuk terus mengembangkan kompetensi dalam upaya untuk mengevaluasi dan
                    mempertahankan daya saing di
                    tingkat nasional. Ini akan dicapai melalui standarisasi aplikasi teknologi, dan dalam pengelolaan
                    produk kelas industri dan produksi layanan.
                </p>
                <p class="justifikasi">
                    Sebagai Perusahaan penyedia jasa dan supplier, CV. ADCHA ZULKARNAEN memiliki ambisi untuk menjadi
                    Perusahaan yang dapat diandalkan dalam memenuhi kebutuhan klien dengan dorongan tanggung jawab yang
                    besar. Hal tersebut adalah
                    visi kami yang ingin menjadi perusahaan yang bisa diandalkan.
                </p>
            </div>
            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title mt-3">VISI</h3>
                            <br />
                            <ul>
                                <li>Dapat menjadi salah satu perusahaan jasa yang unggul dan diperhitungkan di
                                    bidangnya.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title mt-3">MISI</h3>
                            <ul>
                                <li>Menjalin kerjasama yang baik dan solid serta seluas-luasnya dengan klien dan partner
                                    bisnis.</li>
                                <li>Menciptakan sistem dan standar-standar yang berkualitas dalam pelayanan.</li>
                                <li>Memenuhi kebutuhan klien dan memberikan solusi yang tepat dalam penyelesaian
                                    pekerjaan.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <h3 class="text-center">STRUKTUR PENGURUS</h3>
                <img src="{{ asset('img/struktur.PNG') }}" alt="" />
            </div>
            <div class="table-responsive">
                <h3 class="text-center">LISENSI PERUSAHAAN</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">KETERANGAN</th>
                            <th scope="col">PENERBIT</th>
                            <th scope="col">NO.LISENSI</th>
                            <th scope="col">TGL DITERBITKAN</th>
                            <th scope="col">TGL BERAKHIR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Akta Perusahaan</td>
                            <td>Kantor Notaris Charles Haposan Purba,S.H</td>
                            <td>3-XA-2003</td>
                            <td>21-01-2017</td>
                            <td>Seumur Hidup</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Izin Gangguan (IG)</td>
                            <td>Dinas Penanaman Modal Dan Perizinan Terpadu</td>
                            <td>000426/DPMPT/IG/2017</td>
                            <td>20-02-2017</td>
                            <td>Seumur Hidup</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Tanda Daftar Perusahaan(TDP)</td>
                            <td>Dinas Penanaman Modal Dan Perizinan Terpadu</td>
                            <td>170534611397</td>
                            <td>06-03-2017</td>
                            <td>06-03-2022</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Surat Izin Usaha Perdagangan (SIUP) Kecil</td>
                            <td>l Dinas Penanaman Modal Dan Perizinan Terpadu</td>
                            <td>0233/17- 05/DPMPT/SIUP/2017</td>
                            <td>06-03-2017</td>
                            <td>Seumur Hidup</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>NPWP Perusahaan</td>
                            <td>Direktorat Jendral Pajak</td>
                            <td>81.291.330.9-721.000</td>
                            <td>-</td>
                            <td>Seumur Hidup</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Surat Keterangan Terdaftar (SKT)</td>
                            <td>Direktorat Jendral Pajak</td>
                            <td>S-3229KT/WPJ.14/KP.0103/2017</td>
                            <td>03-03-2017</td>
                            <td>Seumur Hidup</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Surat Pengukuhan Pengusaha Kena Pajak(SPPKP)</td>
                            <td>Direktorat Jendral Pajak</td>
                            <td>S-400PKP/WPJ.14/KP.0103/2017</td>
                            <td>25-04-2017</td>
                            <td>Seumur Hidup</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Tanda Bukti Pendaftaran SPPL</td>
                            <td>Dinas Lingkungan Hidup</td>
                            <td>93/SPPL/2017</td>
                            <td>12-04-2017</td>
                            <td>Seumur Hidup</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href={{ asset('plugins/fontawesome-free/css/all.min.css') }}>

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href={{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}>

    <link rel="stylesheet" href={{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>

    <link rel="stylesheet" href={{ asset('plugins/jqvmap/jqvmap.min.css') }}>

    <link rel="stylesheet" href={{ asset('dist/css/adminlte.min.css?v=3.2.0') }}>

    <link rel="stylesheet" href={{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}>

    <link rel="stylesheet" href={{ asset('plugins/daterangepicker/daterangepicker.css') }}>

    <link rel="stylesheet" href={{ asset('plugins/summernote/summernote-bs4.min.css') }}>
    <script nonce="6e17315f-fafa-4f4e-95ab-30c635bcb705">
        (function(w, d) {
            ! function(a, b, c, d) {
                a[c] = a[c] || {};
                a[c].executed = [];
                a.zaraz = {
                    deferred: [],
                    listeners: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return async function() {
                        var f = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: f
                        })
                    }
                };
                for (const g of ["track", "set", "debug"]) a.zaraz[g] = a.zaraz._f(g);
                a.zaraz.init = () => {
                    var h = b.getElementsByTagName(d)[0],
                        i = b.createElement(d),
                        j = b.getElementsByTagName("title")[0];
                    j && (a[c].t = b.getElementsByTagName("title")[0].text);
                    a[c].x = Math.random();
                    a[c].w = a.screen.width;
                    a[c].h = a.screen.height;
                    a[c].j = a.innerHeight;
                    a[c].e = a.innerWidth;
                    a[c].l = a.location.href;
                    a[c].r = b.referrer;
                    a[c].k = a.screen.colorDepth;
                    a[c].n = b.characterSet;
                    a[c].o = (new Date).getTimezoneOffset();
                    if (a.dataLayer)
                        for (const n of Object.entries(Object.entries(dataLayer).reduce(((o, p) => ({
                                ...o[1],
                                ...p[1]
                            })), {}))) zaraz.set(n[0], n[1], {
                            scope: "page"
                        });
                    a[c].q = [];
                    for (; a.zaraz.q.length;) {
                        const q = a.zaraz.q.shift();
                        a[c].q.push(q)
                    }
                    i.defer = !0;
                    for (const r of [localStorage, sessionStorage]) Object.keys(r || {}).filter((t => t.startsWith(
                        "_zaraz_"))).forEach((s => {
                        try {
                            a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s))
                        } catch {
                            a[c]["z_" + s.slice(7)] = r.getItem(s)
                        }
                    }));
                    i.referrerPolicy = "origin";
                    i.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a[c])));
                    h.parentNode.insertBefore(i, h)
                };
                ["complete", "interactive"].includes(b.readyState) ? zaraz.init() : a.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
    @stack('style')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src={{ asset('img/logo.png') }} alt="Admin" height="60" width="60">
        </div>

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="" class="brand-link">
                <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">Comprov</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Holan</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('beranda.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('slider.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-images"></i> <!-- Ganti ikon dengan gambar -->
                                <p>Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('layanan.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i> <!-- Ganti ikon dengan gambar -->
                                <p>Layanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('galeri.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-images"></i> <!-- Ganti ikon dengan gambar -->
                                <p>Galeri</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('client.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i> <!-- Ganti ikon dengan gambar -->
                                <p>Client</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-address-book"></i> <!-- Ganti ikon dengan gambar -->
                                <p>Kontak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profil.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-building"></i>
                                <p>Profil Perusahaan</p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </aside>

        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">

                    @yield('content')

                </div>
            </section>

        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>

    @stack('script')
    <script src={{ asset('plugins/jquery/jquery.min.js') }}></script>

    <script src={{ asset('plugins/jquery-ui/jquery-ui.min.js') }}></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src={{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>

    <script src={{ asset('plugins/chart.js/Chart.min.js') }}></script>

    <script src={{ asset('plugins/sparklines/sparkline.js') }}></script>

    <script src={{ asset('plugins/jqvmap/jquery.vmap.min.js') }}></script>
    <script src={{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}></script>

    <script src={{ asset('plugins/jquery-knob/jquery.knob.min.js') }}></script>

    <script src={{ asset('plugins/moment/moment.min.js') }}></script>
    <script src={{ asset('plugins/daterangepicker/daterangepicker.js') }}></script>

    <script src={{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}></script>

    <script src={{ asset('plugins/summernote/summernote-bs4.min.js') }}></script>

    <script src={{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>

    <script src={{ asset('dist/js/adminlte.js?v=3.2.0') }}></script>

    <script src={{ asset('dist/js/demo.js') }}></script>

    <script src={{ asset('dist/js/pages/dashboard.js') }}></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('user') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('user') }}/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('user') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('user') }}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jl. Mandor Basar No.54,
                        Rangkapan Jaya, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16434</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+62812 9554 2914</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>petik@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-github fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="#" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>PETIK</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#" class="nav-item nav-link ">Home</a>
                    <a href="#about" class="nav-item nav-link ">About</a>
                    <a href="#service" class="nav-item nav-link">Services</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                {{-- <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a> --}}
                @if (!Auth::check())
                <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 ms-3">Register</a>
            @elseif (Auth::check() && Auth::user()->role == 'user')
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" class="btn btn-primary py-2 px-4 ms-3"
                        onclick="event.preventDefault();
        this.closest('form').submit();">
                       Log Out
                    </a>
                </form>
            @elseif (Auth::check() && Auth::user()->role == 'admin')
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" class="btn btn-primary py-2 px-4 ms-3"
                    onclick="event.preventDefault();
    this.closest('form').submit();">
                   Log Out
                </a>
            </form>
                <a href="{{ url('/dashboard') }}" class="btn btn-primary py-2 px-4 ms-3">Dashboard</a>
            @endif
            </div>
        </nav>



        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('user') }}/img/3.jpg" alt="Image" style="height: 680px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">creative and innovative</h1>
                            <a href="{{ route('daftar.create') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('user') }}/img/bg.png" alt="Image" style="height: 680px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital
                                Solution</h1>
                            <a href="{{ route('daftar.create') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">65</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">people register</h5>
                            <h1 class="mb-0" data-toggle="counter-up">1007</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Best Award</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">40</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" id="about" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Pesantren Teknologi Informasi dan Komunikasi</h1>
                    </div>
                    <p class="mb-4">Pesantren Teknologi Informasi dan Komunikasi (PeTIK) bermula dari keberadaan
                        Lembaga Amil Zakat Infaq dan Shodaqoh PT PLN (Persero) Kantor Pusat (LAZIS PT PLN (Persero)
                        Kantor Pusat) yang dibentuk berdasarkan Keputusan Direksi Nomor 132.K/DIR/2006 Tanggal 11
                        September 2006 untuk mengelola dana zakat, infaq/ shodaqoh pegawai PLN Pusat.

                        Berawal dari asa yang terpendam, dalam namun berakar sangat kuat. Akar yang berfundamen dan
                        berpotensi untuk melahirkan spirit besar dan mulia. Merancang peradaban (baca, menghargai tinggi
                        nilai-nilai kemanusiaan). </p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Penghargaan internasional
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Amanah</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Silahkan hubungi</h5>
                            <h4 class="text-primary mb-0">+62 838 4165 6782</h4>
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
                        data-wow-delay="0.9s">Contact</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="https://petik.or.id/wp-content/uploads/2022/12/gedung-petik-1024x640.jpg"
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" id="service" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Servises</h5>
                <h1 class="mb-0">Services can help you with
                </h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Religius</h4>
                        <p class="m-0">Religius</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <h4 class="mb-3">Integritas</h4>
                        <p class="m-0">Integritas</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-database text-white"></i>
                        </div>
                        <h4 class="mb-3">Kerjasama</h4>
                        <p class="m-0">Kerjasama</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Disiplin</h4>
                        <p class="m-0">Disiplin</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-desktop text-white"></i>
                        </div>
                        <h4 class="mb-3">Mandiri</h4>
                        <p class="m-0">Mandiri</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-desktop text-white"></i>
                        </div>
                        <h4 class="mb-3">Berani</h4>
                        <p class="m-0">Berani</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" id="contact" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Balasan dalam waktu 24 jam
                            </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Dukungan telpon 24 jam
                            </h5>
                        </div>
                    </div>
                    <p class="mb-4">Butuh penawaran gratis untuk proyek Anda berikutnya? Hubungi kami hari ini dan
                        dapatkan penawaran khusus yang sesuai dengan anggaran Anda. Kami berkomitmen untuk menyediakan
                        layanan terbaik kepada pelanggan kami dengan harga terbaik.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Telpon untuk menanyakan pertanyaan apapun</h5>
                            <h4 class="text-primary mb-0">+62 838 4165 6782</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn"
                        data-wow-delay="0.9s">
                        <form action="https://api.web3forms.com/submit" method="POST">
                            <input type="hidden" name="access_key" value="509f12be-1566-488d-bb7f-b8fb69c717fd">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" name="name" class="form-control bg-light border-0"
                                        placeholder="Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control bg-light border-0"
                                        placeholder="Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control bg-light border-0" rows="3" placeholder="Pesan"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                        <script src="https://web3forms.com/client/script.js" async defer></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->



    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" id="team" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Career</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg wow slideInUp" data-wow-delay="0.2s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('user') }}/img/atan.png" alt=""
                                style="height: 300px">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://github.com/bgpaten"><i class="fab fa-github fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://www.instagram.com/ahyarpattani_/"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://www.linkedin.com/in/ahyar-pattani-24879728a/"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Mang Atan</h4>
                            <p class="text-uppercase m-0">Full Stack</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg wow slideInUp" data-wow-delay="0.4s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('user') }}/img/epul.jpg" alt=""
                                style="height: 300px">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://github.com/Saeful25"><i class="fab fa-github fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://www.instagram.com/m_saeful311/"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://www.linkedin.com/in/muhammad-saefulloh-10109228b/"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Mang Epul</h4>
                            <p class="text-uppercase m-0">Full Stack Develover</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('user') }}/img/kahfi.png" alt=""
                                style="height: 300px">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://github.com/Qhhvy"><i class="fab fa-github fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://www.instagram.com/qahhvy_/"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://www.linkedin.com/in/kahfi-al-ghifari-73211828b/"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Mang Kahfi</h4>
                            <p class="text-uppercase m-0">Programmer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg wow slideInUp" data-wow-delay="0.8s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('user') }}/img/haikal.png" alt=""
                                style="height: 300px">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://github.com/okelaja/"><i class="fab fa-github fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://www.instagram.com/okel.id/"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://www.linkedin.com/in/m-haikal-78209128b/"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Mang Haikal</h4>
                            <p class="text-uppercase m-0">Web Develover</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg wow slideInUp" data-wow-delay="1s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('user') }}/img/lutaf.png" alt=""
                                style="height: 300px">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-github fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://www.instagram.com/nr_fil/"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Mang Lutfi</h4>
                            <p class="text-uppercase m-0">UI UX</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" id="testi" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimoni</h5>
                <h1 class="mb-0">Apa kata klien kami tentang pelayanan kami</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="https://olsera.com/_nuxt/img/testi1.8da0ac1.png"
                            style="width: 80px; height: 80px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Ibu Michele lele</h4>
                            <small class="text-uppercase">Cafe Avallon</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Pesantren Teknologi Informasi dan Komunikasi Mantab
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="https://olsera.com/_nuxt/img/testi2.6a2e402.png"
                            style="width: 80px; height: 80px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Ibu Ratina margonda</h4>
                            <small class="text-uppercase">Fipper</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Pesantren Teknologi Informasi dan Komunikasi Mantab
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="https://olsera.com/_nuxt/img/testi3.cadab0d.png"
                            style="width: 80px; height: 80px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Ibu Tatik Sukatik</h4>
                            <small class="text-uppercase">Chef</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Pesantren Teknologi Informasi dan Komunikasi Mantab
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="https://olsera.com/_nuxt/img/testi4.2cce329.png"
                            style="width: 80px; height: 80px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Sukijat ngejat</h4>
                            <small class="text-uppercase">Level Up</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Pesantren Teknologi Informasi dan Komunikasi Mantab
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset('user') }}/img/vendor-1.jpg" alt="">
                    <img src="{{ asset('user') }}/img/vendor-2.jpg" alt="">
                    <img src="{{ asset('user') }}/img/vendor-3.jpg" alt="">
                    <img src="{{ asset('user') }}/img/vendor-4.jpg" alt="">
                    <img src="{{ asset('user') }}/img/vendor-5.jpg" alt="">
                    <img src="{{ asset('user') }}/img/vendor-6.jpg" alt="">
                    <img src="{{ asset('user') }}/img/vendor-7.jpg" alt="">
                    <img src="{{ asset('user') }}/img/vendor-8.jpg" alt="">
                    <img src="{{ asset('user') }}/img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>PETIK</h1>
                        </a>
                        <p class="mt-3 mb-4">PeTIK adalah rangkaian aplikasi bisnis open source yang mencakup semua
                            kebutuhan perusahaan Anda
                            dan seterusnya. <br> Mudah digunakan dan terintegrasi penuh pada saat yang sama adalah value
                            proposition unik PeTIK.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Kantor pusat</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Jl. Mandor Basar No.54, Rangkapan Jaya, Kec. Pancoran Mas, Kota
                                    Depok, Jawa Barat 16434</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">petik@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+62812 9554 2914</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-github-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Apip</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#about"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Tentang kami</a>
                                <a class="text-light mb-2" href="#service"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Blog</a>
                                <a class="text-light mb-2" href="#contact"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Hubungi kami</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Ketentuan layanan</a>
                                <a class="text-light " href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Kebijakan Privasi</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Link kami</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="https://github.com/bgpaten/APIP" target="blank"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Github</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">PeTIK</a>. All
                            Rights Reserved.
                            Designed by <a class="text-white border-bottom" href="#">BarudaxWeb</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('user') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('user') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('user') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('user') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('user') }}/js/main.js"></script>
</body>

</html>

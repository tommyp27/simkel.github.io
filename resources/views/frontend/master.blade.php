<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>siwan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('template') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/{{ asset('template') }}/css/all.min.css"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('template') }}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">Kelurahan Botu</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            </div>
            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class=""></i>
                <a href="{{ url('login') }}" class="nav-item nav-link">Login</a>
            </h4>

        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-0">
        <div class="owl-carousel header-carousel position-relative mb-5 w-100" style="height: 600px">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('template') }}/img/carousel-1.jpg" alt="" class="w-100"
                    style="height: 650px">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">KELURAHAN BOTU</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Memberikan Pelayanan <span
                                        class="text-primary">Terbaik</span> untuk Masyarakat</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Tak diragukan lagi, Botu adalah tempat
                                    yang istimewa di mana indahnya alam, kekayaan budaya, dan semangat kebersamaan
                                    menyatu menjadi satu. Mengunjungi Kelurahan Botu akan memberikan pengalaman yang tak
                                    terlupakan dan membuat siapa pun merasa seperti di rumah, di tengah-tengah keluarga
                                    besar yang hangat dan penuh kasih sayang.</p>
                                <a href="{{ url('login') }}"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Login</a>
                                {{-- <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('template') }}/img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">KELURAHAN BOTU</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Memberikan Pelayanan <span
                                        class="text-primary">Terbaik</span> untuk Masyarakat</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Tak diragukan lagi, Botu adalah tempat
                                    yang istimewa di mana indahnya alam, kekayaan budaya, dan semangat kebersamaan
                                    menyatu menjadi satu. Mengunjungi Kelurahan Botu akan memberikan pengalaman yang tak
                                    terlupakan dan membuat siapa pun merasa seperti di rumah, di tengah-tengah keluarga
                                    besar yang hangat dan penuh kasih sayang.</p>
                                <a href="{{ url('login') }}"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Login</a>
                                {{-- <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->





    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-2 "
        data-wow-delay="0.1s" ">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{ url('/') }}">2023 Kelurahan Botu </a>,  All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "
        https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        Designed By <a class="border-bottom" href="#">tm2707</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Footer End -->


    {{-- <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a> --}}


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/{{ asset('template') }}/js/bootstrap.bundle.min.js">
    </script>
    <script src="{{ asset('template') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('template') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('template') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('template') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('template') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('template') }}/js/main.js"></script>
</body>

</html>

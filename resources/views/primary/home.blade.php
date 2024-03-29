<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Interenship</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('interenship/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('interenship/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('interenship/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('interenship/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('interenship/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="icon" href="{{ asset('interenship/img/profile.jpg') }}" type="image/x-icon">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('component.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('component.navbar')
    <!-- Navbar End -->


    <!-- Carousel Start -->
   @include('component.home.carousel')
    <!-- Carousel End -->


    <!-- Features Start -->
    {{-- @include('component.home.fetures') --}}
    <!-- Features End -->


    <!-- About Start -->
    @include('component.about.about')
    <!-- About End -->


    <!-- Video Modal Start -->
   @include('component.home.vidio-modal')
    <!-- Video Modal End -->

    <!-- Service Start -->
    {{-- @include('component.home.service') --}}
    <!-- Service End -->


    <!-- Project Start -->
    @include('component.project.project')
    <!-- Project End -->


    {{-- <!-- Quote Start -->
    @include('component.home.quote')
    <!-- Quote Start --> --}}


    <!-- Team Start -->
    @include('component.about.team')
    <!-- Team End -->


    <!-- Testimonial Start -->
    {{-- @include('component.home.testimonial') --}}
    <!-- Testimonial End -->


    <!-- Footer Start -->
    @include('component.footer')
    <!-- Footer End -->


    <!-- Copyright Start -->
   @include('component.copyright')
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('interenship/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('interenship/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('interenship/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('interenship/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('interenship/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('interenship/js/main.js') }}"></script>
</body>

</html>
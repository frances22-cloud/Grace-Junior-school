<!DOCTYPE html>
<html lang="en">

<head>
    <title>Grace Junior School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href={{ asset('frontend/css/open-iconic-bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/css/animate.css') }}>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href={{ asset('frontend/css/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/css/owl.theme.default.min.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/css/magnific-popup.css') }}>

    <link rel="stylesheet" href={{ asset('frontend/css/aos.css') }}>

    <link rel="stylesheet" href={{ asset('frontend/css/ionicons.min.css') }}>

    <link rel="stylesheet" href={{ asset('frontend/css/flaticon.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/css/icomoon.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/css/style.css') }}>
</head>

<body>
    <div class="py-2 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md-5 pr-4 d-flex topper align-items-center">
                            <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-map"></span></div>
                            <span class="text">Orisai (Baghdad), Ngora District</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">gjuniororisai@gmail.com</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text">+256 782996567/+256788625005</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="{{ url('home') }}">
                <img src="{{ asset('frontend/images/logo.jpg') }}" alt="Grace Junior" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ url('home') }}" class="nav-link pl-0">Home</a></li>
                    <li class="nav-item"><a href="{{ url('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item active"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="{{ url('gallery') }}" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="{{ url('academics') }}" class="nav-link">Academics</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('frontend/images/pupils-4.jpeg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Contact Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">

                <!-- Address -->
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <div class="mb-2">
                            <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h3 class="mb-3">Address</h3>
                        <p>Orisai (Baghdad), Ngora District</p>
                    </div>
                </div>

                <!-- Contact Number -->
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <div class="mb-3">
                            <i class="fas fa-phone-alt fa-2x text-success"></i>
                        </div>
                        <h3 class="mb-3">Contact Number</h3>
                        <p><a href="tel:+256782996567">+256782996567</a> / <a
                                href="tel:+256788625005">+256788625005</a></p>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <div class="mb-3">
                            <i class="fas fa-envelope fa-2x text-danger"></i>
                        </div>
                        <h3 class="mb-3">Email Address</h3>
                        <p><a href="mailto:gjuniororisai@gmail.com">gjuniororisai@gmail.com</a></p>
                    </div>
                </div>

                <!-- Office Hours -->
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <div class="mb-3">
                            <i class="fas fa-clock fa-2x text-warning"></i>
                        </div>
                        <h3 class="mb-3">Office Hours</h3>
                        <p>Mon - Fri: 8:00 AM - 5:00 PM <br> Sat: 9:00 AM - 12:00 PM</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container-fluid">
            <div class="row d-flex align-items-stretch no-gutters" style="min-height:500px;">
                <div class="col-md-6 d-flex">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4047230143638!2d33.735445973813704!3d1.525234960989423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f10!3m3!1m2!1s0x1779aa77ac7da3e7%3A0x7833ed8f0375ae36!2sGrace%20Junior%20Primary%20School!5e0!3m2!1sen!2ske!4v1759593309686!5m2!1sen!2ske"
                        class="w-100 h-100" style="border:0; min-height:500px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" title="Grace Junior Primary School Location">
                    </iframe>
                </div>
                <div class="col-md-6 d-flex">
                    <div
                        class="card shadow-lg border-0 rounded-lg w-100 d-flex align-items-center justify-content-center">
                        <div class="card-body p-5 w-100">
                            <h3 class="text-center mb-4 text-primary">Get In Touch</h3>
                            <form action="{{ route('contact.send') }}" method="POST">
                                @csrf

                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <div class="form-group mb-3">
                                    <input type="text" name="name"
                                        class="form-control form-control-lg rounded-pill" placeholder="Your Name"
                                        value="{{ old('name') }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" name="email"
                                        class="form-control form-control-lg rounded-pill" placeholder="Your Email"
                                        value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="tel" name="phone"
                                        class="form-control form-control-lg rounded-pill" placeholder="Phone Number"
                                        value="{{ old('phone') }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="subject"
                                        class="form-control form-control-lg rounded-pill" placeholder="Subject"
                                        value="{{ old('subject') }}" required>
                                </div>
                                <div class="form-group mb-4">
                                    <textarea name="message" cols="30" rows="5" class="form-control form-control-lg rounded"
                                        placeholder="Message" required>{{ old('message') }}</textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill shadow-sm">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Contact Information</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Orisai (Baghdad),
                                        Ngora District, Uganda</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+256
                                            782996567 / +256 788625005</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">gjuniororisai@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Office Hours</h2>
                        <div class="block-21 mb-4 d-flex flex-column">
                            <p class="mb-1">Monday – Friday: 8:00 AM – 4:00 PM</p>
                            <p class="mb-0">Saturday – Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5 ml-md-4">
                        <h2 class="ftco-heading-2">Useful Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('home') }}"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                            <li><a href="{{ url('about') }}"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                            <li><a href="{{ url('gallery') }}"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Gallery</a>
                            </li>
                            <li><a href="{{ url('academics') }}"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Academics</a>
                            </li>
                            <li><a href="{{ url('contact') }}"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Subscribe Us!</h2>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2 text-center"
                                    placeholder="Enter email address">
                                <input type="submit" value="Subscribe" class="form-control submit px-3">
                            </div>
                        </form>
                    </div>
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Grace Junior School. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <script>
        var map = L.map('school-map').setView([1.52517, 33.73819], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        L.marker([1.52517, 33.73819]).addTo(map)
            .bindPopup("<b>Grace Junior Primary School</b><br>Orisai Village, Ngora District, Uganda")
            .openPopup();
    </script>

    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend/js/scrollax.min.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('frontend/js/google-map.js') }}"></script> --}}
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

</body>

</html>

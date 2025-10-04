<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery - Grace Junior School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.ico') }}">

    <link rel="stylesheet" href="{{ url('frontend/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/animate.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/css/aos.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
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
                            <span class="text">+256782996567/+256788625005</span>
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
                    <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
                    <li class="nav-item active"><a href="{{ url('gallery') }}" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="{{ url('academics') }}" class="nav-link">Academics</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('frontend/images/img-8.jpeg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Photo Gallery</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('home') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-2"><span>Our</span> Gallery</h2>
                    <p>Capturing memorable moments and activities at Grace Junior School</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="gallery-item mb-4">
                        <a href="{{ asset('frontend/images/img3.jpeg') }}"
                            class="image-popup img d-flex align-items-center"
                            style="background-image: url('{{ asset('frontend/images/img3.jpeg') }}'); height: 300px; background-size: cover; background-position: center;">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="gallery-item mb-4">
                        <a href="{{ asset('frontend/images/img2.jpeg') }}"
                            class="image-popup img d-flex align-items-center"
                            style="background-image: url('{{ asset('frontend/images/img2.jpeg') }}'); height: 300px; background-size: cover; background-position: center;">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="gallery-item mb-4">
                        <a href="{{ asset('frontend/images/img-7.jpeg') }}"
                            class="image-popup img d-flex align-items-center"
                            style="background-image: url('{{ asset('frontend/images/img-7.jpeg') }}'); height: 300px; background-size: cover; background-position: center;">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="gallery-item mb-4">
                        <a href="{{ asset('frontend/images/img-4.jpeg') }}"
                            class="image-popup img d-flex align-items-center"
                            style="background-image: url('{{ asset('frontend/images/img-4.jpeg') }}'); height: 300px; background-size: cover; background-position: center;">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="gallery-item mb-4">
                        <a href="{{ asset('frontend/images/image1.jpeg') }}"
                            class="image-popup img d-flex align-items-center"
                            style="background-image: url('{{ asset('frontend/images/image1.jpeg') }}'); height: 300px; background-size: cover; background-position: center;">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="gallery-item mb-4">
                        <a href="{{ asset('frontend/images/image2.jpeg') }}"
                            class="image-popup img d-flex align-items-center"
                            style="background-image: url('{{ asset('frontend/images/image2.jpeg') }}'); height: 300px; background-size: cover; background-position: center;">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="gallery-item mb-4">
                        <a href="{{ asset('frontend/images/image3.jpeg') }}"
                            class="image-popup img d-flex align-items-center"
                            style="background-image: url('{{ asset('frontend/images/image3.jpeg') }}'); height: 300px; background-size: cover; background-position: center;">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="gallery-item mb-4">
                        <a href="{{ asset('frontend/images/img-1.jpeg') }}"
                            class="image-popup img d-flex align-items-center"
                            style="background-image: url('{{ asset('frontend/images/img-1.jpeg') }}'); height: 300px; background-size: cover; background-position: center;">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="gallery-item mb-4">
                        <a href="{{ asset('frontend/images/img-8.jpeg') }}"
                            class="image-popup img d-flex align-items-center"
                            style="background-image: url('{{ asset('frontend/images/img-8.jpeg') }}'); height: 300px; background-size: cover; background-position: center;">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
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

    <script src="{{ url('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ url('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ url('frontend/js/popper.min.js') }}"></script>
    <script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ url('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('frontend/js/aos.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ url('frontend/js/scrollax.min.js') }}"></script>
    <script src="{{ url('frontend/js/google-map.js') }}"></script>
    <script src="{{ url('frontend/js/main.js') }}"></script>

</body>

</html>

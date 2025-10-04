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

    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.ico') }}">

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
            <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a href="{{ url('home') }}" class="nav-link pl-0">Home</a></li>
                    <li class="nav-item active"><a href="{{ url('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item "><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="{{ url('teacher') }}" class="nav-link">Events and Activities</a></li>
                    <li class="nav-item"><a href="{{ url('courses') }}" class="nav-link">Academics</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('frontend/images/img-2.jpeg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">About Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
                    <div class="text px-4 ftco-animate">
                        <h2 class="mb-4">Welcome to Grace Junior School</h2>
                        <h5 class="text-muted mb-4"><em>“Shine in Excellence”</em></h5>
                        <p>Grace Junior School, located in the heart of our community, has been dedicated to nurturing
                            young learners since 1998. We offer a strong academic curriculum supported by qualified
                            teachers who inspire excellence and character development. Our aim is to provide children
                            with the knowledge, values, and confidence they need to succeed in school and beyond.</p>
                        <p>Alongside academics, we create opportunities for learners to explore their talents through
                            sports, music, and co-curricular activities. With a safe and supportive environment, a
                            well-stocked library, and modern learning resources, Grace Junior School continues to be a
                            place where children grow, discover their potential, and truly shine in excellence.</p>
                        <p><a href="#" class="btn btn-secondary px-4 py-3">Read More</a></p>

                    </div>
                </div>
                <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                    <h2 class="mb-4">What We Offer</h2>
                    <p>At our school, we provide a nurturing environment where every child can learn and grow. We offer
                        quality education, fun learning activities,
                        and opportunities to develop talents and values that last a lifetime.</p>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-security"></span></div>
                                <div class="text">
                                    <h3>Safety First</h3>
                                    <p>We provide a safe, caring environment where every child thrives daily.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-reading"></span></div>
                                <div class="text">
                                    <h3>Regular Classes</h3>
                                    <p>Structured classes with skilled teachers ensure consistent learning for every
                                        student.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-diploma"></span></div>
                                <div class="text">
                                    <h3>Dedicated Educators</h3>
                                    <p>Certified, experienced teachers are committed to nurturing students’ full
                                        potential.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-education"></span></div>
                                <div class="text">
                                    <h3>Sufficient Classrooms</h3>
                                    <p>Spacious classrooms with modern furniture and aids foster focused learning daily.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-jigsaw"></span></div>
                                <div class="text">
                                    <h3>Safe Drinking Water</h3>
                                    <p>Our school ensures access to clean and safe drinking water, promoting health and
                                        well-being for all students..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-kids"></span></div>
                                <div class="text">
                                    <h3>Healthy Meals</h3>
                                    <p>Our school provides nutritious, balanced meals to support your child’s growth,
                                        energy, and overall well-being.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
                    <h2 class="mb-4"><span>16 Years of</span> Experience</h2>
                    <p>Grace Junior School has been providing quality education and nurturing young learners since 2007,
                        building strong foundations for academic and personal growth</p>
                </div>
            </div>
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="18">0</strong>
                                    <span>Certified Teachers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="351">0</strong>
                                    <span>Successful Kids</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="564">0</strong>
                                    <span>Happy Parents</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="300">0</strong>
                                    <span>Awards Won</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4"><span>What Parents</span> Say About Us</h2>
                    <p>Parents appreciate our caring environment, dedicated teachers, and holistic approach that helps
                        children excel academically and socially.</p>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4"
                                    style="background-image: url({{ asset('frontend/images/person_1.jpg') }})"></div>
                                <div class="text ml-2 bg-light">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Grace Junior School has transformed my child’s confidence and love for learning.
                                    </p>
                                    <p class="name">Raymond Odukul</p>
                                    <span class="position">Father</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4"
                                    style="background-image: url({{ asset('frontend/images/person_2.jpg') }})"></div>
                                <div class="text ml-2 bg-light">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>The teachers are patient, supportive, and truly care about every student’s
                                        growth.</p>
                                    <p class="name">Grace Akkello</p>
                                    <span class="position">Mother</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4"
                                    style="background-image: url({{ asset('frontend/images/person_3.jpg') }})"></div>
                                <div class="text ml-2 bg-light">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>My child enjoys school daily and is developing excellent social skills.</p>
                                    <p class="name">Mark Felix</p>
                                    <span class="position">Father</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4"
                                    style="background-image: url({{ asset('frontend/images/person_4.jpg') }})"></div>
                                <div class="text ml-2 bg-light">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>The school environment is safe and nurturing, giving my child confidence every
                                        day.</p>
                                    <p class="name">Rodel Golez</p>
                                    <span class="position">Mother</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4"
                                    style="background-image: url({{ asset('frontend/images/img-4.jpeg') }})"></div>
                                <div class="text ml-2 bg-light">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Grace Junior School balances academics and co-curricular activities perfectly.
                                    </p>
                                    <p class="name">Okello John</p>
                                    <span class="position">Father</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb"
        style="background-image: url('frontend/images/gjs-structure.jpeg')" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5 px-md-5 bg-primary">
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                        <h2 class="mb-4">Contact & Admissions</h2>
                        <p>Reach out to us for admissions or any questions about Grace Junior School.</p>
                    </div>
                    <form action="#" class="appointment-form ftco-animate">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Orisai (Baghdad),
                                        Ngora District</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+256
                                            782996567/+256788625005</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">gjuniororisai@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    {{-- <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                        about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-5 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                        about</a></h3>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('home') }}"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                            <li><a href="{{ url('about') }}"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                            <li><a href="{{ url('contact') }}"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Contact</a>
                            </li>
                            <li><a href="{{ url('teacher') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Events & Activities </a>
                            </li>
                            <li><a href="{{ url('courses') }}"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Academics</a>
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
            {{-- <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div> --}}
        </div>
    </footer>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
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

</body>

</html>

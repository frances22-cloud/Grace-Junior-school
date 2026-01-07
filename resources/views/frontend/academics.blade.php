<!DOCTYPE html>
<html lang="en">

<head>
    <title>Academics - Grace Junior School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
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
                            <span class="text">gjschool@creedafrica.org</span>
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
                    <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="{{ url('gallery') }}" class="nav-link">Gallery</a></li>
                    <li class="nav-item active"><a href="{{ url('academics') }}" class="nav-link">Academics</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2"
        style="background-image: url('{{ asset('frontend/images/image8.jpeg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Academics</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('home') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Academics <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Curriculum Overview Section -->
    <section class="ftco-section" style="padding-top: 40px; padding-bottom: 70px;">
        <div class="container">
            <div class="row justify-content-center mb-5 pt-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Our</span> Curriculum</h2>
                    <p>At Grace Junior School, we provide a comprehensive, child-centered education that nurtures
                        academic excellence, character development, and practical skills for life.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Subjects & Programs Section -->
    <section class="ftco-section" style="padding-top: 40px; padding-bottom: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 course d-lg-flex ftco-animate">
                    <div class="img" style="background-image: url('{{ asset('frontend/images/image7.jpeg') }}');">
                    </div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Mathematics</a></h3>
                        <p class="subheading"><span>Focus:</span> Numeracy & Problem Solving</p>
                        <p>Building strong foundational skills in arithmetic, geometry, and logical reasoning to develop
                            confident mathematical thinkers.</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
                    <div class="img" style="background-image: url('{{ asset('frontend/images/image6.jpeg') }}');">
                    </div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">English Language</a></h3>
                        <p class="subheading"><span>Focus:</span> Reading, Writing & Communication</p>
                        <p>Developing literacy skills through engaging activities that enhance reading comprehension,
                            creative writing, and effective communication.</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
                    <div class="img" style="background-image: url('{{ asset('frontend/images/image4.jpeg') }}');">
                    </div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Science</a></h3>
                        <p class="subheading"><span>Focus:</span> Exploration & Discovery</p>
                        <p>Hands-on experiments and observations that foster curiosity about the natural world and
                            develop scientific thinking.</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
                    <div class="img" style="background-image: url('{{ asset('frontend/images/img-12.jpeg') }}');">
                    </div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Social Studies</a></h3>
                        <p class="subheading"><span>Focus:</span> Community & Culture</p>
                        <p>Understanding our society, history, geography, and cultural heritage to develop informed and
                            responsible citizens.</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
                    <div class="img" style="background-image: url('{{ asset('frontend/images/pe.jpeg') }}');">
                    </div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Physical Education</a></h3>
                        <p class="subheading"><span>Focus:</span> Health & Fitness</p>
                        <p>Promoting physical development, teamwork, and healthy lifestyle habits through sports, games,
                            and exercise activities.</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
                    <div class="img" style="background-image: url('{{ asset('frontend/images/image2.jpeg') }}');">
                    </div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Computer Lessons</a></h3>
                        <p class="subheading"><span>Focus:</span> Digital Literacy</p>
                        <p>Introduce children to digital skills, coding</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Features Section -->
    <section class="ftco-section testimony-section bg-light" style="padding-top: 40px; padding-bottom: 70px;">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-2"><span>School</span> Levels</h2>
                    <p>Grace Junior School provides a strong learning foundation across all levels — from nurturing
                        curiosity in nursery to preparing young learners for academic excellence in upper primary.</p>
                </div>
            </div>
            <div class="row">
                <!-- Nursery -->
                <div class="col-md-4 ftco-animate">
                    <div class="text bg-white p-4 text-center" style="height: 100%;">
                        <span class="icon-child" style="font-size: 60px; color: #f96d00;"></span>
                        <h3 class="mt-3">Nursery</h3>
                        <p>Our nursery program encourages early childhood development through play, creativity, and
                            social interaction in a warm and caring environment.</p>
                    </div>
                </div>

                <!-- Lower Primary -->
                <div class="col-md-4 ftco-animate">
                    <div class="text bg-white p-4 text-center" style="height: 100%;">
                        <span class="icon-pencil" style="font-size: 60px; color: #f96d00;"></span>
                        <h3 class="mt-3">Lower Primary (P1 - P3)</h3>
                        <p>We build strong literacy and numeracy skills while encouraging critical thinking and
                            curiosity to lay a solid academic foundation.</p>
                    </div>
                </div>

                <!-- Upper Primary -->
                <div class="col-md-4 ftco-animate">
                    <div class="text bg-white p-4 text-center" style="height: 100%;">
                        <span class="icon-graduation-cap" style="font-size: 60px; color: #f96d00;"></span>
                        <h3 class="mt-3">Upper Primary (P4 - P7)</h3>
                        <p>Preparing learners for national exams and beyond by focusing on academic excellence,
                            leadership, and holistic personal development.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Calendar Section -->
    <section class="ftco-section" style="padding-top: 40px; padding-bottom: 0px;">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-2"><span>Academic</span> Information</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ftco-animate">
                    <div class="bg-light p-4 mb-2">
                        <h4><span class="icon-calendar mr-2"></span>Academic Calendar</h4>
                        <p class="mb-2"><strong>Term 1:</strong> January - April</p>
                        <p class="mb-2"><strong>Term 2:</strong> May - August</p>
                        <p class="mb-2"><strong>Term 3:</strong> September - December</p>
                        <p class="mt-3"><small>Mid-term breaks and public holidays are observed as per the national
                                calendar.</small></p>
                    </div>
                </div>
                <div class="col-md-6 ftco-animate">
                    <div class="bg-light p-4 mb-2">
                        <h4><span class="icon-clock-o mr-2"></span>School Hours</h4>
                        <p class="mb-2"><strong>Morning Assembly:</strong> 7:30 AM</p>
                        <p class="mb-2"><strong>Classes Begin:</strong> 8:00 AM</p>
                        <p class="mb-2"><strong>Lunch Break:</strong> 1:00 PM - 2:00 PM</p>
                        <p class="mb-2"><strong>Dismissal:</strong> 5:00 PM</p>
                    </div>
                </div>
                <div class="col-md-6 ftco-animate">
                    <div class="bg-light p-4 mb-2">
                        <h4><span class="icon-clipboard mr-2"></span>Assessment & Reporting</h4>
                        <p>We conduct continuous assessments to monitor student progress. Report cards are issued at the
                            end of each term, parents are encouraged to discuss their children's performance.</p>
                    </div>
                </div>
                <div class="col-md-6 ftco-animate">
                    <div class="bg-light p-4 mb-2">
                        <h4><span class="icon-star mr-2"></span>Extra-Curricular Activities</h4>
                        <p>Students participate in clubs, sports, music, drama, and field trips that complement
                            classroom learning and help develop well-rounded individuals with diverse interests and
                            skills.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Contact Information</h2>
                        <div class="block-23 mb-2">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Orisai (Baghdad),
                                        Ngora District, Uganda</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+256
                                            782996567 / +256 788625005</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">gjschool@creedafrica.org</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-3">
                        <h2 class="ftco-heading-2">Office Hours</h2>
                        <div class="block-21 mb-2 d-flex flex-column">
                            <p class="mb-1">Monday – Friday: 8:00 AM – 5:00 PM</p>
                            <p class="mb-0">Weekends: 9:00am - 3:00pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-3 ml-md-4">
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
                    <div class="ftco-footer-widget mb-3">
                        <h2 class="ftco-heading-2">Subscribe!</h2>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2 text-center"
                                    placeholder="Enter email address">
                                <input type="submit" value="Subscribe" class="form-control submit px-3">
                            </div>
                        </form>
                    </div>
                    <div class="ftco-footer-widget mb-2">
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

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Grace Junior School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('frontend/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/animate.css') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.ico') }}">

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
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="{{ url('home') }}" class="nav-link pl-0">Home</a></li>
                        <li class="nav-item"><a href="{{ url('about') }}" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="{{ url('gallery') }}" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="{{ url('academics') }}" class="nav-link">Academics</a></li>
                    </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url({{ asset('frontend/images/img1.jpeg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center"
                    data-scrollax-parent="true">
                    <div class="col-md-8 text-center ftco-animate">
                        <h1 class="mb-4">Children Are The Best <span>Explorers In The World</span></h1>
                        <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url({{ asset('frontend/images/img-1.jpeg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center"
                    data-scrollax-parent="true">
                    <div class="col-md-8 text-center ftco-animate">
                        <h1 class="mb-4">Perfect Learned<span> For Your Child</span></h1>
                        <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-services ftco-no-pb">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-teacher"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Certified Teachers</h3>
                            <p>Experienced and dedicated teachers committed to guiding every child toward excellence and
                                holistic growth</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-reading"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Safe Learning Environment</h3>
                            <p>A secure, friendly, and supportive atmosphere where children feel confident to learn and
                                thrive..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-books"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Book &amp; Library</h3>
                            <p>A well-stocked library that encourages a culture of reading, research, and knowledge
                                exploration</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-diploma"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Curriculum</h3>
                            <p>A well-structured curriculum designed to build strong academic foundations while
                                nurturing creativity, critical thinking, and life skills.</p>
                        </div>
                    </div>
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
                    <p>At our school, we provide a nurturing environment where every child can learn and grow.
                        We offer quality education, fun learning activities,
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

    <section class="ftco-intro" style="background-image: url('{{ asset('frontend/images/image2.jpeg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Training a child</h2>
                    <p class="mb-0">We teach children respect, politeness, and positive behavior for daily life.</p>

                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Learn More</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-2"><span>Certified</span> Teachers</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url('{{ asset('frontend/images/tr-1.jpeg') }}');"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Mr.Okalebo Amos Brian</h3>
                            <span class="position mb-2">Deputy Head Teacher</span>
                            <div class="faded">
                                <p>Teaches Social Studies and Religious Education from lower to upper primary</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url('{{ asset('frontend/images/tr-2.jpeg') }}');"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Mr.Okwomi Boniface</h3>
                            <span class="position mb-2">Director Of Studies</span>
                            <div class="faded">
                                <p>Teaches Kiswahili language from lower primary to upper primary.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url('{{ asset('frontend/images/tr-5.jpeg') }}');"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Mrs.Akello Sophia</h3>
                            <span class="position mb-2">Tr. Incharge Debate Club</span>
                            <div class="faded">
                                <p>Teaches English language from lower primary to upper primary.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url('{{ asset('frontend/images/tr-4.jpeg') }}');"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Mr.Ecodu Benedicto</h3>
                            <span class="position mb-2">Examinations Master</span>
                            <div class="faded">
                                <p>Teaches Integrated Science from lower primary to upper primary.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-2"><span>Subjects</span> We Teach</h2>
                    <p>Grace Junior School offers a broad curriculum to build strong academic foundations and essential
                        skills.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 course d-lg-flex ftco-animate">
                    <div class="img" style="background-image: url('{{ asset('frontend/images/tr-5.jpeg') }}');">
                    </div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">English</a></h3>
                        <p>Develops reading, writing, grammar, and communication skills for everyday use.</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
                    <div class="img" style="background-image: url('{{ asset('frontend/images/tr-1.jpeg') }}');">
                    </div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Social Studies (SST)</a></h3>
                        <p>Introduces learners to history, geography, civics, and community awareness.</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
                    <div class="img" style="background-image: url('{{ asset('frontend/images/tr-3.jpeg') }}');">
                    </div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Science</a></h3>
                        <p>Encourages curiosity, observation, and understanding of the natural and physical world.</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
                    <div class="img" style="background-image: url('{{ asset('frontend/images/tr-4.jpeg') }}');">
                    </div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Mathematics</a></h3>
                        <p>Focuses on numeracy, problem-solving, and logical thinking skills for everyday use.</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate">
                    <div class="img" style="background-image: url('{{ asset('frontend/images/tr-2.jpeg') }}');">
                    </div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Swahili</a></h3>
                        <p>Develops reading, writing, and speaking skills in Swahili, fostering cultural understanding.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url('{{ asset('frontend/images/bg_4.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
                    <h2 class="mb-2"><span>16 Years of</span> Experience</h2>
                    <p>Grace Junior School has been providing quality education and nurturing young learners since 2007,
                        building strong foundations for academic and personal growth.</p>

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
                                    <strong class="number" data-number="20">0</strong>
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
                    <h2 class="mb-2"><span>What Parents</span> Say About Us</h2>
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
                        <h2 class="mb-2">Contact Admissions</h2>
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

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-2"><span>Our</span> Clubs</h2>
                    <p>Students at Grace Junior School can join these clubs to develop skills and explore interests.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url('{{ asset('frontend/images/image5.jpeg') }}');"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Young Farmer's Clubs</h3>
                            <div class="faded">
                                <p>Students learn practical farming skills and environmental stewardship.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url('{{ asset('frontend/images/image2.jpeg') }}');"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Computer Club</h3>
                            <div class="faded">
                                <p>Introduces students to computer skills, coding, and digital literacy.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url('{{ asset('frontend/images/pupils-4.jpeg') }}');"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Debate Club</h3>
                            <div class="faded">
                                <p>Students engage in public speaking, critical thinking, and argumentation.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url('{{ asset('frontend/images/img-2.jpeg') }}');"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Christian Union Club</h3>
                            <div class="faded">
                                <p>Christian Union Club is a place for students to explore and deepen their faith.</p>
                            </div>
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
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
    <script src="{{ url('frontend/js/google-map.js') }}"></script>
    <script src="{{ url('frontend/js/main.js') }}"></script>

</body>

</html>

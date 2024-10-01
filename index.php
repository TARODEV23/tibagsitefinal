<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css"> <!-- root styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/all.min.css"> <!-- fontawesome -->
    <link rel="stylesheet" href="assets/webfonts/fa-solid-900.ttf"> <!-- fontawesome -->
    <link rel="stylesheet" href="assets/webfonts/fa-brands-400.ttf"> <!-- fontawesome -->
    <link rel="stylesheet" href="assets/alertify/css/alertify.min.css"> <!-- alertify for notification -->
    <link rel="stylesheet" href="assets/alertify/css/bootstrap.min.css"> <!-- alertify for notification -->
    <script src="assets/js/bootstrap.min.js"></script> <!-- bootstrap js -->
    <script src="assets/alertify/js/alertify.min.js"></script> <!-- alertify js -->
    <link rel="icon" href="assets/images/tibag_seal.png"> <!-- website icon -->
    <title>Tibag Baliuag, Bulacan</title>
</head>

<style>
    body {
        overflow-x: none;
        margin: 0;
        padding: 0;
    }

    .navbar-brand {
        font-family: var(--tnr);
    }

    #hero_section {
        position: relative;
        width: 100%;
        height: fit-content;
        background-image: url(assets/images/tibag_bg.jpg);
        background-size: cover;
        background-position: center;
    }

    #accomplishment_section {
        background: linear-gradient(rgba(0, 225, 0, 0.2), rgba(0, 225, 0, 0.2)), url('assets/images/tibag_bg.jpg'); /* green transparent */
        background-size: cover;
        background-position: center;
        width: 100%;
        height: fit-content;
    }

    #jobfair_section {
        background: linear-gradient(rgba(57,147,221,0.5), rgba(57,147,221,0.5)), url('assets/images/tibag_bg.jpg');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: fit-content;
    }

    .jobfairImg {
        height: 50dvh;
    }

    .jobfairText:hover {
        border: 1px solid var(--green);
        border-radius: 5px;
        background-color: var(--green);
        color: var(--light);
    }

    #footer_section {
        background-color: var(--green);
        height: fit-content;
    }

    #disaster_risk_section {
        background-color: var(--blue);
        background-size: cover;
        background-position: center;
        width: 100%;
    }

    #officials_section {
        background-image: linear-gradient(var(--blue), var(--green));
        height: 50dvh;
    }

    @media only screen and (max-width: 600px) {
        .jobfairImg {
            height: 100%;
        }
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg" style="background-image: linear-gradient(var(--blue), var(--blue), rgba(0,0,0,0));"> <!-- navbar here -->
        <div class="container-fluid">
            <a href="" class="navbar-brand fw-bold"  style="text-shadow: 2px 2px 5px var(--dark); color: var(--green); -webkit-text-stroke: .2px var(--dark);">
                <img src="assets/images/tibag_seal.png" style="width: 30px; height: 30px;"> Tibag Baliuag, Bulacan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPhone" aria-controls="navbarNav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarPhone">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"> <!-- log in modal start -->
                        <button class="btn btn-outline-success fw-bold me-1 mb-md-1" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Log In
                        </button>
                    </li>
                    <div class="modal fade" tabindex="-1" id="loginModal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h1>Log In</h1>
                                    <div class="border-bottom my-2"></div>
                                    <form action="">
                                        <div class="form-floating mb-2">
                                            <input type="email" class="form-control" placeholder="email" name="userEmail" required>
                                            <label for="" class="form-label fw-bold">Email Address</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" class="form-control" placeholder="email" name="userPassword" required>
                                            <label for="" class="form-label fw-bold">Password</label>
                                        </div>
                                        <a href="" class="nav-link text-danger">Forgot your password?</a>
                                        <button class="btn btn-outline-success fw-bold float-end" style="border-radius: 0px;" name="userLoginBtn">
                                            Log In
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- log in modal end -->
                    <li class="nav-item">
                        <a href="pages/tibagsignup.php" class="btn btn-success fw-bold" target="_blank">
                            Sign Up
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav> <!-- navbar here -->

    <section id="hero_section"> <!-- landing page -->
        <div class="container container-fluid pt-lg-2 pb-lg-3 py-sm-1">
            <div class="row p-3 p-md-5 g-lg-2 justify-content-center align-items-center text-center"> <!-- hero and image row here -->
                <div class="col-lg-6 col-md-12">
                    <h1 class="text-start md-text-center mb-0 fw-bold" style="text-shadow: 2px 2px 5px var(--light);">Barangay Tibag</h1>
                    <h5 class="text-start md-text-center mt-0 fw-bold" style="text-shadow: 2px 2px 5px var(--light);">Baliuag, Bulacan</h5>
                    <!-- <p class="text-start md-text-center mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p> -->
                    <ul class="nav d-lg-flex d-none d-md-flex">
                        <li class="nav-item text-lg-start text-md-center">
                            <a href="#jobfair_section" class="nav-link fw-bold text-success" style="text-shadow: 2px 2px 5px var(--light);">Job Fair</a>
                        </li>
                        <li class="nav-item text-lg-start text-md-center">
                            <a href="#accomplishment_section" class="nav-link fw-bold text-success" style="text-shadow: 2px 2px 5px var(--light);">Achievements</a>
                        </li>
                        <li class="nav-item text-lg-start text-md-center">
                            <a href="#footer_section" class="nav-link fw-bold text-success d-none d-md-block" style="text-shadow: 2px 2px 5px var(--light);">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="text-center align-items-center justify-content-center text-center">
                        <img src="assets/images/tibag_seal.png" class="d-none d-lg-block ms-lg-5 ms-md-0" alt="" style="width: 20rem; height: 20rem;  align-items: center; filter: drop-shadow(0 0 5px var(--light));">
                    </div>
                </div>
            </div> <!-- hero and image row here -->
        </div>
    </section> <!-- landing page -->

    <section id="jobfair_section"> <!-- jobfair / health / education section -->
        <div class="container container-fluid py-3">
            <div class="row mb-1">
                <div class="col"> <!-- job fair column -->
                    <h2 class="fw-bold text-center" style="text-shadow: 2px 2px 5px var(--light); -webkit-text-stroke: .5px var(--dark)">JOB FAIR</h2>
                    <div class="border-bottom my-2 px-5"></div>
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" style="filter: drop-shadow(0 0 5px var(--green));">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="500">
                                <img src="assets/images/job.jpg" class="d-block w-100 img-fluid jobfairImg" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="fw-bold jobfairText" style="text-shadow: 2px 2px 5px var(--light);">Job Fair Title</h5>
                                    <p class="fw-bold jobfairText" style="text-shadow: 2px 2px 5px var(--light);">Job Fair information here.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> <!-- job fair column -->
            </div>

            <div class="row g-1 mt-2">
                <div class="col-12 col-md-6"> <!-- education column -->
                    <h2 class="text-center fw-bold" style="text-shadow: 2px 2px 5px var(--light); -webkit-text-stroke: .5px var(--dark)">EDUCATION</h2>
                    <div class="border-bottom my-2"></div>
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" style="filter: drop-shadow(0 0 5px var(--green));">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="500">
                                <img src="assets/images/education.jpg" class="d-block w-100 img-fluid jobfairImg" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="fw-bold jobfairText" style="text-shadow: 2px 2px 5px var(--light);">Education Title</h5>
                                    <p class="fw-bold jobfairText" style="text-shadow: 2px 2px 5px var(--light);">Job Fair information here.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> <!-- education column -->

                <div class="col-12 col-md-6"> <!-- health column -->
                    <h2 class="text-center fw-bold" style="text-shadow: 2px 2px 5px var(--light); -webkit-text-stroke: .5px var(--dark)">HEALTH</h2>
                    <div class="border-bottom my-2"></div>
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" style="filter: drop-shadow(0 0 5px var(--green));">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="500">
                                <img src="assets/images/health.jpg" class="d-block w-100 img-fluid jobfairImg" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="fw-bold jobfairText" style="text-shadow: 2px 2px 5px var(--light);">Health Title</h5>
                                    <p class="fw-bold jobfairText" style="text-shadow: 2px 2px 5px var(--light);">Job Fair information here.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> <!-- health column -->
            </div>
            <div class="border-bottom mt-2"></div>
        </div>
    </section> <!-- jobfair / health / education section -->

    <section id="accomplishment_section"> <!-- section of barangay accomplishment -->
        <div class="container container-fluid p-3">
            <div class="row">
                <div class="col-12 col-md-6 text-dark"> <!-- accomp  column -->
                    <h2 class="fw-bold" style="text-shadow: 2px 2px 5px var(--light);">RECENT PROJECTS</h2>
                    <div class="card text-bg-dark mb-1 w-sm-100">
                        <img src="assets/images/education.jpg" alt="" class="card-img">
                        <div class="card-img-overlay text-dark">
                            <h5 class="card-title fw-bold">Title</h5>
                            <p class="card-text">Wider text</p>
                            <p class="card-text d-none d-lg-block"><small>Smaller text</small></p>
                        </div>
                    </div>
                    <div class="card text-bg-dark mb-1 w-sm-100">
                        <img src="assets/images/education.jpg" alt="" class="card-img">
                        <div class="card-img-overlay text-dark">
                            <h5 class="card-title fw-bold">Title</h5>
                            <p class="card-text">Wider text</p>
                            <p class="card-text d-none d-lg-block"><small>Smaller text</small></p>
                        </div>
                    </div>
                </div> <!-- accomp  column -->
                <div class="border-bottom d-flex d-md-none my-2"></div>
                <div class="col-12 col-md-6"> <!-- NO CONTENT YET -->
                    <div class="card mb-2">
                        <div class="card-body">
                            <h3 class="fw-bold">MISSION</h3>
                            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis? Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="fw-bold">VISION</h3>
                            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis?</p>
                        </div>
                    </div>
                </div> <!-- NO CONTENT YET -->
            </div>
        </div>
    </section> <!-- section of barangay accomplishment -->

    <section id="disaster_risk_section"> <!-- disaster risk management section -->
        <div class="container container-fluid p-3">
            <div class="row g-1"> <!-- alert card row here -->
                <div class="col">
                    <h2 class="fw-bold text-center" style="text-shadow: 2px 2px 5px var(--light);">Disaster Risk Management</h2>
                    <div class="row g-1 pb-3 px-3">
                        <div class="col-12 col-sm-4">
                            <div class="card">
                                <div class="card-header fw-bold bg-danger">Level 3</div>
                                <div class="card-body fw-bold">danger</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="card">
                                <div class="card-header fw-bold" style="background-color: orangered;">Level 2</div>
                                <div class="card-body fw-bold">alert</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="card">
                                <div class="card-header fw-bold bg-warning" style="background-color: orangered;">Level 1</div>
                                <div class="card-body fw-bold">warning</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- alert card row here -->

            <div class="row g-1 p-3">
                <div class="col-12 col-md-6">
                    <h5 class="fw-bold">Things to do when flood:</h5>
                    <li class="fw-bold nav-item">1: Lorem.</li>
                    <li class="fw-bold nav-item">2: Lorem, ipsum.</li>
                    <li class="fw-bold nav-item">3: Lorem, ipsum dolor.</li>
                    <li class="fw-bold nav-item">4: Lorem ipsum dolor sit.</li>
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <h5 class="fw-bold">72-HOUR SURVIVAL KIT</h5>
                    <li class="fw-bold nav-item">Whistle</li>
                    <li class="fw-bold nav-item">Clothes</li>
                    <li class="fw-bold nav-item">Bottled Water</li>
                    <li class="fw-bold nav-item">Flashlight</li>
                    <li class="fw-bold nav-item">Cellphone</li>
                </div>
            </div>
        </div>
    </section> <!-- disaster risk management section -->

    <section id="officials_section"> <!-- barangay officials section -->
        <div class="container container-fluid p-3">
            <h2 class="text-center fw-bold">OFFICIALS HERE W/ MISSION / VISION</h2>
        </div>
    </section> <!-- barangay officials section -->

    <section id="footer_section" class="p-3 justify-content-center align-items-center"> <!-- footer  section here -->
        <div class="row p-5 pb-1">
            <div class="col text-center text-md-start">
                <img src="assets/images/tibag_seal.png" alt="" class="text-center" style="width: 150px; height: 150px;">
                <p class="strong">Tibag Baliuag, Bulacan <br> <span class="lead">Alright Reserved 2024</span></p>

            </div>
            <div class="col d-none d-md-block">
                <h3 class="fw-bold mt-5">Social Media</h3>
                <ul class="nav text-start d-block">
                    <li class="nav-item">
                        <a href="" class="nav-link text-primary">Facebook</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-primary">Facebook</a>
                    </li>
                </ul>
            </div>
            <div class="col d-none d-md-block">
                <h3 class="fw-bold mt-5">Contact</h3>
                <ul class="nav d-block">
                    <p class="fw-bold">Contact no.: 09123458690</p>
                    <p class="fw-bold">Secretary: Juan Dela Cruz</p>
                    <p class="fw-bold">Treasurer: Juan Dela Cruz</p>
                </ul>
            </div>
        </div>
    </section> <!-- footer  section here -->
</body>

</html>
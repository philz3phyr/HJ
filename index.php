<?php
// Function to truncate text
function truncate_text($text, $length) {
    // Check if the text length is greater than the specified length
    if (strlen($text) > $length) {
        // Truncate the text to the specified length
        $text = substr($text, 0, $length);
        // Find the last space before the truncated text to avoid cutting off words
        $last_space = strrpos($text, ' ');
        // If a space is found, truncate the text at the last space
        if ($last_space !== false) {
            $text = substr($text, 0, $last_space);
        }
        // Append an ellipsis (...) to indicate that the text has been truncated
        $text .= '...';
    }
    return $text;
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>House of Justice | Home</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
	


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <?php include('nav.php') ?>



            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="img/back_gavel.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">House Of Justice</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">Your Trusted Advocacy Partners</h1>
                            <!-- <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p> -->
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Book Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/consult.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">House Of Justice</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">We offer top-notch legal services of all kinds.</h1>
                            <!-- <p class="mb-5 fs-5 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p> -->
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Book Appointment</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="header-carousel-item">
                    <img src="img/consult2.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Physiotherapy Center</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">Best Solution For Painful Life</h1>
                            <p class="mb-5 fs-5 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Book Appointment</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->




        <!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <!-- <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                            <img src="img/consult.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                            <div class="about-img-inner">
                                <img src="img/consult2.jpg" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                            </div>
                            <div class="about-experience">15 years experience</div>
                        </div>
                    </div> -->
                    <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            <img style="width: 100%; height: auto; display: block;" src="img/hoj_back.png" class="d-inline-block align-top" alt="Your Logo" />
                           
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            <h4 class="sub-title pe-3 mb-0"></h4>
                            <h1 class="display-3 mb-4">House of Justice</h1>
                            <p class="mb-4">is a leading public interest law centre, recognized for putting the pursuit of justice at the heart of service to its diverse clients. At House of Justice™, we match our commitment with premium advocacy skills to find solutions in law as in life for those whom we serve.</p>
                            <p class="mb-4">House of Justice™ prioritizes personal attention to our clients with a multi-disciplinary team of experts working together to find real and enduring remedies</p>
                            <p class="mb-4">At House of Justice™, we seek to be an ally of first choice to people who often believe they have nowhere else to go. Working closely with them and with our diverse partners within and beyond Nigeria, House of Justice™ works to make the path to justice an empowering client experience.</p>
                            <!-- <div class="mb-4">
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Refresing to get such a personal touch.</p>
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Duis aute irure dolor in reprehenderit in voluptate.</p>
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div> -->
                            <a href="about.html" class="btn btn-primary rounded-pill text-white py-3 px-5">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Feature Start -->
        <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Why Choose Us</h4>
                    </div>
                    <h1 class="display-3 mb-4">Check out our Practice Areas</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-people fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Family Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-globe fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">International Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-bank fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Banking & Insurance Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-handcuffs fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Criminal Law & Prevention</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-house fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Property Law & Management</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-brain fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Intellectual Property</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-gavel fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Human Rights</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-stethoscope fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Medical Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-building fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Company Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-camcorder fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Media & Communication Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-buildings fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Company Incorporation</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-hammer-brush fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Labour Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-books fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Class Action</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-bank fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Commercial Litigation</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-people-carry-box fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Alternative Dispute Resolution</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-people fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Civil Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-money-check-dollar fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Tax Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-bars-progress fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Probate Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-city fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Environmental Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-landmark fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Land & Resources Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-shield fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Securities Litigation & Professional Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-wheat fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Consumer Protection Law</h5>
                                    <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- Book Appointment Start -->
        <div class="container-fluid appointment py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
                        <div class="section-title text-start">
                           <h4 class="sub-title pe-3 mb-0"></h4>
                           <h1 class="display-4 mb-4">Let's talk more</h1>
                           <p class="mb-4">We can address any issue you encounter.</p>
                      
                       </div> 
                   </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="appointment-form rounded p-5">
                            <p class="fs-4 text-uppercase text-primary">Book a Consult</p>
                            <!-- <h1 class="display-5 mb-4">Consult with US</h1> -->
                            <form>
                                <div class="row gy-3 gx-4">
                                    <div class="col-xl-6">
                                        <input type="text" class="form-control py-3 border-primary bg-transparent text-white" placeholder="First Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" class="form-control py-3 border-primary bg-transparent text-white" placeholder="Email">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="phone" class="form-control py-3 border-primary bg-transparent" placeholder="Phone">
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select py-3 border-primary bg-transparent" aria-label="Default select example">
                                            <option selected>Your Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">FeMale</option>
                                            <option value="3">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="date" class="form-control py-3 border-primary bg-transparent">
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select py-3 border-primary bg-transparent" aria-label="Default select example">
                                            <option selected>Department</option>
                                            <option value="1">Physiotherapy</option>
                                            <option value="2">Physical Helth</option>
                                            <option value="2">Treatments</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control border-primary bg-transparent text-white" name="text" id="area-text" cols="30" rows="5" placeholder="Write Comments"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary text-white w-100 py-3 px-5">SUBMIT NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Video -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Appointment End -->


        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Meet our team</h4>
                    </div>
                    <h1 class="display-3 mb-4">Our Attorneys</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/gloria.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Gloria Mabeiam Ballason ESQ</h5>
                                <p class="mb-0">Cheif Executive Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/chidi.jpeg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Prof. Chidi Anselm Odinkalu</h5>
                                <p class="mb-0">Chairman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/alhassan.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Prof. Alhassan Mela Yakubu</h5>
                                <p class="mb-0">Chairman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/gladys.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Mrs. Gladys Biem Calvin</h5>
                                <p class="mb-0">Secretary</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Blog Start -->
     <!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0"></h4>
            </div>
            <h1 class="display-3 mb-4">Recent Articles</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet </p>
        </div>
        <div style="margin-bottom:20px" class="row g-4">
            <?php
            // Include database connection
            require_once "config.php";

            // Define query to fetch articles from the database
            $sql = "SELECT id, title, content, created_at,image_url FROM blog_posts ORDER BY id DESC LIMIT 2";


            // Execute the query
            $result = mysqli_query($conn, $sql);

            // Check if there are any articles
            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-md-3 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <!-- If you have images associated with your blog posts, you can display them here -->
                                <img src="<?php echo $row['image_url']; ?>" style="height: 250px;" class="img-fluid rounded w-100" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-9 col-xl-9 wow fadeInUp" data-wow-delay="0.1s">
            <div class="blog-content p-4">
                <div class="d-flex justify-content-between mb-4">
                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> <?php echo date("d M Y", strtotime($row['created_at'])); ?></p>
                    <!-- You can display additional information such as the number of comments here -->
                    <!-- <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a> -->
                </div>
                <a href="#" class="h4"><?php echo htmlspecialchars($row['title']); ?></a>
                <p class="my-4"><?php echo htmlspecialchars(truncate_text($row['content'], 200)); ?></p>
                <a href="read.php?id=<?php echo $row['id']; ?>" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
            </div>
        </div>

                    <?php
                }
            } else {
                echo "No articles found.";
            }

            // Close database connection
            // mysqli_close($conn);
            ?>
        </div>
    </div>
</div>

        <!-- Blog End -->


   <?php include('footer.html') ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        
    </body>

</html>
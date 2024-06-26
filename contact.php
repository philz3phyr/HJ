<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>HOJ | Contact US</title>
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



        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style mb-4">
                        <h4 class="sub-title text-white px-3 mb-0">Contact Us</h4>
                    </div>
                    <p class="mb-0 text-white">Need help with legal issues, contact US.</p>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5 col-xl-5 contact-form wow fadeInLeft" data-wow-delay="0.1s">
                        <h2 class="display-5 text-white mb-2">Get in Touch</h2>
                        <!-- <p class="mb-4 text-white">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-dark fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                        <form>
                            <div class="row g-3">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent border border-white" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent border border-white" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control bg-transparent border border-white" id="phone" placeholder="Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent border border-white" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent border border-white" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-light text-primary w-100 py-3">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-transparent rounded">
                            <div class="d-flex flex-column align-items-center text-center mb-4">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                                <h4 class="text-white">Address</h4>
                                <p class="mb-0 text-white">Office: No. 3A Angola Road, off GT Bank, Barnawa, Kaduna State, Nigeria-Africa.</p>
                            </div>
                            <div class="d-flex flex-column align-items-center text-center mb-4">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-phone-alt fa-2x text-primary"></i></div>
                                <h4 class="text-white">Mobile</h4>
                                <p class="mb-0 text-white">+234 705 384 2016</p>
                                <p class="mb-0 text-white">+234 802 840 7332</p>
                                <p class="mb-0 text-white">+234 809 601 0516</p>

                            </div>
                           
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-envelope-open fa-2x text-primary"></i></div>
                                <h4 class="text-white">Email</h4>
                                <p class="mb-0 text-white">info@houseofjusticeng.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="d-flex justify-content-center mb-4">
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href="https://www.facebook.com/groups/313784588692119/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href="https://twitter.com/houseofjustice3"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href="https://www.instagram.com/houseofjusticeonline/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="rounded h-100">
                            <iframe class="rounded w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.431684949307!2d7.430175075828492!3d10.466595264830598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104d358b5f64a5c9%3A0x52e7e83cb59b500e!2s3a%20Angola%20Rd%2C%20opposite%20GT%20Bank%2C%20Barnawa%2C%20Barden%20Yana%20800243%2C%20Kaduna%2C%20Nigeria!5e0!3m2!1sen!2sgh!4v1711895168605!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


              <!-- Footer Start -->
              <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column">
                                <h4 class="text-white mb-4">HOUSE OF JUSTICE</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolorem impedit eos autem dolores laudantium quia, qui similique
                                </p>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-share fa-2x text-white me-2"></i>
                                    <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.facebook.com/groups/313784588692119/"><span class="icon-facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://twitter.com/houseofjustice3"><i class="fab fa-twitter"></i></a>
                                    <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.instagram.com/houseofjusticeonline/"><i class="fab fa-instagram"></i></a>
                                    <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column">
                                <h4 class="mb-4 text-white">Quick Links</h4>
                                <a href=""><i class="fas fa-angle-right me-2"></i> About Us</a>
                                <a href=""><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                                <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                                <a href=""><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                                <a href=""><i class="fas fa-angle-right me-2"></i> Our Blog & News</a>
                                <a href=""><i class="fas fa-angle-right me-2"></i> Our Team</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column">
                                <h4 class="mb-4 text-white">Our Core Values</h4>
                                <a><i class="fas fa-angle-right me-2"></i> Service</a>
                                <a><i class="fas fa-angle-right me-2"></i> Integrity</a>
                                <a><i class="fas fa-angle-right me-2"></i> Courtesy</a>
                                <a><i class="fas fa-angle-right me-2"></i> Excellence</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column">
                                <h4 class="mb-4 text-white">Contact Info</h4>
                                <a href=""><i class="fa fa-map-marker-alt me-2"></i> Office: No. 3A Angola Road, off GT Bank, Barnawa, Kaduna State, Nigeria-Africa.</a>
                                <a href=""><i class="fas fa-envelope me-2"></i> info@houseofjusticeng.com</a>
                                <a href=""><i class="fas fa-phone me-2"></i> +234 705 384 2016</a>
                                <a href=""><i class="fas fa-phone me-2"></i> +234 802 840 7332</a>
                                <a href=""><i class="fas fa-phone me-2"></i> +234 809 601 0516</a>
                                <!-- <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <!-- Copyright Start -->
            <div class="container-fluid copyright py-4">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6 text-center text-md-start mb-md-0">
                            <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>HOUSE OF JUSTICE</a>, All right reserved.</span>
                        </div>
                        <div class="col-md-6 text-center text-md-end text-white">
                            <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                            <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                            <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                            <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright End -->

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
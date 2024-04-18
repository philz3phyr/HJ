
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>House of Justice | Books</title>
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



        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">HOJ Books</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Store</a></li>
                    <li class="breadcrumb-item active text-primary">Books</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


   
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0"> Books</h4>
                    </div>
                    <h1 class="display-3 mb-4"></h1>
                    <!-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p> -->
                </div>
                <div class="row g-4 justify-content-center">
                <div class="col-md-3 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <!-- If you have images associated with your blog posts, you can display them here -->
                                <img src="img/book.jpg" style="height:250px;" class="img-fluid w-100" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-9 col-xl-9 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-content p-4">
                            
                            <a href="#" class="h4">Lorem Ipsum</a>
                            <p class="my-4">Lorem Ipsum dolor sit amet.</p>
                            <div class="d-flex justify-content-between mb-4">
                                <h6 class="mb-0 text-muted"><i class="fa fa-user-alt text-primary"></i><span>  Author:</span> Lorem Ipsum</h6>
                                <!-- You can display additional information such as the number of comments here -->
                                <a href="#" class="text-muted"><span class="fa fa-calendar text-primary"></span> 2019-12-07</a>
                            </div>
                            <a href="uploads/2019-Betty-Murungi-keynote.pdf" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Add to Cart </a>

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


<?php include("footer.html") ?>

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
           <script>
  function fetchYouTubeThumbnail(videoId) {
    return fetch(`https://www.googleapis.com/youtube/v3/videos?id=${videoId}&key=AIzaSyAoozTETQ1pPPLkSj9aIcEVUm4gm9MlJZQ&part=snippet`)
        .then(response => response.json())
        .then(data => {
            const thumbnailUrl = data.items[0].snippet.thumbnails.default.url;
            return thumbnailUrl;
        })
        .catch(error => {
            console.error('Error fetching YouTube video:', error);
            return null;
        });
}

// Get all elements with class '.service-item'
const serviceItems = document.querySelectorAll('.service-item');

// Iterate over each service item and fetch thumbnail
serviceItems.forEach(serviceItem => {
    const videoBtn = serviceItem.querySelector('.btn-play');
    const videoSrc = videoBtn.getAttribute('data-src');
    const videoId = videoSrc.split('/').pop(); // Extract video ID from URL

    fetchYouTubeThumbnail(videoId)
        .then(thumbnailUrl => {
            if (thumbnailUrl) {
                // Create img element and set thumbnail URL
                const thumbnailImg = document.createElement('img');
                thumbnailImg.src = thumbnailUrl;
                thumbnailImg.classList.add('img-fluid', 'rounded', 'w-100', 'h-100');
                thumbnailImg.style.objectFit = 'cover';
                
                // Append thumbnail to the '.video' div within the service item
                const videoDiv = serviceItem.querySelector('.video');
                videoDiv.appendChild(thumbnailImg);
            }
        });
});

        </script>
    </body>

</html>
<!-- AIzaSyAoozTETQ1pPPLkSj9aIcEVUm4gm9MlJZQ -->

<?php
$url = "https://api.paystack.co/transaction/initialize";

$fields = [
  'email' => "customer@email.com",
  'amount' => "20000",
  'callback_url' => "https://hello.pstk.xyz/callback",
  'metadata' => ["cancel_action" => "https://your-cancel-url.com"]
];

$fields_string = http_build_query($fields);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer SECRET_KEY",
  "Cache-Control: no-cache",
));

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$result = curl_exec($ch);
echo $result;
?>

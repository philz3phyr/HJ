<?php

include "config.php";

    // Check if the post ID is provided in the URL
    if(isset($_GET['id'])) {
        $post_id = $_GET['id'];
        
        // Define query to fetch the post content from the database based on post ID
        $sql = "SELECT title, content, created_at, updated_at,image_url FROM blog_posts WHERE id = $post_id";
        $sql2 = "SELECT users.firstname, users.lastname
        FROM users
        INNER JOIN blog_posts ON users.author_id = blog_posts.author_id
        WHERE blog_posts.id = $post_id";
        

        // Execute the query
        $result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, $sql2);

        // Check if the post exists
        if (mysqli_num_rows($result) > 0) {
            // Fetch the post data
            $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result2) > 0) {
            // Fetch the post data
            $row2 = mysqli_fetch_assoc($result2);
        }


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>HOJ | Read Articles</title>
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
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Blog</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Blog</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


    

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0"></h4>
            </div>
            <h1 class="display-3 mb-4"><?php echo htmlspecialchars($row['title']); ?></h1>
            <h6 class="mb-0">Author: <span><?php echo htmlspecialchars($row2['firstname']); ?> <?php echo htmlspecialchars($row2['lastname']); ?></span></h6>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-2 col-lg-2 col-xl-2 wow fadeInUp"></div>
            <div class="col-md-8 col-lg-8 col-xl-8 wow fadeInUp">
              <img src="<?php echo $row['image_url']; ?>" style="height: 400px;" class="img-fluid rounded w-100" alt="" class="img-fluid">
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 wow fadeInUp"></div>
    </div>
        <div id="post-content-container" class="col-lg-12 ftco-animate">
          
            
            <h2 class="mb-3"></h2>
            <p class="mb-4"><?php
                $content = $row['content']; // Assuming $row['content'] contains the text to be displayed

                // Split the content into paragraphs based on newlines
                $paragraphs = explode("\n", $content);

                // Output each paragraph wrapped in <p> tags
                foreach ($paragraphs as $paragraph) {
                    echo "<p class='mb-4'>" . htmlspecialchars($paragraph) . "</p>";
                }
                ?>
                </p>
            <!-- <p>Molestiae cupiditate inventore animi,</p> -->
            <!-- <p>
              <img src="images/image_2.jpg" alt="" class="img-fluid">
            </p> -->
            <!-- article author -->
            <div class="about-author d-flex p-4 bg-light">
              <!-- <div class="bio mr-5">
                <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div> -->
              <div class="desc">
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p> -->
              </div>
            </div>
            <div class="d-flex justify-content-between mb-4">
            <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> <?php echo "Created: "; echo date("d M Y", strtotime($row['created_at'])); ?></p>
            <!-- You can display additional information such as the number of comments here -->
            <!-- <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a> -->
            <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> <?php echo "Updated: "; echo date("d M Y", strtotime($row['updated_at'])); ?></p>
        </div>

<!-- comments -->
<?php
        } else {
            echo "Post not found.";
        }

        // Close database connection
        mysqli_close($conn);
    } else {
        echo "Post ID not provided.";
    }
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
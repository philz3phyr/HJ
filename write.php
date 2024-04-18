<?php
session_start();
// session_destroy();

// Include database connection
require_once "config.php";

// Check if user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: user.php");
    exit;
}

// Define variables and initialize with empty values
$title = $content = $news_url = "";
$title_err = $content_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate title
    if (empty(trim($_POST["title"]))) {
        $title_err = "Please enter a title.";
    } else {
        $title = trim($_POST["title"]);
    }

    // Validate content
    if (empty(trim($_POST["content"]))) {
        $content_err = "Please enter content.";
    } else {
        $content = trim($_POST["content"]);
    }

    // Validate news URL
    // $news_url = trim($_POST["news_url"]); // Assuming the input name is "news_url"

    // Check if file was uploaded without errors
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $image_url = $target_file; // Set the image URL to the path where the image will be stored
        
        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Image uploaded successfully
        } else {
            // Failed to move uploaded file
        }
    }

    // Check input errors before inserting into database
    if (empty($title_err) && empty($content_err)) {
        // Insert the publication into the database
        $author_id = $_SESSION["id"]; // Get the author's ID from the session
        $sql = "INSERT INTO blog_posts (title, content, author_id, image_url) VALUES (?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssis", $param_title, $param_content, $param_author_id, $param_image_url);

            // Set parameters
            $param_title = $title;
            $param_content = $content;
            $param_author_id = $author_id;
            $param_image_url = $image_url; // assuming you have $image_url variable set with the image URL
            // $param_news_url = $news_url;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to publications page
                header("location: blog.php");
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>House of Justice | Write</title>
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
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Write an Article</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Write</li>
                </ol>    
            </div>
        </div>
         <div class="container-fluid py-5">
        <div class="container-fluid appointment py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.2">
                        <div class="section-title text-start">
                            <h4 class="sub-title pe-3 mb-0"></h4>
                            <h1 class="display-4 mb-4">Write an article</h1>
                            <p class="mb-4"></p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="appointment-form rounded p-5">
                            <p class="fs-4 text-uppercase text-primary"></p>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                            <div class="row gy-3 gx-4">
                                <div class="col-12">
                                    <input type="text" class="form-control border-primary bg-transparent text-dark" name="title" placeholder="Article Title <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>">
                                    <span class="invalid-feedback"><?php echo $title_err; ?></span>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-primary bg-transparent text-dark <?php echo (!empty($content_err)) ? 'is-invalid' : ''; ?>" name="content" cols="30" rows="7" placeholder=" Message"><?php echo $content; ?></textarea>
                                    <span class="invalid-feedback"><?php echo $content_err; ?></span>
                                </div>
                                <div class="col-12">
                                    <input type="file" class="form-control border-primary bg-transparent text-dark" name="image" placeholder=" Upload Image" accept="image/*">
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary text-white w-100 py-3 px-5">POST ARTICLE</button>
                                    <a href="blog.php" class="btn btn-primary text-white w-100 py-3 px-5">CANCEL</a>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php
// Close database connection
mysqli_close($conn);
?>



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
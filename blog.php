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

// Define number of posts per page
$postsPerPage = 4;

// Get current page from URL parameter, default to page 1
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Calculate the offset for the query
$offset = ($page - 1) * $postsPerPage;

// Include database connection
require_once "config.php";

// Define query to fetch articles from the database
$sql = "SELECT SQL_CALC_FOUND_ROWS id, title, content, created_at, image_url FROM blog_posts ORDER BY id DESC LIMIT ?, ?";

// Prepare and execute the query with placeholders for pagination
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ii", $offset, $postsPerPage);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Fetch total number of articles (ignoring LIMIT) for pagination
$totalCountResult = mysqli_query($conn, "SELECT FOUND_ROWS()");
$totalCount = mysqli_fetch_row($totalCountResult)[0];

// Calculate total number of pages
$totalPages = ceil($totalCount / $postsPerPage);

// Close statement
mysqli_stmt_close($stmt);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HOJ | Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
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
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Blog</h3>
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
                <h1 class="display-3 mb-4">Our News Articles</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet </p>
            </div>
            <div style="margin-bottom:20px" class="row g-4">
                <?php
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
                mysqli_close($conn);
                ?>
            </div>

            <!-- Pagination links -->
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                                <li class="page-item <?php echo ($i === $page) ? 'active' : ''; ?>"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php endfor; ?>
                        </ul>
                    </nav>
                </div>
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

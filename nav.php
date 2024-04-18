<!-- nav.html -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <div class="d-flex align-items-center">
                <img style="margin-left: -20px;" src="img/hoj_back.png" width="70" height="50" class="d-inline-block align-top" alt="Your Logo" />
                <h4 class="text-primary m-0 ml-2">HOUSE OF JUSTICE</h4>
            </div>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php' || basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>" data-bs-toggle="dropdown">About</a>
                    <div class="dropdown-menu m-0">
                        <a href="about.php" class="dropdown-item">About Us</a>
                        <a href="contact.php" class="dropdown-item">Contact Us</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?php echo (basename($_SERVER['PHP_SELF']) == 'books.php' || basename($_SERVER['PHP_SELF']) == 'tickets.php') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Store</a>
                    <div class="dropdown-menu m-0">
                        <a href="books.php" class="dropdown-item">Books</a>
                        <a href="tickets.php" class="dropdown-item">Tickets</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?php echo (basename($_SERVER['PHP_SELF']) == 'mive_legals.php' || basename($_SERVER['PHP_SELF']) == 'molluma.php' || basename($_SERVER['PHP_SELF']) == 'crime.php' || basename($_SERVER['PHP_SELF']) == 'advocacy.php' || basename($_SERVER['PHP_SELF']) == 'dispute.php' || basename($_SERVER['PHP_SELF']) == 'regalia.php' || basename($_SERVER['PHP_SELF']) == 'fashion.php' || basename($_SERVER['PHP_SELF']) == 'entertainment.php') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Departments</a>
                    <div class="dropdown-menu m-0">
                        <a href="mive_legals.php" class="dropdown-item">MIVE Legals</a>
                        <a href="molluma.php" class="dropdown-item">Molluma Medico Legal Centre</a>
                        <a href="crime.php" class="dropdown-item">Crime Prevention & Counselling Centre</a>
                        <a href="advocacy.php" class="dropdown-item">House of Justice Advocacy</a>
                        <a href="dispute.php" class="dropdown-item">Alternative Dispute Resolution</a>
                        <a href="regalia.php" class="dropdown-item">Regalia &amp Paraphernalia</a>
                        <a href="fashion.php" class="dropdown-item">Fashion Law</a>
                        <a href="entertainment.php" class="dropdown-item">Entertainment Law</a>
                    </div>
                </div>
                <div class="nav-item dropdown ">
                    <a href="#" class="nav-link dropdown-toggle <?php echo (basename($_SERVER['PHP_SELF']) == 'radio.php' || basename($_SERVER['PHP_SELF']) == 'tvsocials.php' || basename($_SERVER['PHP_SELF']) == 'publications.php') ? 'active' : ''; ?>" data-bs-toggle="dropdown">HOJ Media</a>
                    <div class="dropdown-menu m-0">
                        <a href="radio.php" class="dropdown-item">HOJ Radio</a>
                        <a href="tvsocials.php" class="dropdown-item">HOJ TV & Socials</a>
                        <a href="publications.php" class="dropdown-item">HOJ publications</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?php echo (basename($_SERVER['PHP_SELF']) == 'summit.php' || basename($_SERVER['PHP_SELF']) == 'gallery2018.php' || basename($_SERVER['PHP_SELF']) == 'skaarf.php' || basename($_SERVER['PHP_SELF']) == 'internship.php' || basename($_SERVER['PHP_SELF']) == 'volunteer.php' || basename($_SERVER['PHP_SELF']) == 'events.php') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Programs & Projects</a>
                    <div class="dropdown-menu m-0">
                        <a href="summit.php" class="dropdown-item">HOJ Annual Summit</a>
                        <a href="gallery2018.php" class="dropdown-item">Gallery</a>
                        <a href="skaarf.php" class="dropdown-item">Skarf</a>
                        <a href="internship.php" class="dropdown-item">Internship</a>
                        <a href="volunteer.php" class="dropdown-item">Volunteer</a>
                        <a href="events.php" class="dropdown-item">Events</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?php echo (basename($_SERVER['PHP_SELF']) == 'blog.php' || basename($_SERVER['PHP_SELF']) == 'write.php' || basename($_SERVER['PHP_SELF']) == 'publicize.php' || basename($_SERVER['PHP_SELF']) == 'read.php') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Blog &amp News</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.php" class="dropdown-item">Blog</a>
                        <a href="write.php" class="dropdown-item">Write an article</a>
                        <a href="publicize.php" class="dropdown-item">Publicize News</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

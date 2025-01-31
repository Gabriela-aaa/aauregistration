<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAU Computer Science Department</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.jpg" width="400px" height="100px" alt="AAU Logo">
        </div>
        <nav class="navbar">
            <ul class="nav-links">
                <li class="dropdown">
                    <a href="#" class="nav-item" data-tooltip="Home">
                        <img src="h2.png" alt="Home">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#Academic Programs">Academic Programs</a></li>
                        <li><a href="#Faculty and Research">Faculty and Research</a></li>
                        <li><a href="#Facilities and Resources">Facilities and Resources</a></li>
                        <li><a href="#Student Life">Student Life</a></li>
                    </ul>
                </li>
                <!-- Authentication Links -->
                <?php if(!isset($_SESSION['user_id'])): ?>
                    <li><a href="login.php" class="nav-item" data-tooltip="Login">Login</a></li>
                    <li><a href="register.php" class="nav-item" data-tooltip="Register">Register</a></li>
                <?php else: ?>
                    <li><a href="profile.php" class="nav-item" data-tooltip="Profile">Profile</a></li>
                    <li><a href="logout.php" class="nav-item" data-tooltip="Logout">Logout</a></li>
                <?php endif; ?>
                <!-- Original Navigation Items -->
                <li class="dropdown">
                    <a href="obj.html" class="nav-item" data-tooltip="About" id="objective">
                        <img src="a2.png" alt="About">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Objectives</a></li>
                        <li><a href="#">Requirements</a></li>
                    </ul>
                </li>
                <!-- Add other navigation items -->
            </ul>
        </nav>
        <div class="search">
            <input type="text" placeholder="Search">
            <button>Submit</button>
        </div>
    </header>

    <main>
        <aside class="secondary-nav">
            <a href="research.html">Research</a> 
            <a href="gallery.html">Gallery</a>
            <a href="support.html">Support</a>
            <a href="aboutus.html">About Us</a>
            <a href="contact.html">Contact Us</a>
        </aside>

        <section class="content">
            <?php if(isset($_SESSION['user_id'])): ?>
                <div class="welcome-message">
                    <h2>Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
                </div>
            <?php endif; ?>

            <article>
                <h1>Addis Ababa University, Department of Computer Science</h1>
                <!-- Your existing content -->
                <p>Computer Science Department has been 30 years since the Department of Computer Science...</p>
                
                <!-- Academic Programs Section -->
                <div id="Academic Programs">
                    <h2>▎Academic Programs</h2>
                    <!-- Your existing content -->
                </div>

                <!-- Other sections -->
                <!-- ... -->
            </article>
        </section>

        <aside class="sidebar">
            <div class="share">
                <h3>Share</h3>
                <div class="social-icons">
                    <a href="#" class="icon facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="recommended">
                <h3>Recommended</h3>
                <a href="#">Related article</a>
                <p>Article description</p>
            </div>
        </aside>
    </main>

    <footer>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Contact Us</a>
        <a href="#">About Us</a>
        <a href="#">© <?php echo date('Y'); ?> AAU Computer Science</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
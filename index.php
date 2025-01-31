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
    <header class="modern-header">
        <div class="header-container">
            <div class="logo-container">
                <img src="assets/images/logo.png" alt="AAU Logo" class="logo">
            </div>
            
            <nav class="modern-nav">
                <div class="nav-group">
                    <a href="#" class="nav-link active">
                        <img src="assets/images/icons/home.svg" alt="Home" class="nav-icon">
                        <span>Home</span>
                    </a>
                    <a href="#academic" class="nav-link">
                        <img src="assets/images/icons/academic.svg" alt="Academic" class="nav-icon">
                        <span>Academic</span>
                    </a>
                    <a href="#research" class="nav-link">
                        <img src="assets/images/icons/research.svg" alt="Research" class="nav-icon">
                        <span>Research</span>
                    </a>
                </div>

                <div class="nav-group auth-group">
                    <?php if(!isset($_SESSION['user_id'])): ?>
                        <a href="login.php" class="nav-link">
                            <img src="assets/images/icons/login.svg" alt="Login" class="nav-icon">
                            <span>Login</span>
                        </a>
                        <a href="register.php" class="btn-register">Register</a>
                    <?php else: ?>
                        <div class="profile-dropdown">
                            <img src="assets/images/icons/profile.svg" alt="Profile" class="nav-icon">
                            <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                            <div class="dropdown-content">
                                <a href="profile.php">View Profile</a>
                                <a href="settings.php">Settings</a>
                                <a href="logout.php">Logout</a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </nav>

            <button class="mobile-menu-btn">
                <img src="assets/images/icons/menu.svg" alt="Menu">
            </button>
        </div>
    </header>

    <main class="modern-layout">
        <aside class="side-nav">
            <div class="side-nav-content">
                <a href="#" class="side-link active">Overview</a>
                <a href="#" class="side-link">Programs</a>
                <a href="#" class="side-link">Faculty</a>
                <a href="#" class="side-link">Research</a>
                <a href="#" class="side-link">Resources</a>
            </div>
        </aside>

        <section class="main-content">
            <div class="hero-section">
                <h1>Welcome to Computer Science at AAU</h1>
                <p class="lead">Shaping the future through technology and innovation</p>
                <?php if(!isset($_SESSION['user_id'])): ?>
                    <div class="cta-buttons">
                        <a href="register.php" class="btn-primary">Get Started</a>
                        <a href="#learn-more" class="btn-secondary">Learn More</a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Academic Excellence</h3>
                    <p>Comprehensive programs from undergraduate to doctoral studies</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>Research Innovation</h3>
                    <p>Cutting-edge research in AI, cybersecurity, and more</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Community</h3>
                    <p>Vibrant community of learners and innovators</p>
                </div>
            </div>

            <div class="content-sections">
                <section id="academic" class="content-section">
                    <h2>Academic Programs</h2>
                    <p>Our department offers cutting-edge programs in computer science...</p>
                </section>

                <section id="research" class="content-section">
                    <h2>Research Areas</h2>
                    <p>Explore our diverse research initiatives and opportunities...</p>
                </section>
            </div>
        </section>

        <aside class="quick-links">
            <div class="quick-links-card">
                <h3>Quick Access</h3>
                <ul>
                    <li><a href="#">Course Schedule</a></li>
                    <li><a href="#">Student Resources</a></li>
                    <li><a href="#">Faculty Directory</a></li>
                    <li><a href="#">News & Events</a></li>
                </ul>
            </div>

            <div class="social-card">
                <h3>Connect With Us</h3>
                <div class="social-links">
                    <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </aside>
    </main>

    <footer class="modern-footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Contact Us</h4>
                <p>Addis Ababa University<br>Computer Science Department<br>Email: cs@aau.edu.et</p>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> AAU Computer Science Department. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
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
    <?php include 'includes/header.php'; ?>

    <main class="modern-layout">
        <!-- Hero Section -->
        <section class="hero-banner">
            <div class="hero-content">
                <h1 class="hero-title">Welcome to Computer Science at AAU</h1>
                <p class="hero-subtitle">Shaping Tomorrow's Technology Leaders</p>
                <?php if(!isset($_SESSION['user_id'])): ?>
                    <div class="hero-buttons">
                        <a href="register.php" class="btn-primary">Join Our Community</a>
                        <a href="#explore" class="btn-secondary">Explore Programs</a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">30+</span>
                    <span class="stat-label">Years of Excellence</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Graduates</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Research Projects</span>
                </div>
            </div>
        </section>

        <!-- Featured Programs -->
        <section class="featured-programs" id="explore">
            <h2 class="section-title">Our Programs</h2>
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>BSc in Computer Science</h3>
                    <p>Foundation in programming, algorithms, and software development</p>
                    <a href="academic.php#undergraduate" class="card-link">Learn More →</a>
                </div>
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>MSc Program</h3>
                    <p>Advanced studies in AI, cybersecurity, and software engineering</p>
                    <a href="academic.php#graduate" class="card-link">Learn More →</a>
                </div>
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>PhD Research</h3>
                    <p>Cutting-edge research opportunities in computer science</p>
                    <a href="academic.php#doctoral" class="card-link">Learn More →</a>
                </div>
            </div>
        </section>

        <!-- Latest News -->
        <section class="latest-news">
            <h2 class="section-title">Latest Updates</h2>
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-image">
                        <img src="assets/images/news1.jpg" alt="Research News">
                    </div>
                    <div class="news-content">
                        <span class="news-date">October 15, 2023</span>
                        <h3>New AI Research Lab Opening</h3>
                        <p>Expanding our research capabilities in artificial intelligence...</p>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-image">
                        <img src="assets/images/news2.jpg" alt="Student Achievement">
                    </div>
                    <div class="news-content">
                        <span class="news-date">October 10, 2023</span>
                        <h3>Students Win National Competition</h3>
                        <p>Our students excel in national programming contest...</p>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Research Highlights -->
        <section class="research-highlights">
            <h2 class="section-title">Research Highlights</h2>
            <div class="research-showcase">
                <div class="research-area">
                    <div class="research-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Artificial Intelligence</h3>
                    <p>Leading research in machine learning and neural networks</p>
                </div>
                <div class="research-area">
                    <div class="research-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Cybersecurity</h3>
                    <p>Advanced research in network security and cryptography</p>
                </div>
                <div class="research-area">
                    <div class="research-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Big Data Analytics</h3>
                    <p>Innovation in data processing and analytics</p>
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
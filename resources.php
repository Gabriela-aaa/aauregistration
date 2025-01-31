<?php
session_start();
include 'includes/header.php';
?>

<main class="modern-layout">
    <aside class="side-nav">
        <div class="side-nav-content">
            <a href="#student" class="side-link active">Student Resources</a>
            <a href="#academic" class="side-link">Academic Resources</a>
            <a href="#technology" class="side-link">Technology</a>
            <a href="#support" class="side-link">Support Services</a>
        </div>
    </aside>

    <section class="main-content">
        <div class="page-header">
            <h1>Resources</h1>
            <p class="lead">Access tools and resources for your academic success</p>
        </div>

        <div id="student" class="content-section">
            <h2>Student Resources</h2>
            <div class="resources-grid">
                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Library Access</h3>
                    <p>Access digital libraries and research materials.</p>
                    <a href="#" class="btn-secondary">Access Library</a>
                </div>
                <!-- Add more resource cards -->
            </div>
        </div>
    </section>

    <aside class="quick-links">
        <div class="quick-links-card">
            <h3>Quick Access</h3>
            <ul>
                <li><a href="#">Student Portal</a></li>
                <li><a href="#">Course Materials</a></li>
                <li><a href="#">Technical Support</a></li>
            </ul>
        </div>
    </aside>
</main>

<?php include 'includes/footer.php'; ?> 
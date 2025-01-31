<?php
session_start();
include 'includes/header.php';
?>

<main class="modern-layout">
    <aside class="side-nav">
        <div class="side-nav-content">
            <a href="#undergraduate" class="side-link active">Undergraduate Programs</a>
            <a href="#graduate" class="side-link">Graduate Programs</a>
            <a href="#doctoral" class="side-link">Doctoral Studies</a>
            <a href="#courses" class="side-link">Course Catalog</a>
            <a href="#calendar" class="side-link">Academic Calendar</a>
        </div>
    </aside>

    <section class="main-content">
        <div class="page-header">
            <h1>Academic Programs</h1>
            <p class="lead">Discover our comprehensive computer science education programs</p>
        </div>

        <div id="undergraduate" class="content-section">
            <h2>Undergraduate Programs</h2>
            <div class="program-card">
                <h3>BSc in Computer Science</h3>
                <p>A four-year program covering fundamental concepts and practical applications in computer science.</p>
                <ul>
                    <li>Programming and Software Development</li>
                    <li>Data Structures and Algorithms</li>
                    <li>Database Systems</li>
                    <li>Artificial Intelligence Basics</li>
                </ul>
                <a href="#" class="btn-primary">Learn More</a>
            </div>
        </div>

        <div id="graduate" class="content-section">
            <h2>Graduate Programs</h2>
            <div class="program-card">
                <h3>MSc in Computer Science</h3>
                <p>Advanced studies in specialized areas of computer science.</p>
                <ul>
                    <li>Advanced Algorithms</li>
                    <li>Machine Learning</li>
                    <li>Network Security</li>
                    <li>Software Engineering</li>
                </ul>
                <a href="#" class="btn-primary">Learn More</a>
            </div>
        </div>

        <div id="doctoral" class="content-section">
            <h2>Doctoral Studies</h2>
            <div class="program-card">
                <h3>PhD in Computer Science</h3>
                <p>Research-oriented program for advancing computer science knowledge.</p>
                <a href="#" class="btn-primary">Learn More</a>
            </div>
        </div>
    </section>

    <aside class="quick-links">
        <div class="quick-links-card">
            <h3>Resources</h3>
            <ul>
                <li><a href="#">Admission Requirements</a></li>
                <li><a href="#">Tuition & Fees</a></li>
                <li><a href="#">Scholarships</a></li>
                <li><a href="#">Academic Calendar</a></li>
            </ul>
        </div>
    </aside>
</main>

<?php include 'includes/footer.php'; ?> 
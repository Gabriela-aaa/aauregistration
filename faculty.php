<?php
session_start();
include 'includes/header.php';
?>

<main class="modern-layout">
    <aside class="side-nav">
        <div class="side-nav-content">
            <a href="#professors" class="side-link active">Professors</a>
            <a href="#researchers" class="side-link">Researchers</a>
            <a href="#staff" class="side-link">Staff</a>
            <a href="#contact" class="side-link">Contact</a>
        </div>
    </aside>

    <section class="main-content">
        <div class="page-header">
            <h1>Faculty & Staff</h1>
            <p class="lead">Meet our distinguished faculty members and staff</p>
        </div>

        <div id="professors" class="content-section">
            <h2>Professors</h2>
            <div class="faculty-grid">
                <div class="faculty-card">
                    <img src="assets/images/faculty/placeholder.jpg" alt="Professor Name">
                    <h3>Dr. John Doe</h3>
                    <p>Professor of Computer Science</p>
                    <p>Specialization: Artificial Intelligence</p>
                    <a href="#" class="btn-secondary">View Profile</a>
                </div>
                <!-- Add more faculty cards -->
            </div>
        </div>
    </section>

    <aside class="quick-links">
        <div class="quick-links-card">
            <h3>Department Contact</h3>
            <ul>
                <li>Email: cs@aau.edu.et</li>
                <li>Phone: +251-XXX-XXXX</li>
                <li>Office: Room XXX</li>
            </ul>
        </div>
    </aside>
</main>

<?php include 'includes/footer.php'; ?> 
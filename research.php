<?php
session_start();
include 'includes/header.php';
?>

<main class="modern-layout">
    <aside class="side-nav">
        <div class="side-nav-content">
            <a href="#areas" class="side-link active">Research Areas</a>
            <a href="#publications" class="side-link">Publications</a>
            <a href="#labs" class="side-link">Research Labs</a>
            <a href="#opportunities" class="side-link">Opportunities</a>
        </div>
    </aside>

    <section class="main-content">
        <div class="page-header">
            <h1>Research</h1>
            <p class="lead">Exploring the frontiers of computer science</p>
        </div>

        <div id="areas" class="content-section">
            <h2>Research Areas</h2>
            <div class="research-grid">
                <div class="research-card">
                    <div class="research-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Artificial Intelligence</h3>
                    <p>Machine learning, natural language processing, and computer vision.</p>
                </div>
                <div class="research-card">
                    <div class="research-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Cybersecurity</h3>
                    <p>Network security, cryptography, and secure systems.</p>
                </div>
                <!-- Add more research areas -->
            </div>
        </div>

        <div id="publications" class="content-section">
            <h2>Recent Publications</h2>
            <div class="publications-list">
                <!-- Add publication entries -->
            </div>
        </div>
    </section>

    <aside class="quick-links">
        <div class="quick-links-card">
            <h3>Research Resources</h3>
            <ul>
                <li><a href="#">Research Funding</a></li>
                <li><a href="#">Lab Facilities</a></li>
                <li><a href="#">Collaboration</a></li>
            </ul>
        </div>
    </aside>
</main>

<?php include 'includes/footer.php'; ?> 
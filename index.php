<?php
session_start();
?>

<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <?php include 'includes/sidebar.php'; ?>
        </div>
        <div class="col-md-9">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to Our Platform</h1>
                <p class="lead">Your one-stop solution for secure user management and authentication.</p>
                <hr class="my-4">
                <?php if(!isset($_SESSION['user_id'])): ?>
                    <p>Get started by creating an account or logging in.</p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-primary btn-lg" href="register.php" role="button">Register</a>
                        <a class="btn btn-outline-primary btn-lg" href="login.php" role="button">Login</a>
                    </div>
                <?php else: ?>
                    <p>Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
                    <a class="btn btn-primary btn-lg" href="profile.php" role="button">View Profile</a>
                <?php endif; ?>
            </div>

            <!-- Features Section -->
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Secure Authentication</h5>
                            <p class="card-text">State-of-the-art security measures to protect your account.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Profiles</h5>
                            <p class="card-text">Manage your personal information with ease.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Easy Navigation</h5>
                            <p class="card-text">User-friendly interface with intuitive navigation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?> 
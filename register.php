<?php
session_start();
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $full_name = $_POST['full_name'];

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password, full_name) VALUES (?, ?, ?, ?)");
    try {
        $stmt->execute([$username, $email, $password, $full_name]);
        $_SESSION['message'] = "Registration successful! Please login.";
        header("Location: login.php");
        exit();
    } catch(PDOException $e) {
        $error = "Registration failed. Please try again.";
    }
}
?>

<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <?php include 'includes/sidebar.php'; ?>
        </div>
        <div class="col-md-9">
            <h2>Register</h2>
            <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
            <form method="POST" action="">
                <div class="mb-3">
                    <label>Full Name</label>
                    <input type="text" name="full_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?> 
<?php
session_start();
require_once 'config/database.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
?>

<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <?php include 'includes/sidebar.php'; ?>
        </div>
        <div class="col-md-9">
            <h2>My Profile</h2>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($user['full_name']); ?></h5>
                    <p class="card-text">
                        <strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?><br>
                        <strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?><br>
                        <strong>Member since:</strong> <?php echo date('F j, Y', strtotime($user['created_at'])); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?> 
<div class="sidebar bg-light">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <?php if(isset($_SESSION['user_id'])): ?>
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">My Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="settings.php">Settings</a>
            </li>
        <?php endif; ?>
    </ul>
</div> 
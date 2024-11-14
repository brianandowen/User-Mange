<!-- navbar.php -->
<?php
require_once 'session.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- 根據頁面動態顯示不同的首頁連結 -->
        <?php if (basename($_SERVER['PHP_SELF']) === 'status.php'): ?>
            <a class="navbar-brand" href="edit_profile.php">我的首頁</a>
        <?php else: ?>
            <a class="navbar-brand" href="status.php">回到首頁</a>
        <?php endif; ?>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php if ($isAdmin): ?>
                    <!-- 管理者的專屬選單 -->
                    <li class="nav-item">
                        <a class="nav-link" href="query.php">管理查詢</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">管理員頁面</a>
                    </li>
                <?php elseif ($isUser): ?>
                    <!-- 使用者的專屬選單 -->
                    <li class="nav-item">
                        <a class="nav-link" href="conference.php">會議頁面</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fee.php">費用頁面</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="query.php">查詢頁面</a>
                    </li>
                <?php endif; ?>
                
                <?php if ($isLoggedIn): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="query.php">查詢頁面</a>
                    </li>

                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">登出</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

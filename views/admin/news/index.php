<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }
        /* Sidebar Styling */
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: #fff;
            transition: all 0.3s ease;
            overflow: hidden;
        }
        #sidebar.active {
            min-width: 60px;
            max-width: 80px;
        }
        #sidebar.active .nav-link span {
            display: none;
        }
        #sidebar.active .nav-link i {
            margin-right: 0;
            font-size: 1.2rem;
        }
        #sidebar .nav-link {
            color: #fff;
            padding: 10px 20px;
            white-space: nowrap; /* Ngăn text bị xuống dòng */
        }
        #sidebar .nav-link i {
            margin-right: 10px;
            font-size: 1.2rem;
        }
        #sidebar h5 {
            font-size: 1.2rem;
            margin-left: 15px;
        }
        #sidebar.active h5 {
            display: none;
        }
        #content {
            transition: margin-left 0.3s ease;
            width: 100%;
        }
        #toggle-btn {
            cursor: pointer;
            color: #fff;
            font-size: 1.5rem;
        }
        .card {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <nav id="sidebar" class="bg-dark">
        <div class="p-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Bảng điều khiển Quản trị viên</h5>
            <span id="toggle-btn">
                    <i class="bi bi-list"></i>
                </span>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="add.php" class="nav-link" data-bs-toggle="tab"><i class="bi bi-newspaper"></i> <span>Thêm bài viết</span></a>
            </li>
            <li class="nav-item">
                <a href="edit.php" class="nav-link" data-bs-toggle="tab"><i class="bi bi-pencil"></i> <span>Sửa bài viết</span></a>
            </li>
            <li class="nav-item">
                <a href="delete.php" class="nav-link" data-bs-toggle="tab"><i class="bi bi-trash"></i> <span>Xóa bài viết</span></a>
            </li>
            <li class="nav-item">
                <a href="/views/home/index.php" class="nav-link"><i class="bi bi-box-arrow-right"></i> <span>Đăng xuất</span></a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div id="content" class="p-4">
        <h2 class="mb-4">Latest News</h2>
        <div class="row">
            <!-- News Item 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="News">
                    <div class="card-body">
                        <h5 class="card-title">News Title 1</h5>
                        <p class="card-text">Short description for news 1...</p>
                    </div>
                </div>
            </div>
            <!-- News Item 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="News">
                    <div class="card-body">
                        <h5 class="card-title">News Title 2</h5>
                        <p class="card-text">Short description for news 2...</p>
                    </div>
                </div>
            </div>
            <!-- News Item 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="News">
                    <div class="card-body">
                        <h5 class="card-title">News Title 3</h5>
                        <p class="card-text">Short description for news 3...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<script>
    // Toggle sidebar
    document.getElementById("toggle-btn").addEventListener("click", function() {
        document.getElementById("sidebar").classList.toggle("active");
        document.getElementById("content").classList.toggle("active");
    });
</script>
</body>
</html>

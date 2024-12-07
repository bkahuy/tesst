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
            min-width: 80px;
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
            padding: 10px 15px;
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
        #sidebar.active + #content {
            margin-left: 80px;
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
            <h5 class="mb-0">Admin Dashboard</h5>
            <span id="toggle-btn">
                    <i class="bi bi-list"></i>
                </span>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-people"></i> <span>Manage Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-newspaper"></i> <span>News Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-gear"></i> <span>Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-box-arrow-right"></i> <span>Logout</span>
                </a>
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
    });
</script>
</body>
</html>

<div class="d-flex">
    <!-- Sidebar -->
    <nav id="sidebar" class="bg-dark">
        <div class="p-3 d-flex justify-content-between">
            <h5 class="mb-0">Admin Dashboard</h5>
            <span id="toggle-btn">
                    <i class="bi bi-list fs-4"></i>
                </span>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-speedometer2 me-2"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-people me-2"></i><span>Manage Users</span></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-newspaper me-2"></i><span>Add News</span></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-gear me-2"></i><span>Settings</span></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-box-arrow-right me-2"></i><span>Logout</span></a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div id="content" class="p-4">
        <h2>Latest News</h2>
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
<!-- Custom Script -->
<script>
    document.getElementById("toggle-btn").addEventListener("click", function() {
        document.getElementById("sidebar").classList.toggle("active");
    });
</script>
</body>
</html>

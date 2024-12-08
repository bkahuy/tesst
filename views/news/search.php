<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header {
            z-index: 100;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        footer {
            margin-top: auto;
            padding: 10px 0;
        }
        .card {
            margin-bottom: 20px;
        }
        .search-keyword {
            font-size: 1.2rem;
            font-weight: bold;
            color: #007bff;
        }
        .image-wrapper {
            height: 200px;
            overflow: hidden;
        }
        .img-cropped {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .div-nav {
            width: 100%;
            margin: 1rem 18.25rem 0;
        }
        .card-text {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .image-wrapper {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .img-cropped {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .search-input {
            width: 250px;
        }
        .search-btn-1 {
            width: 100px;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
<!-- Header -->
<header class="bg-primary text-white py-3">
    <div class="container text-center">
        <h1><a href="<?= DOMAIN; ?>" class="text-white text-decoration-none">Lều Báo</a></h1>
        <p>Những tin tức mới giật gân</p>
    </div>
</header>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-around">
    <div class="d-flex justify-content-around div-nav">
        <form class="d-flex mx-2" role="search" method="GET" action="">
            <label for="keyword" class="visually-hidden text-danger">Tìm kiếm:</label>
            <input class="form-control me-2 search-input" type="text" placeholder="Ấn nút để về trang chủ" id="keyword" name="keyword">
            <button type="submit" class="btn btn-primary search-btn-1">Trang Chủ</button>
        </form>
        <div class="container d-flex justify-content-end">
            <div>
                <a href="<?= DOMAIN.'views/admin/login.php' ?>" class="btn btn-primary d-flex mx-2 rounded-1">Đăng nhập</a>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1>Search Results</h1>
    <!-- Hiển thị từ khóa tìm kiếm -->
    <div id="searchKeyword" class="search-keyword" style="display: none;">
        Tìm kiếm: <span id="keywordText"></span>
    </div>

    <div class="row mt-4" id="searchResults">
        <?php
        foreach ($newsResults as $newResults) {
            ?>
            <div class="col-md-6 col-lg-4 news-card">
                <div class="news-card card shadow-sm">
                    <div class="image-wrapper">
                        <img src="<?= $newResults->getImage(); ?>" class="card-img-top img-cropped img-fluid" alt="Hình ảnh bài báo">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $newResults->getTitle(); ?></h5>
                        <p class="text-muted">
                            <span>Danh mục: <?= $newResults->getCategoryName(); ?></span><br>
                            <span>Ngày tạo: <?= $newResults->getCreatedAt(); ?></span>
                        </p>
                        <p class="card-text"><?= $newResults->getContent(); ?></p>
                        <a href="<?= DOMAIN . '?controller=new&id=' . $newResults->getId(); ?>" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center pt-3 mt-auto">
    <div class="container">
        <p>BTTH2 - Bùi Khắc Huy, Nguyễn Thành Đồng, Trần Tiến Đạt.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Hiển thị từ khóa tìm kiếm nếu có
    const urlParams = new URLSearchParams(window.location.search);
    const keyword = urlParams.get('keyword'); // Lấy giá trị từ khóa từ URL

    if (keyword) {
        const keywordElement = document.getElementById('keywordText');
        keywordElement.textContent = keyword;  // Cập nhật phần tử #keyword với từ khóa
        document.getElementById('searchKeyword').style.display = 'block'; // Hiển thị phần tử chứa từ khóa
    } else {
        document.getElementById('searchKeyword').style.display = 'none'; // Ẩn phần tử nếu không có từ khóa
    }
</script>

</body>
</html>

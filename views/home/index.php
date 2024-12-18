<?php
session_start();

$isLoggedIn = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_unset();
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báo đơn giản</title>
    <!-- Bootstrap 5 CSS -->
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

        .div-nav {
            width: 100%;
            margin: 0px 18.25rem;
        }
        .search-btn {
            width: 60px;
            text-align: center;
        }
        .searchNews {
            margin-bottom: 0;
            align-self: center;
            margin-left: 3px;
        }
        .search-input {
            width: 250px;
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
                <label for="keyword" class="visually-hidden">Tìm kiếm:</label>
                <input class="form-control me-2 search-input" type="text" placeholder="Ấn Tìm trước rồi mới Kiếm..." id="keyword" name="keyword">
                <?php
                $keyword = $_GET['keyword'] ?? '';
                ?>
                <button type="submit" class="btn btn-primary search-btn">Tìm</button>
                <a href="<?= DOMAIN . '?controller=newsearch&keyword=' . $keyword ?>" class="btn btn-primary d-flex search-btn searchNews">Kiếm</a>

            </form>
        <div class="container d-flex justify-content-end"">
            <div>
                <a href="<?= DOMAIN.'views/admin/login.php' ?>" class="btn btn-primary d-flex mx-2 rounded-1">Đăng nhập</a>
            </div>
        </div>
    </div>

</nav>


<div class="container my-4">
    <div class="row">
        <!-- Articles Section -->
        <div class="col-md-12">
            <div class="row g-4">
                <?php
                foreach($news as $new) {
                    ?>
                    <div class="col-md-6 col-lg-4 news-card" data-category="<?= $new->getCategoryId(); ?>">
                        <div class="card news-card shadow-sm">
                            <div class="image-wrapper">
                                <img src="<?= $new->getImage();?>" class="card-img-top img-fluid img-cropped" alt="News Image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"> <?= $new->getTitle(); ?> </h5>
                                <p class="card-text"><?=$new->getContent(); ?></p>
                                <a href="<?= DOMAIN.'?controller=new&id=' . $new->getId() . ';'?>" class="btn btn-primary ">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center pt-3 mt-auto">
    <div class="container">
        <p>BTTH2 - Bùi Khắc Huy, Nguyễn Thành Đồng, Trần Tiến Đạt.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script>


</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple News Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-link.default-active {
            font-size: 1rem;
            font-weight: bold;
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
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<!-- Header -->
<header class="bg-primary text-white py-3">
    <div class="container text-center">
        <h1>Lều Báo</h1>
        <p>Những tin tức mới giật gân</p>
    </div>
</header>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link default-active" href="#" onclick="filterArticles('all')">Tất cả tin mới</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="filterArticles('sports')">Thể thao</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="filterArticles('tech')">Công nghệ</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="filterArticles('entertainment')">Giải trí</a></li>
            </ul>
        </div>
        <div>
            <a href="<?= DOMAIN.'views/admin/login.php' ?>" class="btn btn-primary">Đăng nhập</a>
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
                <div class="col-md-6 col-lg-4">
                    <div class="card news-card shadow-sm">
                        <div class="image-wrapper">
                            <img src="<?= $new->getImage();?>" class="card-img-top img-fluid img-cropped" alt="News Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> <?= $new->getTitle(); ?> </h5>
                            <p class="card-text"><?=$new->getContent(); ?></p>
                            <a href="<?= DOMAIN.'?controller=new&id=' . $new->getId() . ';'?>" class="btn btn-primary btn-sm">Xem chi tiết</a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const filterArticles = (category) => {
        const cards = document.querySelectorAll('.news-card');
        cards.forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    };

    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            navLinks.forEach(nav => {
                nav.style.fontSize = '';
                nav.style.fontWeight = '';
                nav.classList.remove('default-active');
            });

            // Add style to clicked link
            this.style.fontSize = '1rem';
            this.style.fontWeight = 'bold';
        });
    });
</script>
</body>
</html>






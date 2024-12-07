<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple News Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .news-card img {
            height: 200px;
            object-fit: cover;
        }
        .card-text {
            display: -webkit-box;
            -webkit-line-clamp: 1;     /* Hiển thị tối đa 2 dòng */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>
<!-- Header -->
<header class="bg-primary text-white pt-3 pb-2">
    <div class="text-center">
        <h1>Daily News</h1>
        <p>Your daily dose of news</p>
    </div>
</header>

<!-- Main Content -->
<div class="container my-4">
    <div class="row">
        <!-- Articles Section -->
        <div class="col-md-12">
            <div class="row g-4">
                <!-- Article 1 -->
                <?php
                    foreach($news as $new) {
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card news-card shadow-sm">
                        <img src="<?= $new->getImage();?>" class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <h5 class="card-title"> <?= $new->getTitle(); ?> </h5>
                            <p class="card-text"><?=$new->getContent(); ?></p>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
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
<footer class="bg-dark text-white py-3">
    <div class="container text-center">
        <p>&copy; 2024 Daily News. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




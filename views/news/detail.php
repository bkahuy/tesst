<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bài Báo Chi Tiết</title>
</head>
<body>
<!-- Header -->
<header class="bg-primary text-white py-3">
    <div class="container text-center">
        <h1 class="mb-0">Chi Tiết Bài Báo</h1>
    </div>
</header>

<!-- Main Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <!-- Article Card -->
            <?php
            foreach($newsbyid as $newbyid) {
            ?>
            <div class="card shadow-sm">
                <!-- Article Image -->
                <img src="<?= $newbyid->getImage(); ?>" class="card-img-top" alt="Hình ảnh bài báo">

                <!-- Article Body -->
                <div class="card-body">
                    <!-- Title -->
                    <h2 class="card-title"><?= $newbyid->getTitle();?></h2>

                    <!-- Category and Date -->
                    <p class="text-muted">
                        <span>Danh mục: <?= $newbyid->getCategoryName();?></span> |
                        <span>Ngày tạo: <?= $newbyid->getCreatedAt();?></span>
                    </p>

                    <!-- Content -->
                    <p class="card-text"><?= $newbyid->getContent();?></p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
        <p class="mb-0">&copy; <?php echo date("Y"); ?> Bài Báo. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

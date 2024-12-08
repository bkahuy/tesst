<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="">
    <h1>Search</h1>
<div class="modal-body" id="searchResults">
                <!-- Nội dung tìm kiếm sẽ được hiển thị ở đây -->
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Article Card -->
                            <?php
                            foreach($newsResults as $newResults) {
                                ?>
                                <div class="card shadow-sm">
                                    <!-- Article Image -->
                                    <img src="<?= $newResults->getImage(); ?>" class="card-img-top" alt="Hình ảnh bài báo">

                                    <!-- Article Body -->
                                    <div class="card-body">
                                        <!-- Title -->
                                        <h2 class="card-title"><?= $newResults->getTitle();?></h2>

                                        <!-- Category and Date -->
                                        <p class="text-muted">
                                            <span>Danh mục: <?= $newResults->getCategoryName();?></span> |
                                            <span>Ngày tạo: <?= $newResults->getCreatedAt();?></span>
                                        </p>

                                        <!-- Content -->
                                        <p class="card-text"><?= $newResults->getContent();?></p>
                                    </div>
                                </div>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
</form>
</body>
</html>
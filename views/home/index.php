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
                <div class="col-md-6 col-lg-4">
                    <div class="card news-card shadow-sm">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <h5 class="card-title">Breaking News: Major Event Happened</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Article 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card news-card shadow-sm">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <h5 class="card-title">Sports Update: Big Win Today</h5>
                            <p class="card-text">Curabitur ac leo nunc. Vestibulum et mauris vel ante...</p>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Article 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card news-card shadow-sm">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <h5 class="card-title">Tech World: AI is Revolutionizing</h5>
                            <p class="card-text">Mauris lacinia sapien quis libero. Praesent id justo...</p>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Article 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card news-card shadow-sm">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <h5 class="card-title">World News: Diplomatic Talks</h5>
                            <p class="card-text">Nulla facilisi. Sed magna enim, consequat at...</p>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Article 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card news-card shadow-sm">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <h5 class="card-title">Entertainment: Movie of the Year</h5>
                            <p class="card-text">Donec vitae dolor. Integer euismod lacus luctus...</p>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Article 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card news-card shadow-sm">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <h5 class="card-title">Economy: Market Trends Today</h5>
                            <p class="card-text">Nam quis nulla. Integer malesuada. In in enim a...</p>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
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




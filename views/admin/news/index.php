<?php
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Bài Viết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .modal-backdrop.show {
            opacity: 0.5;
        }
        .container {
            text-align: center;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        i{
            color: blue;
        }
        .title{
            color: blue;
            justify-content: center;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        ul, li{
            display: inline-block;
            list-style-type: none;
        }
        .page{
            display: inline-block ;
            margin-left: 40%;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Quản Lý Bài Viết</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <button class="btn btn-danger" id="logoutBtn">Đăng xuất</button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-3">
    <h2>Quản Lý Bài Viết</h2>
    <div class="action-buttons">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addPostModal">Thêm Bài Viết</button>
        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editPostModal">Sửa Bài Viết</button>
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePostModal">Xóa Bài Viết</button>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Nội dung</th>
            <th>Ảnh</th>
            <th>Ngày đăng</th>
        </tr>
        </thead>
        <tbody>
            <?php
            foreach($news as $new) {
            ?>
                    <tr>
                        <td><?=$new->getId(); ?></td>
                        <td><?= $new->getTitle(); ?></td>
                        <td><?=$new->getContent(); ?></td>
                        <td><?=$new->getImage(); ?></td>
                        <td><?=$new->getCreatedAt(); ?></td>
                    </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <!-- Hiển thị điều hướng phân trang -->
    <!--    <div class="page">-->
    <!--        --><?php //if ($total_pages > 1): ?>
    <!--            --><?php //for ($i = 1; $i <= $total_pages; $i++): ?>
    <!--                <a href="?page=--><?php //echo $i; ?><!--"-->
    <!--                   style="--><?php //echo $i == $page ? 'font-weight:bold;color:red;padding:20px' : ''; ?><!--">-->
    <!--                    --><?php //echo $i; ?>
    <!--                </a>-->
    <!--            --><?php //endfor; ?>
    <!--        --><?php //endif; ?>
    <!--    </div>-->
</div>

<!-- Modal Thêm Bài Viết -->
<div class="modal fade" id="addPostModal" tabindex="-1" aria-labelledby="addPostModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPostModalLabel">Thêm Bài Viết</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPostForm">
                    <div class="mb-3">
                        <label for="title" class="form-label">Tiêu đề bài viết</label>
                        <input type="text" class="form-control" id="title" placeholder="Nhập tiêu đề bài viết" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Nội dung bài viết</label>
                        <textarea class="form-control" id="content" rows="3" placeholder="Nhập nội dung bài viết" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">URL Ảnh Thumbnail</label>
                        <input type="url" class="form-control" id="image" placeholder="Nhập URL ảnh thumbnail" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Chọn phân loại bài viết</label>
                        <select class="form-control" id="category" required>
                            <option value="sports">Thể thao</option>
                            <option value="tech">Công nghệ</option>
                            <option value="entertainment">Giải trí</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm bài viết</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Sửa Bài Viết -->
<div class="modal fade" id="editPostModal" tabindex="-1" aria-labelledby="editPostModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPostModalLabel">Sửa Bài Viết</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editPostForm">
                    <div class="mb-3">
                        <label for="selectPost" class="form-label">Chọn bài viết muốn sửa</label>
                        <select class="form-control" id="selectPost">
                            <option value="1">Bài viết 1</option>
                            <option value="2">Bài viết 2</option>
                            <option value="3">Bài viết 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Tiêu đề bài viết</label>
                        <input type="text" class="form-control" id="editTitle" placeholder="Nhập tiêu đề bài viết" required>
                    </div>
                    <div class="mb-3">
                        <label for="editContent" class="form-label">Nội dung bài viết</label>
                        <textarea class="form-control" id="editContent" rows="3" placeholder="Nhập nội dung bài viết" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="editImage" class="form-label">URL Ảnh Thumbnail</label>
                        <input type="url" class="form-control" id="editImage" placeholder="Nhập URL ảnh thumbnail" required>
                    </div>
                    <div class="mb-3">
                        <label for="editCategory" class="form-label">Chọn phân loại bài viết</label>
                        <select class="form-control" id="editCategory" required>
                            <option value="sports">Thể thao</option>
                            <option value="tech">Công nghệ</option>
                            <option value="entertainment">Giải trí</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Cập nhật bài viết</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Xóa Bài Viết -->
<div class="modal fade" id="deletePostModal" tabindex="-1" aria-labelledby="deletePostModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePostModalLabel">Xóa Bài Viết</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="deletePostForm">
                    <div class="mb-3">
                        <label for="deletePostSelect" class="form-label">Chọn bài viết muốn xóa</label>
                        <select class="form-control" id="deletePostSelect">
                            <option value="1">Bài viết 1</option>
                            <option value="2">Bài viết 2</option>
                            <option value="3">Bài viết 3</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-danger">Xóa bài viết</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Đóng modal khi nhấn vào ngoài modal hoặc nhấn nút "X"
    document.querySelectorAll('.btn-close').forEach(btn => {
        btn.addEventListener('click', () => {
            const modal = btn.closest('.modal');
            const modalInstance = bootstrap.Modal.getInstance(modal);
            modalInstance.hide();
        });
    });
</script>
</body>
</html>
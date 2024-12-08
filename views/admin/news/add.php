<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng điều khiển Quản trị viên</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }
        /* Sidebar Styling */
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            height: 100vh;
            position: sticky;
            background-color: #343a40;
            color: #fff;
            transition: all 0.3s ease;
        }
        #sidebar.active {
            min-width: 60px;
            max-width: 80px;
        }
        #sidebar.active .nav-link span {
            display: none;
        }
        #sidebar .nav-link {
            color: #fff;
            padding: 10px 20px;
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
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <nav id="sidebar" class="bg-dark">
        <div class="p-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Bảng điều khiển Quản trị viên</h5>
            <span id="toggle-btn"><i class="bi bi-list"></i></span>
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
        <div class="tab-content">
            <!-- Thêm bài viết -->
            <div class="tab-pane fade show active" id="addPost">
                <h2>Thêm Bài Viết</h2>
                <form id="addPostForm" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Tiêu đề bài viết</label>
                        <input type="text" class="form-control" id="title" placeholder="Nhập tiêu đề bài viết">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Nội dung bài viết</label>
                        <textarea class="form-control" id="content" rows="5" placeholder="Nhập nội dung bài viết" oninput="autoResize(this)"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Tải ảnh bài viết</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Chọn phân loại bài viết</label>
                        <select class="form-control" id="category" name="category">
                            <option value="sports">Thể thao</option>
                            <option value="tech">Công nghệ</option>
                            <option value="entertaiment">Giải trí</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm bài viết</button>
                </form>
                <div id="responseMessage" class="mt-3"></div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Toggle sidebar
    document.getElementById("toggle-btn").addEventListener("click", function() {
        document.getElementById("sidebar").classList.toggle("active");
        document.getElementById("content").classList.toggle("active");
    });

    // Tự động điều chỉnh chiều cao của textarea
    function autoResize(textarea) {
        textarea.style.height = 'auto'; // Đặt chiều cao về auto trước khi tính lại chiều cao
        textarea.style.height = (textarea.scrollHeight) + 'px'; // Điều chỉnh chiều cao theo nội dung
    }

    // AJAX form submission
    document.getElementById("addPostForm").addEventListener("submit", function(event) {
        event.preventDefault();

        const formData = new FormData(this);

        fetch('upload_post.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                document.getElementById("responseMessage").innerHTML = data.message;
                if (data.success) {
                    // Optionally reset the form
                    document.getElementById("addPostForm").reset();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById("responseMessage").innerHTML = 'Có lỗi xảy ra!';
            });
    });
</script>
</body>
</html>

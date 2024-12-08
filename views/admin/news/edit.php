<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Bài Viết</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
            min-width: 60px;
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
            padding: 10px 20px;
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
<div class="d-flex" id="content">
    <nav id="sidebar" class="bg-dark">
        <div class="p-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Bảng điều khiển Quản trị viên</h5>
            <span id="toggle-btn">
                    <i class="bi bi-list"></i>
                </span>
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
                <a href="#" class="nav-link"><i class="bi bi-box-arrow-right"></i> <span>Đăng xuất</span></a>
            </li>
        </ul>
    </nav>

    <div id="content" class="p-4">
        <h2 class="mb-4">Sửa Bài Viết</h2>
        <form id="editPostForm">

        <div class="mb-3">
            <label for="editTitle" class="form-label">Tiêu đề bài viết</label>
            <input type="text" class="form-control" id="editTitle" placeholder="Nhập tiêu đề bài viết cần sửa" required>
        </div>
        <div class="mb-3">
            <label for="editContent" class="form-label">Nội dung bài viết</label>
            <textarea class="form-control" id="editContent" rows="5" placeholder="Nhập nội dung bài viết cần sửa" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Nhập đường dẫn ảnh bài viết</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Nhập URL của ảnh bài viết">
        </div>
        <div class="mb-3">
            <label for="editCategory" class="form-label">Chọn phân loại bài viết</label>
            <select class="form-control" id="category" name="category">
                <option value="sports">Thể thao</option>
                <option value="tech">Công nghệ</option>
                <option value="entertaiment">Giải trí</option>
            </select>
        </div>

        <!-- Nút sửa bài viết -->
        <button type="submit" class="btn btn-warning">Cập nhật bài viết</button>
    </form>
    </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Example of handling form submission for editing
    document.getElementById("editPostForm").addEventListener("submit", function(event) {
        event.preventDefault();
        const title = document.getElementById("editTitle").value;
        const content = document.getElementById("editContent").value;
        const category = document.getElementById("editCategory").value;

        console.log("Tiêu đề:", title);
        console.log("Nội dung:", content);
        console.log("Phân loại:", category);

        // Simulate success message
        alert("Bài viết đã được cập nhật thành công!");
    });

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
</script>
</body>
</html>

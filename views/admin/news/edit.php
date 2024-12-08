<?php
include '../../../libs/DBConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'], $_POST['content'], $_POST['category_id'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category_id = $_POST['category_id'];
    $image = isset($_POST['image']) ? $_POST['image'] : '';

    $sql = "INSERT INTO news (title, content, image, created_at, category_id)
            VALUES (?, ?, ?, NOW(), ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $content, $image, $category_id);

    if ($stmt->execute()) {
        echo "New news item added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';

    // Save the post to a file
    if (!empty($title) && !empty($content)) {
        $post = "Title: $title\nContent: $content\n\n";
        file_put_contents('posts.txt', $post, FILE_APPEND);
        header('Location: home.php'); // Redirect to the home page
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post Form</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: monospace;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Post Form</h1>
    <form action="post.php" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea><br><br>
        <input type="submit" value="Post">
    </form>
</body>
</html>

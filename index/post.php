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
        .post-box {
            border: 1px solid #00ff00;
            margin: 10px;
            padding: 10px;
            width: 500px;
            height: 200px;
            overflow-y: scroll;
            background-color: #fff;
            color: #000;
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
    <div class="post-box">
        <?php
        $posts = file('posts.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($posts as $post) {
            echo nl2br(htmlspecialchars($post)) . "\n";
        }
        ?>
    </div>
</body>
</html>

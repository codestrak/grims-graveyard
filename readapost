<?php
$posts = file('posts.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read Post</title>
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
    <h1>Read Post</h1>
    <div class="post-box">
        <?php
        foreach ($posts as $post) {
            echo nl2br(htmlspecialchars($post)) . "\n";
        }
        ?>
    </div>
    <a href="home.php"><button>Go Back</button></a>
</body>
</html>

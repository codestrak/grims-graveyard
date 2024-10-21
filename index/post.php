<?php
// Form handling code here
?>
<!DOCTYPE html>
<html>
<head>
    <title>Post Form</title>
    <style>
        body {
            background-color: #000;
        }
    </style>
</head>
<body>
    <h1>Post Form</h1>
    <form action="post.php" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title"><br><br>
        <label for="content">Content:</label>
        <textarea id="content" name="content"></textarea><br><br>
        <input type="submit" value="Post">
    </form>
</body>
</html>

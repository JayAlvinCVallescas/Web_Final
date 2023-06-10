<?php
// If user submits message
if (isset($_POST['submit-msg'])) {
    require 'config\db.php';
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $author = $_COOKIE['username']; // Retrieve the username from the session

    $query = "INSERT INTO posts(content,author,date) VALUES('$content','$author',now())";

    if (mysqli_query($conn, $query)) {
        header("Location: '.$servername.'");
        header('Location: community.php');
        exit();
    } else {
        echo 'ECHO: ' . mysqli_error($conn);
    }
}
?>

<div class="post-container">
    <div class="closeOrder" onclick="closePost()">
        X
    </div>
    <h2>Create Post</h2>
    <form class="post-content" action="post.php" method="POST">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <button class='btn' name='submit-msg'>SUBMIT</button>
    </form>
</div>
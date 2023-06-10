<?php

require './config/db.php';


// Check if the session variable is not set
$usern = $_COOKIE['username']; // Retrieve the username from the session
$query = "SELECT id, content, date FROM web_app.posts";
$posts = mysqli_query($conn, $query);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM posts WHERE id = '$id'";

    mysqli_query($conn, $query);
    header('Location: community.php');
}

?>

<?php require '.\inc\header.php' ?>
<?php require 'signlog.php' ?>
<?php require 'post.php' ?>
<div class="com-container-top">
    <img src="./images/community.jpg" alt="">
    <div class="com-title">
        <h1>COMMUNITY</h1>
    </div>
</div>
<div class="com-container">
    <div class="createpost">
        <button class="btn" onclick="createPost()">Create</button>
    </div>
    <div class="com-container-box">
        <table>
            <tr>
                <th>CONTENT</th>
                <th>AUTHOR</th>
                <th>DATE</th>
                <th>ACTION</th>
            </tr>
            <?php foreach ($posts as $post) : ?>
                <tr>
                    <td><?php echo $post['content'] ?></td>
                    <td><?php echo  $usern ?></td>
                    <td><?php echo $post['date']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $post['id'] ?>">
                            <button class="btn">Edit</button>
                        </a>
                        <a href="community.php?id=<?php echo $post['id'] ?>">
                            <button class="btn">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>

<script>
    const postContainer = document.querySelector(".post-container");

    const createPost = () => {
        postContainer.style.display = "flex";
    }

    const closePost = () => {
        postContainer.style.display = "none";
    }
</script>

<?php require '.\inc\footer.php' ?>
<?php
require './config/config.php';
require './config/db.php';

// Checks if id is set 
// For update post
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM posts WHERE id = $id";
    $posts = mysqli_fetch_array(mysqli_query($conn, $query));
}
?>

<?php
require './config/db.php';
// If user submits updated content
if (isset($_POST['submit'])) {
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    $query = "UPDATE posts SET content = '$content' WHERE id = '$id'";

    $result = mysqli_query($conn, $query);
    header('Location: community.php');
}

?>
<?php require '.\inc\header.php' ?>
<div class="edit-container">
    <div class="closeOrder" onclick="closePost()">
        <a href="./community.php">X</a>
    </div>
    <h2>Edit Post</h2>
    <form method="POST" class="edit-content" action="<?php $_SERVER['PHP_SELF'] ?>">
        <textarea name="content" id="" cols="30" rows="10" value="<?php echo $posts['content'] ?>"></textarea>
        <button name="submit" type="submit" class="btn">SUBMIT</button>
    </form>
</div>
<div class="edit-container-content"></div>
<?php require '.\inc\footer.php' ?>
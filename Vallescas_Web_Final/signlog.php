<?php
require './config/db.php';
// For sign up
// if user click the submit button
if (isset($_POST['submit'])) {;
    // get the value from form input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // query
    $query = "INSERT INTO account(username,email,pass) VALUES('$username','$email','$password')";

    // redirect to home page
    if (mysqli_query($conn, $query)) {
        header("Location: " . $servername . '');
        header("Location: index.php");
        exit();
    } else {
        echo 'ECHO: ' . mysqli_error($conn);
    }

    // Checks if inputs fields are empty
    if (
        empty($username) and
        empty($email) and
        empty($password)
    ) {
        header("Location: index.php");
        exit();
    }
}
// For login 
if (isset($_POST['submit-log'])) {
    // Get values from input fields
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sqluser = "SELECT * FROM account WHERE username = '$username'";

    $verifyuser = mysqli_fetch_array(mysqli_query($conn, $sqluser));

    // Check if username is not empty and password inputted by the user is matched to the password in the database
    if (!empty($verifyuser) and $verifyuser['pass'] == $password) {
        session_start();
        $_SESSION['usern'] = $username;
        $_SESSION['pwd'] = $password;
        setcookie('username', $username, time() + 24 * 60 * 60);
        header('Location: index.php');
        exit();
    }
}

?>

<div id="displayall">
    <section class="front-container sign-up" id="signup">
        <div class="sign-left-container">
            <video autoplay muted loop>
                <source src="./videos/mylivewallpapers.com-Yasuo-Spirit-Blossom.mp4">
            </video>
        </div>
        <div class="sign-right-container">
            <h1>SIGN <span>UP</span> </h1>
            <form action="index.php" method="post">
                <input type="text" placeholder="Name" name="username" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="password" placeholder="Retype Password" name="pass-repeat" required>
                <button type="submit" name="submit" class="btn">SUBMIT</button>
            </form>
            <p>Already have account, <span class="click" onclick="loginDisplay()">Login here</span> </p>
        </div>
        <div class="closebtn" onclick="closeDisplay()">
            <<span>
                < </span>
        </div>
    </section>
    <section class="front-container log-in" id="login">
        <div class="log-left-container">
            <video autoplay muted loop>
                <source src="./videos/mylivewallpapers.com-Yasuo-Spirit-Blossom.mp4">
            </video>
        </div>
        <div class="log-right-container">
            <h1>LOG<span> IN</span> </h1>
            <form action="index.php" method="POST">
                <input type="text" placeholder="Name" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button class="btn" name="submit-log">SUBMIT</button>
            </form>
            <p>Don't have account, <span class="click" onclick="signupDisplay()">Signup here</span> </p>
        </div>
        <div class="closebtn" onclick="closeDisplay()">
            <<span>
                < </span>
        </div>
    </section>
</div>
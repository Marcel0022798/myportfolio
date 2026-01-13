<?php
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === "admin" && $password === "1234"){
        $_SESSION['logged_in'] = true;
        header("Location: admin.php");
    } else {
        $error = "Invalid credentials!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<section style="padding:100px; text-align:center;">
    <h1>Admin Login</h1>
    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</section>
</body>
</html>
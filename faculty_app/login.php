<?php
session_start();
include 'db.php';

$error = "";

if(isset($_POST['username']) && isset($_POST['password'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {

        $_SESSION['user'] = $username; // ✅ session set

        header("Location: dashboard.php");
        exit();

    } else {
        $error = "Invalid login";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>FMS Login</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #1e3c72, #2a5298);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    background: white;
    padding: 40px;
    border-radius: 15px;
    width: 350px;
    text-align: center;
    box-shadow: 0px 10px 30px rgba(0,0,0,0.2);
}

h1 {
    margin: 0;
    color: #2a5298;
}

.subtitle {
    color: gray;
    font-size: 14px;
}

.welcome {
    font-size: 18px;
    margin: 10px 0;
    color: #333;
}

input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
}

button {
    width: 100%;
    padding: 10px;
    background: #2a5298;
    color: white;
    border: none;
    border-radius: 8px;
    margin-top: 10px;
    cursor: pointer;
}

button:hover {
    background: #1e3c72;
}

.options {
    display: flex;
    justify-content: space-between;
    font-size: 12px;
    margin-top: 10px;
}

.error {
    color: red;
    margin-top: 10px;
}
</style>
</head>

<body>

<div class="container">

    <h1>FMS</h1>
    <div class="subtitle">Faculty Management System</div>

    <div class="welcome">Welcome Back 👋</div>
    <div class="subtitle">Login to your account</div>

    <form method="POST" action="login.php">

        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <div class="options">
            <label><input type="checkbox"> Remember me</label>
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit">Login</button>

    </form>

    <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>

</div>

</body>
</html>
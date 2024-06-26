<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            session_start();
            $_SESSION['username'] = $username; 
            header("Location: student_dashboard.php");
            exit();
        } else {
            echo "<div style='background-color: #00ffa7; color: red; padding: 5px;'>Invalid Password</div>";
        }
    } else {
        echo "<div style='background-color: #00ffa7; color: red; padding: 10px;'>User Not Found</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<style>
body {
    background-color: white;
    color: white;
}

.container {
    background-color: black;
    padding: 30px;
    border-radius: 20px;
    max-width: 500px;
    margin: 0 auto;
}

h2 {
    text-align: center;
    color: white;
}

.input-group {
    margin-bottom: 20px;
}

.input {
    max-width: 300px;
    height: 44px;
    background-color: transparent;
    border-radius: .5rem;
    padding: 0 1rem;
    border: 2px solid transparent;
    font-size: 1rem;
    transition: border-color .3s cubic-bezier(.25,.01,.25,1) 0s, color .3s cubic-bezier(.25,.01,.25,1) 0s,background .2s cubic-bezier(.25,.01,.25,1) 0s;
}

.label {
    display: block;
    margin-bottom: .3rem;
    font-size: .9rem;
    font-weight: bold;
    color: white;
    transition: color .3s cubic-bezier(.25,.01,.25,1) 0s;
}

.input:focus {
    background-color: white;
    color: black;
}

.input:not(:focus):not(:placeholder-shown) {
    background-color: transparent;
    color: white;
}

button[type="submit"] {
    background-color: black;
    color: white;
    border: none;
    border-radius: .5rem;
    padding: 1px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #05060f;
    border: 1px solid red;
    transform: scale(1);
}

button[type="submit"]:active {
    transform: scale(1) rotateZ(2deg);
}

a {
    color: white;
}
</style>
<center>
    <div class="logo">
        <a href="index.php">
            <img src="logo.png" alt="Logo" class="logo" style="
            display: flex;
            justify-content: center; 
            align-items: center; 
            width: 50%; 
            padding: 20px 0;
            ">
        </a>
    </div>
</center>
<div class="container">
    <center>
    <h2>LOGIN</h2>
    <h4 style="color: gray;">(USER)</h4>
    </center>
    <form action="login.php" method="post">
        <br>
        <div class="input-group">
            <label class="label" for="username">Username:</label>
            <input autocomplete="off" name="username" id="username" class="input" type="text" required>
            <div></div>
        </div>
        <div class="input-group">
            <label class="label" for="password">Password:</label>
            <input autocomplete="off" name="password" id="password" class="input" type="password" required>
            <div></div>
        </div>
        <button class="submit" type="submit" name="login">Login</button>
    </form>
    <center>
    <p>Don't have an account? <a href="register.php">Register</a></p>
    </center>
</div>
</body>
</html>

<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
*{
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    background-color: white;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.sidebar {
    background-color: black;
    color: white;
    width: 250px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    overflow-y: auto;
    z-index: 999;
}

.fa-white {
    color: white;
}

.main--content {
    margin-left: 250px;
    padding: 20px;
}

.menu {
    padding: 0;
    margin: 0;
    list-style: none;
}

.menu li {
    padding: 15px 20px;
    border-bottom: 1px solid #333;
}

.menu li.active {
    background-color: #333;
}

.menu li a {
    color: white;
    text-decoration: none;
}

.menu li a:hover {
    color: #ddd;
}

.logout {
    position: absolute;
    bottom: 0;
}

.card--container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.card--wrapper {
    flex-basis: calc(33.33% - 20px);
    background-color: #f9f9f9;
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 5px;
}

.header--title {
    display: inline-block;
    cursor: default; /* Disable pointer events */
}

.header--title span {
    display: block;
}

.user--info {
    display: flex;
    align-items: center;
    cursor: pointer; /* Enable pointer events */
}

.search--box {
    position: relative;
}

.search--box input[type="text"] {
    padding: 8px 30px 8px 10px;
    border-radius: 20px;
    border: 1px solid #ccc;
    background-color: #f2f2f2;
    width: 200px;
}

.fa-search {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #333; /* Icon color */
}
</style>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active"><a href="#"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></li>
            <li><a href="edit_profile.php"><i class="fas fa-user"></i><span>Profile</span></li>
            <li><a href="#"><i class="fas fa-calendar-check"></i><span>View Remaining Session</span></li>
            <li><a href="#"><i class="fas fa-calendar-plus"></i><span>Make Reservation</span></li>
            <li class="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></li>
        </ul>
    </div>

    <div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>CCS SIT-IN MONITORING SYSTEM</span>
            <h2>Dashboard</h2>
        </div>
        <div class="user--info">
            <div class="search--box">
                <i class="fa-solid fa-search fa-white"></i>
                <input type="text" placeholder="Search" />
            </div>
            <img src="img.jpg" alt="" />
        </div>
    </div>
    </div>

    <div class="card--container">
        <div class="card--wrapper">
            <div class>

            </div>
            
        </div>
    </div>
</body>
</html>

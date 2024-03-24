<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Staff Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
    *{
        margin: 0;
        padding: 0;
        outline: none;
        border: none;
        text-decoration: none;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body{
        background: white;
    }

    nav{
        position: absolute;
        top: 0;
        bottom: 0;
        height: 100%;
        left: 0;
        background-color: black;
        color: white;
        width: 90px;
        overflow: hidden;
        transition: width 0.2s linear;
        box-shadow: 0 20px 35px rgba (0, 0, 0, 0.1);
    }

    .logo{
        text-align: center;
        display: flex;
        align-items: center; /* Center items vertically */
        transition: all 0.5s ease;
        margin: 10px 0 0 10px;
    }

    .logo img{
        width: 45px;
        height: 45px;
        border-radius: 50%;
        filter: brightness(100%);
    }

    .logo span{
        font-weight: bold;
        padding: 15px;
        font-size: 18px;
        text-transform: uppercase;
        color: white;
        transition: visibility 0.3s ease;
    }

    a{
        position: relative;
        color: white;
        font-size: 14px;
        display: flex;
        align-items: center; /* Center items vertically */
        width: 100%;
        padding: 10px;
    }

    .fas{
        width: 50px; 
        height: 50px;
        font-size: 25px;
        text-align: center;
        margin-right: 10px;
        color: white;
    }

    .nav-item{
        margin-left: 20px;
        visibility: hidden;
    }

    a:hover{
        background: gray;
    }

    nav:hover{
        width: 280px;
        transition: all 0.5s ease;
    }

    .logout{
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    a:hover .fas, a:hover .logo img {
        filter: brightness(70%);
    }

    a:hover .nav-item {
        color: white;
        visibility: visible;
    }
</style>
    <nav>
        <ul>
            <li>
                <a href="#" class="logo">
                    <img src="/logonew.png" alt="">
                    <span class="nav-item">CCS SIT-IN MONITORING SYSTEM</span>
                </a>
            </li>
            <li><a href="#">
                <i class="fas fa-magnifying-glass"></i>
                <span class="nav-item">Search</span>
            </a></li>
            <li><a href="#">
                <i class="fas fa-trash"></i>
                <span class="nav-item">Delete</span>
            </a></li>
            <li><a href="#">
                <i class="fas fa-file"></i>
                <span class="nav-item">View Sitin Records</span>
            </a></li>
            <li><a href="#">
                <i class="fas fa-book"></i>
                <span class="nav-item">Generate Reports</span>
            </a></li>
            <li><a href="#" class="logout">
                <i class="fas fa-right-from-bracket"></i>
                <span class="nav-item">Log-out</span>
            </a></li>
        </ul>
    </nav>
</body>
</html>

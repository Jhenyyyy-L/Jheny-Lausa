<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM users WHERE student_id LIKE '%$searchTerm%' OR full_name LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "Student ID: " . $row["student_id"] . "<br>";
            echo "Full Name: " . $row["full_name"] . "<br>";
            echo "Gender: " . $row["gender"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "Username: " . $row["username"] . "<br><br>";
        }
    } else {
        echo "No results found";
    }
}
?>

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
            <li>
    <a href="#" id="search-link">
        <i class="fas fa-search"></i>
        <span class="nav-item">Search</span>
    </a>
</li>

<script>
document.getElementById("search-link").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent default link behavior

    // Prompt the user for search input
    var searchTerm = prompt("Enter the search term:");

    // Make AJAX request only if search term is provided
    if (searchTerm) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "search.php?search=" + searchTerm, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert(xhr.responseText); // Display the result (you can replace this with more sophisticated display logic)
            }
        };
        xhr.send();
    }
});
</script>
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

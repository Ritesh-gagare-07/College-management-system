<?php
$host = "127.0.0.1:3307";
$username = "root";       // change if different
$password = "";           // change if needed
$database = "college_database";

// Connect to DB
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch faculty records
$sql = "SELECT * FROM departments";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title> HOD'S Of Departments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 40px;
            justify-content: center;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            width: 250px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            text-align: center;
        }
        .card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .card h3 {
            margin: 10px 0 5px;
        }
        .card p {
            margin: 5px 0;
            color: #555;
        }
    </style>
</head>
<body>
    <?php include"partials/_header.php";?>
        <?php include"partials/_nav.php";?>
<br>

<h1 style="text-align:center;">Our HOD'S</h1>
<div class="container">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc() ) {
            echo '<div class="card">';
            // echo '<img src="' . $row["photo"] . '" alt="Photo">';
            echo '<h3>' . $row["department_id"] . '</h3>';
            echo '<p><strong>Department:</strong> ' .$row["department_name"] . '</p>'; 
            echo '<p><strong>HOD:</strong> ' . $row["head_of_department"] . '</p>';
            echo '</div>';

        }
    } else {
        echo "<p>No Department HOD'S  found.</p>";
    }

    $conn->close();
    ?>
</div>
    <?php include"partials/_footer.php";?>

</body>
</html>

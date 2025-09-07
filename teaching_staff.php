<?php
$host = "localhost";
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
$sql = "SELECT * FROM faculty";
$result = $conn->query($sql);

$sql2 = "SELECT department_name FROM departments where  departments.department_id = faculty.department_id";
$result2 = $conn->query($sql2);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Faculty Members</title>
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

<h1 style="text-align:center;">Our Faculty</h1>
<div class="container">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc() ) {
            echo '<div class="card">';
            // echo '<img src="' . $row["photo"] . '" alt="Photo">';
            echo '<h3>' . $row["first_name"] .''. $row["last_name"] . '</h3>';
            echo '<p><strong>Department:</strong> ' . $result2 . '</p>'; 
            echo '<p><strong>Email:</strong> ' . $row["email"] . '</p>';
            echo '</div>';

        }
    } else {
        echo "<p>No faculty members found.</p>";
    }

    $conn->close();
    ?>
</div>
    <?php include"partials/_footer.php";?>

</body>
</html>

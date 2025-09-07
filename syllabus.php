<?php
include "partials/_dbconnect.php";

$search_term = "";
if (isset($_GET['search'])) {
    $search_term = trim($_GET['search']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Course Syllabus | SPPU College</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f9fc;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 20px;
        }

        h1 {
            color: #004d40;
            text-align: center;
            margin-bottom: 20px;
        }

        .search-bar {
            text-align: center;
            margin-bottom: 30px;
        }

        input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 2px solid #1a237e;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #004d40;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        button:hover {
            background-color: #00695c;
        }

        .course {
            background-color: white;
            border-left: 5px solid #1a237e;
            margin-bottom: 20px;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.08);
        }

        .course h2 {
            margin-top: 0;
            color: #1a237e;
        }

        .year {
            margin-left: 20px;
            padding: 5px 10px;
        }

        .year a {
            text-decoration: none;
            color: #004d40;
            background-color: #e0f2f1;
            padding: 6px 12px;
            border-radius: 5px;
            display: inline-block;
            margin: 5px 0;
        }

        .year a:hover {
            background-color: #b2dfdb;
        }
    </style>
</head>
<body>
        <?php include "partials/_header.php";?>
    <?php include "partials/_nav.php";?>

    <div class="container">
        <h1>SPPU Course Syllabus</h1>

        <div class="search-bar">
            <form method="GET" action="">
                <input type="text" name="search" placeholder="Search by course name..." value="<?= htmlspecialchars($search_term) ?>">
                
                <button type="submit">Search</button>
            </form>
        </div>

        <?php
        $query = "SELECT course_name, year, pdf_path FROM syllabus";
        if (!empty($search_term)) {
            $search_term_db = mysqli_real_escape_string($conn, $search_term);
            $query .= " WHERE course_name LIKE '%$search_term_db%'";
        }
        $query .= " ORDER BY course_name, year";

        $result = mysqli_query($conn, $query);

        $courses = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $courses[$row['course_name']][] = $row;
        }

        if (empty($courses)) {
            echo "<p style='text-align:center; color:#ff0000;'>No courses found.</p>";
        }

        foreach ($courses as $course => $years) {
            echo "<div class='course'>";
            echo "<h2>$course</h2>";

            foreach ($years as $data) {
echo "<div class='year'><a href='" . $data['pdf_path'] . "' target='_blank'>" . $data['year'] . " Syllabus</a></div>";
            }

            echo "</div>";
        }
        ?>
    </div>
    <?php include "partials/_footer.php";?>
</body>
</html>

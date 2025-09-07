<?php
include "partials/_dbconnect.php";

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Admission</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: #1b2a49;
            margin: 0;
            padding: 0;
        }
        .admission-container {
            max-width: 600px;
            margin: 40px auto;
            background: #f5f5f5;
            border: 2px solid #004d40;
            padding: 30px;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #004d40;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #1b2a49;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 15px;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }
        button:hover {
            background-color: #004d40;
        }
        .msg {
            text-align: center;
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php include "partials/_header.php";?>
        <?php include "partials/_nav.php";?>

    <div class="admission-container">
        <h2>Student Admission Form</h2>
        <form id="admissionForm">
            <label>First Name</label>
            <input type="text" name="first_name" required>

            <label>Last Name</label>
            <input type="text" name="last_name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <label>Date of Birth</label>
            <input type="date" name="dob" required>

            <label>Gender</label>
            <select name="gender" required>
                <option value="">--Select Gender--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <label>Address</label>
            <textarea name="address" rows="3" required></textarea>

            <label>Department</label>
            <select name="department_id" required>
                <option value="">--Select Department--</option>
                <?php
                $result = $conn->query("SELECT department_id, department_name FROM departments");
                while($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['department_id']}'>{$row['department_name']}</option>";
                }
                ?>
            </select>

            <button type="submit">Submit Admission</button>
        </form>
        <div class="msg" id="formMsg"></div>
    </div>

<script>
    $(document).ready(function(){
        $("#admissionForm").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "handlers/admit_student.php",
                method: "POST",
                data: $(this).serialize(),
                success: function(response){
                    $("#formMsg").html(response);
                    $("#admissionForm")[0].reset();
                }
            });
        });
    });
</script>
    <?php include "partials/_footer.php";?>

</body>
</html>

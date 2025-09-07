<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit;
}

include "partials/_dbconnect.php"; // DB connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    body { font-family: Arial, sans-serif; background-color: #1b2a49; color: white; }
    #sidebar { width: 220px; background-color: #004d40; min-height: 100vh; }
    #sidebar .nav-link { color: white; margin: 5px 0; }
    #sidebar .nav-link:hover { background-color: #00695c; border-radius: 5px; }
    #page-content { padding: 20px; flex-grow: 1; }
    .table-dark td, .table-dark th { color: white; }
    .btn-light { color: #004d40; }
</style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <div id="sidebar" class="p-3">
        <h3 class="text-center mb-4">Admin Panel</h3>
        <ul class="nav flex-column">
            <li class="nav-item"><a href="#" class="nav-link load-section" data-target="students"><i class="fa fa-user-graduate"></i> Students</a></li>
            <li class="nav-item"><a href="#" class="nav-link load-section" data-target="faculty"><i class="fa fa-chalkboard-teacher"></i> Faculty</a></li>
            <li class="nav-item"><a href="#" class="nav-link load-section" data-target="courses"><i class="fa fa-book"></i> Courses</a></li>
            <li class="nav-item"><a href="#" class="nav-link load-section" data-target="notices"><i class="fa fa-bell"></i> Notices</a></li>
            <li class="nav-item mt-3"><a href="logout.php" class="btn btn-light w-100">Logout</a></li>
        </ul>
    </div>

    <!-- Page Content -->
    <div id="page-content" class="flex-grow-1">
        <h2>Welcome, Admin</h2>
        <p>Select a section from the sidebar to manage data.</p>
        <div id="main-content"></div>
    </div>
</div>

<script>
$(document).ready(function(){

    // Load section via AJAX
    $(".load-section").on("click", function(e){
        e.preventDefault();
        let target = $(this).data("target");
        $("#main-content").html("<div class='text-center'><div class='spinner-border'></div> Loading...</div>");

        $.ajax({
            url: "admin_dashboard.php",
            type: "POST",
            data: { action: "load_"+target },
            success: function(data){
                $("#main-content").html(data);
            }
        });
    });

    // Handle Add Student
    $(document).on("submit", "#addStudentForm", function(e){
        e.preventDefault();
        $.post("admin_dashboard.php", $(this).serialize() + "&action=add_student", function(response){
            Swal.fire('Success', response, 'success');
            $(".load-section[data-target='students']").click();
        });
    });

    // Handle Delete Student
    $(document).on("click", ".delete-student", function(){
        let id = $(this).data("id");
        Swal.fire({
            title: "Are you sure?",
            text: "This will delete the student permanently.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.post("admin_dashboard.php", { action: "delete_student", id: id }, function(response){
                    Swal.fire('Deleted!', response, 'success');
                    $(".load-section[data-target='students']").click();
                });
            }
        });
    });

});
</script>

<?php
// =========================
// Backend AJAX Handling
// =========================

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    
    // Load Students Section
    if ($_POST['action'] == "load_students") {
        $result = $conn->query("SELECT * FROM students");
        ?>
        <h3>Manage Students</h3>
        <form id="addStudentForm" class="mb-3">
            <div class="row g-2">
                <div class="col"><input type="text" name="first_name" class="form-control" placeholder="First Name" required></div>
                <div class="col"><input type="text" name="last_name" class="form-control" placeholder="Last Name" required></div>
                <div class="col"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
                <div class="col"><input type="password" name="password" class="form-control" placeholder="Password" required></div>
                <div class="col-auto"><button class="btn btn-success">Add</button></div>
            </div>
        </form>

        <table class="table table-dark table-bordered">
            <tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>
        <?php
        while($row = $result->fetch_assoc()){
            echo "<tr>
                <td>{$row['student_id']}</td>
                <td>{$row['first_name']} {$row['last_name']}</td>
                <td>{$row['email']}</td>
                <td>
                    <button class='btn btn-danger btn-sm delete-student' data-id='{$row['student_id']}'>
                        <i class='fa fa-trash'></i>
                    </button>
                </td>
            </tr>";
        }
        echo "</table>";
        exit;
    }

    // Add Student
    if ($_POST['action'] == "add_student") {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $stmt = $conn->prepare("INSERT INTO students (first_name, last_name, email, password) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $fname, $lname, $email, $pass);
        $stmt->execute();
        echo "Student added successfully!";
        exit;
    }

    // Delete Student
    if ($_POST['action'] == "delete_student") {
        $id = intval($_POST['id']);
        $conn->query("DELETE FROM students WHERE student_id=$id");
        echo "Student deleted successfully!";
        exit;
    }
}
?>
</body>
</html>

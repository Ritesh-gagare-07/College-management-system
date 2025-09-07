<?php
session_start();
include "partials/_dbconnect.php";

// Count registered users
$user_result = $conn->query("SELECT COUNT(*) AS total_users FROM students");
$users = $user_result->fetch_assoc()['total_users'] ?? 0;

// Count enrollments
$enroll_result = $conn->query("SELECT COUNT(*) AS total_enrolled FROM enrollment");
$enrolled = $enroll_result->fetch_assoc()['total_enrolled'] ?? 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #1b2a49;
            margin: 0;
            padding: 0;
        }
        .dashboard {
            padding: 30px;
            background-color: #004d40;
            color: white;
        }
        .container {
            padding: 30px;
        }
        .card {
            background: #f5f5f5;
            padding: 20px;
            border-left: 5px solid #1b2a49;
            margin-bottom: 20px;
        }
        .form-box {
            margin: 20px 0;
            background: #ffffff;
            padding: 20px;
            border: 1px solid #ddd;
        }
        button {
            background-color: #1b2a49;
            color: white;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
        }
        h2 {
            color: #004d40;
        }
        input, select {
            padding: 6px;
            margin: 5px 0;
            width: 100%;
        }
    </style>
</head>
<body>
  <?php include "partials/_nav.php";?>
    <div class="dashboard">
        <h1>Admin Dashboard</h1>
        <p>Total Registered Users: <?= $users ?></p>
        <p>Total Enrollments: <?= $enrolled ?></p>
    </div>
    <div class="form-box">
    <h2>Pending Admissions</h2>
    <div id="pendingTable"></div>
</div>

    
    <div class="container">
        <!-- Faculty Form -->
        <div class="form-box">
            <h2>Add Faculty</h2>
            <form id="facultyForm">
                <input type="text" name="first_name" placeholder="First Name" required />
                <input type="text" name="last_name" placeholder="Last Name" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <button type="submit">Add Faculty</button>
            </form>
        </div>
        <div class="form-box">
    <h2>Faculty List</h2>
    <div id="facultyTable"></div>
</div>

        <!-- Department Form -->
        <div class="form-box">
            <h2>Add Department</h2>
            <form id="departmentForm">
                <input type="text" name="department_name" placeholder="Department Name" required />
                <input type="text" name="head_of_department" placeholder="Head of Department" />
                <button type="submit">Add Department</button>
            </form>
        </div>
        <div class="form-box">
    <h2>Department List</h2>
    <div id="departmentTable"></div>
</div>

        <!-- Schedule Upload -->
        <div class="form-box">
            <h2>Upload Class Schedule (XML)</h2>
            <form id="scheduleForm" enctype="multipart/form-data">
                <input type="file" name="xml_file" accept=".xml" required />
                <button type="submit">Upload</button>
            </form>
        </div>

        <!-- Post Notice -->
        <div class="form-box">
            <h2>Post Notice</h2>
            <form id="noticeForm">
                <input type="text" name="title" placeholder="Notice Title" required />
                <textarea name="description" placeholder="Notice Description" required></textarea>
                <button type="submit">Post Notice</button>
            </form>
        </div>

        <!-- Fetch Notices -->
        <div class="form-box">
            <h2>Recent Notices</h2>
            <button onclick="loadNotices()">Refresh Notices</button>
            <div id="noticeList"></div>
        </div>
    </div>

<script>
    loadPending();

function loadPending() {
    $.get('handlers/fetch_pending.php', function(data) {
        $('#pendingTable').html(data);
    });
}

// Approve / Reject actions
$(document).on('click', '.approve-admission', function(){
    let id = $(this).data('id');
    $.post('handlers/approve_admission.php', {id:id}, function(res){
        alert(res);
        loadPending();
    });
});

$(document).on('click', '.reject-admission', function(){
    let id = $(this).data('id');
    $.post('handlers/reject_admission.php', {id:id}, function(res){
        alert(res);
        loadPending();
    });
});

    $(document).ready(function () {
        // Add Faculty
        $('#facultyForm').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: 'handlers/add_faculty.php',
                method: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    alert(response);
                }
            });
        });

        // Add Department
        $('#departmentForm').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: 'handlers/add_department.php',
                method: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    alert(response);
                }
            });
        });

        // Upload Schedule (XML)
        $('#scheduleForm').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: 'handlers/upload_schedule.php',
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (res) {
                    alert(res);
                }
            });
        });

        // Post Notice
        $('#noticeForm').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: 'handlers/post_notice.php',
                method: 'POST',
                data: $(this).serialize(),
                success: function (res) {
                    alert(res);
                }
            });
        });
        
    loadFaculty();
    loadDepartments();

    // Load Faculty Table
    function loadFaculty() {
        $.get('handlers/fetch_faculty.php', function(data) {
            $('#facultyTable').html(data);
        });
    }

    // Load Department Table
    function loadDepartments() {
        $.get('handlers/fetch_departments.php', function(data) {
            $('#departmentTable').html(data);
        });
    }

    // Delete Faculty
    $(document).on('click', '.delete-faculty', function(){
        let id = $(this).data('id');
        if(confirm('Are you sure you want to delete this faculty?')) {
            $.post('handlers/delete_faculty.php', {faculty_id:id}, function(response){
                alert(response);
                loadFaculty();
            });
        }
    });

    // Delete Department
    $(document).on('click', '.delete-department', function(){
        let id = $(this).data('id');
        if(confirm('Are you sure you want to delete this department?')) {
            $.post('handlers/delete_department.php', {department_id:id}, function(response){
                alert(response);
                loadDepartments();
            });
        }
    });
    });

    function loadNotices() {
        $.ajax({
            url: 'handlers/fetch_notices.php',
            success: function (data) {
                $('#noticeList').html(data);
            }
        });
    }
</script>
<?php include "partials/_footer.php";?>
</body>
</html>

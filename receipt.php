<?php
session_start();
include "partials/_dbconnect.php";

$email = $_SESSION['email'] ?? ''; // store email during login

if ($email) {
    $sql = "SELECT e.first_name, e.last_name, e.email, d.department_name, e.enrollment_date, e.status
            FROM enrollment e
            JOIN departments d ON e.department_id=d.department_id
            WHERE e.email='$email' AND e.status='approved'
            ORDER BY e.enrollment_id DESC LIMIT 1";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        $r = $res->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Enrollment Receipt</title>
            <style>
                body { font-family: Arial, sans-serif; padding: 0px; background: #f5f5f5; }
                .receipt { background: white; padding: 20px; border: 2px solid #004d40; max-width: 600px; margin: auto; }
                h2 { text-align: center; color: #004d40; }
                p { margin: 5px 0; }
                .btn { margin-top: 20px; text-align: center; }
                button { background: #004d40; color: white; padding: 10px 20px; border: none; cursor: pointer; }
                button:hover { background: #1b2a49; }
            </style>
        </head>
        <body>
    <?php include "partials/_nav.php";?><br>
            <div class="receipt">
                <h2>Enrollment Receipt</h2>
                <p><strong>Name:</strong> <?= $r['first_name'] . " " . $r['last_name'] ?></p>
                <p><strong>Email:</strong> <?= $r['email'] ?></p>
                <p><strong>Department:</strong> <?= $r['department_name'] ?></p>
                <p><strong>Enrollment Date:</strong> <?= $r['enrollment_date'] ?></p>
                <p><strong>Status:</strong> <?= ucfirst($r['status']) ?></p>
                <div class="btn">
                    <button onclick="window.print()">Print / Save as PDF</button>
                </div>
            </div>
            <br>
            <?php include "partials/_footer.php";?>
        </body>
        </html>
        <?php
    } else {
        echo "No approved enrollment found for your account.";
    }
} else {
    echo "You must login first.";
}
?>

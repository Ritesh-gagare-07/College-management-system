<?php
include "../partials/_dbconnect.php";

if (isset($_FILES['xml_file']) && $_FILES['xml_file']['error'] == 0) {
    $xmlFile = $_FILES['xml_file']['tmp_name'];
    $xml = simplexml_load_file($xmlFile);

    if ($xml) {
        foreach ($xml->schedule as $s) {
            $course_id = (int)$s->course_id;
            $faculty_id = (int)$s->faculty_id;
            ;

            $stmt = $conn->prepare("INSERT INTO class_schedule(course_id, faculty_id, day_of_week, start_time, end_time, room_number) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("iissss", $course_id, $faculty_id, $day_of_week, $start_time, $end_time, $room_number);
            $stmt->execute();
        }
        echo "✅ Schedule uploaded successfully!";
    } else {
        echo "❌ Invalid XML file!";
    }
} else {
    echo "Please upload a valid XML file!";
}

<?php
include('admin/dbcon.php');
include('session.php');

// Check if $_POST['selector'] is set
if (isset($_POST['selector'])) {
    // Loop through each selected item
    foreach ($_POST['selector'] as $notification_id) {
        // Prepare the insert statement
        $stmt = $conn->prepare("INSERT INTO notification_read (student_id, student_read, notification_id) VALUES (?, 'yes', ?)");
        // Bind parameters
        $stmt->bind_param("ii", $session_id, $notification_id);
        // Execute the statement
        $stmt->execute();
    }
}
?>

<script>
    window.location = 'student_notification.php';
</script>

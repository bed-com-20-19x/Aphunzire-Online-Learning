<?php 
include('admin/dbcon.php');
include('session.php');
$content = $_POST['content'];
$id = $_POST['selector'];
$N = count($id);
for($i=0; $i<$N; $i++)
{
    mysqli_query($conn, "insert into teacher_class_announcements (teacher_class_id, teacher_id, content, date) values('$id[$i]', '$session_id', '$content', Now())")or die(mysqli_error());
    mysqli_query($conn, "insert into notification (teacher_class_id, notification, date_of_notification, value('$id[$i]', 'Add Announcements', NOW(), 'announcements_student.php')")or die(mysqli_error());
}
?>
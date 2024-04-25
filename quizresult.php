<?php 
$studentid = $_SESSION['StudentID'];
if (isset($_GET['score'])) {
    echo $score = '<h1>Your Score is : ' . $_GET['score'] . '</h1>';
}
?>

<h1>Question</h1>
<h5>Choose the correct answer.</h5>
<div style="height:250px;overflow-y:auto;"> 
<?php  
$id = $_GET['id'];
if ($id == '') {
    redirect("index.php");
}
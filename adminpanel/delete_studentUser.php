<?php
include('connect.php');

$user_id = $_POST["id"];

mysqli_query($conn, "DELETE FROM student_user WHERE id = '$user_id' ");

echo "<script language='javascript'>alert('Record has been Deleted!')</script>";
echo "<script>window.location.href='studentUser.php';</script>";

?>
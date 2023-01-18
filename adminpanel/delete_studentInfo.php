<?php
include('connect.php');

$user_id = $_POST["id"];

mysqli_query($conn, "DELETE FROM student_info WHERE id = '$user_id' ");

echo "<script language='javascript'>alert('Record has been Deleted!')</script>";
echo "<script>window.location.href='studentInfo.php';</script>";

?>
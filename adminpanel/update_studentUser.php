<?php

include("connect.php");

$user_id = $_POST["id"];

$new_stdnum = $_POST["new_stdnum"];
$new_email = $_POST["new_email"];
$new_pass = $_POST["new_pass"];

mysqli_query($conn, "UPDATE student_user SET student_number='$new_stdnum', email='$new_email', password='$new_pass' WHERE id='$user_id'");

echo "<script language='javascript'>alert(Record has been updated!')</script>";
echo "<script>window.location.href='studentUser.php';</script>";

?>
<?php

include("connect.php");

$user_id = $_POST["id"];

$new_stdnum = $_POST["new_stdnum"];
$new_fname = $_POST["new_fname"];
$new_lname = $_POST["new_lname"];
$new_mname = $_POST["new_mname"];
$new_suffix = $_POST["new_suffix"];
$new_gender = $_POST["new_gender"];
$new_bdate = $_POST["new_bdate"];
$new_con = $_POST["new_con"];
$new_email = $_POST["new_email"];

mysqli_query($conn, "UPDATE student_info SET studentNumber='$new_stdnum', firstName='$new_fname', lastName='$new_lname', middleName='$new_mname', suffix='$new_suffix', gender='$new_gender', birthdate='$new_bdate', studentContact='$new_con', email='$new_email' WHERE id='$user_id'");

echo "<script language='javascript'>alert(Record has been updated!')</script>";
echo "<script>window.location.href='studentInfo.php';</script>";

?>
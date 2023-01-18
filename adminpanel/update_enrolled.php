<?php

include("connect.php");

$user_id = $_POST["id"];

$new_stdnum = $_POST["new_stdnum"];
$new_rcode = $_POST["new_rcode"];
$new_date = $_POST["new_date"];

mysqli_query($conn, "UPDATE enrolled SET student_number='$new_stdnum', reg_code='$new_rcode', date='$new_date' WHERE id='$user_id'");

echo "<script language='javascript'>alert(Record has been updated!')</script>";
echo "<script>window.location.href='enrolled.php';</script>";

?>
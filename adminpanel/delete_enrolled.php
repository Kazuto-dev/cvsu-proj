<?php
include('connect.php');

$user_id = $_POST["id"];

mysqli_query($conn, "DELETE FROM enrolled WHERE id = '$user_id' ");

echo "<script language='javascript'>alert('Record has been Deleted!')</script>";
echo "<script>window.location.href='enrolled.php';</script>";

?>
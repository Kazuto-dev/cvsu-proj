<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<?php

$user_id = $_REQUEST["id"];

include("connect.php");

$user_delete = mysqli_query($conn, "SELECT * FROM student_user WHERE id = '$user_id' ");

	while($row_delete = mysqli_fetch_assoc($user_delete)) {

		$user_id = $row_delete["id"];
        $studentNumber = $row_delete["student_number"];
        $email = $row_delete["email"];
        $pass = $row_delete["password"];
	}

	echo "<center><br><br><h3> Are you sure you want to delete student number $studentNumber ? </h3></center>"; 

?>

<center><form method="POST" action="delete_enrolled.php">

<input type="hidden" name="id" value="<?php echo $user_id; ?>">

<br>
<br> 

<input type="submit" class="form-control" value="YES" style="width: 60px; float: left; margin-left: 45%;">
<a href='studentUser.php'><input type="button" class="form-control" value="NO" style="width: 60px; float: right; margin-right: 45%;"></a>

</form></center>
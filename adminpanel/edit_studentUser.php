<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>




<?php

$user_id = $_REQUEST["id"];

include("connect.php");

$get_record = mysqli_query($conn, "SELECT * FROM student_user WHERE id='$user_id'");

while($row_edit = mysqli_fetch_assoc($get_record)) {
	
        $studentNumber = $row_edit["student_number"];
        $email = $row_edit["email"];
        $pass = $row_edit["password"];
}

?>



<form method="POST" action="update_studentUser.php" style="border: solid 1px; width: 40%; padding: 20px; margin-left: 30%; margin-top: 50px; border-radius: 20px;">

    <input type="hidden" name="id" value="<?php echo $user_id; ?>">
  <br>

  <div class="form-outline mb-4">
    <strong><label class="form-label" for="form2Example1">Student Number</label></strong>
    <input type="text" name="new_stdnum" id="form2Example1" class="form-control" value="<?php echo $studentNumber; ?>" />
    
  </div>


  <div class="form-outline mb-4">
    <strong><label class="form-label" for="form2Example2">Email</label></strong>
    <input type="email" name="new_email" id="form2Example2" class="form-control" value="<?php echo $email; ?>" />
    
  </div>


  <div class="form-outline mb-4">
    <strong><label class="form-label" for="form2Example2">Password</label></strong>
    <input type="password" name="new_pass" id="form2Example2" class="form-control" value="<?php echo $pass; ?>" />
    
  </div>




 <div class="col d-flex justify-content-center">
  <button type="cancel" class="btn btn-primary btn-block mb-4" value="update">Cancel</button> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <button type="submit" class="btn btn-primary btn-block mb-4" value="update">Submit</button>
</div>


</form>
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>




<?php

$user_id = $_REQUEST["id"];

include("connect.php");

$get_record = mysqli_query($conn, "SELECT * FROM student_info WHERE id='$user_id'");

while($row_edit = mysqli_fetch_assoc($get_record)) {
  
    $studentNumber = $row_edit["studentNumber"];
    $firstName = $row_edit["firstName"];
    $lastName = $row_edit["lastName"];
    $middleName = $row_edit["middleName"];
    $suffix = $row_edit["suffix"];
    $gender = $row_edit["gender"];
    $birthdate = $row_edit["birthdate"];
    $contact = $row_edit["studentContact"];
    $email = $row_edit["email"];
}

?>



<form method="POST" action="update_studentInfo.php" style="border: solid 1px; width: 40%; padding: 20px; margin-left: 30%; margin-top: 50px; border-radius: 20px;">

  <input type="hidden" name="id" value="<?php echo $user_id; ?>">
  <br>

  <div class="form-outline mb-4">
    <strong><label class="form-label" for="form2Example1">Student Number:</label></strong>
    <input type="text" name="new_stdnum" id="form2Example1" class="form-control" value="<?php echo $studentNumber; ?>" />
  </div>


  <div class="form-outline mb-4">
    <strong><label class="form-label" for="form2Example2">First Name</label></strong>
    <input type="text" name="new_fname" id="form2Example2" class="form-control" value="<?php echo $firstName; ?>" />
  </div>


  <div class="form-outline mb-4">
    <strong><label class="form-label" for="form2Example2">Last Name</label></strong>
    <input type="text" name="new_lname" id="form2Example2" class="form-control" value="<?php echo $lastName; ?>" />
  </div>

  <div class="form-outline mb-4">
    <strong><label class="form-label" for="form2Example2">Middle Name</label></strong>
    <input type="text" name="new_mname" id="form2Example2" class="form-control" value="<?php echo $middleName; ?>" />
  </div>

  <div class="form-outline mb-4">
    <strong><label class="form-label" for="form2Example2">Suffix</label></strong>
    <input type="text" name="new_suffix" id="form2Example2" class="form-control" value="<?php echo $suffix; ?>" />
  </div>

  <div class="form-outline mb-4">
    <strong><label class="form-label" for="form2Example2">Gender</label></strong>
    <input type="text" name="new_gender" id="form2Example2" class="form-control" value="<?php echo $gender; ?>" />
  </div>

  <div class="form-outline mb-4">
    <strong><label class="form-label" for="form2Example2">Birthdate</label></strong>
    <input type="date" name="new_bdate" id="form2Example2" class="form-control" value="<?php echo $birthdate; ?>" />
  </div>

  <div class="form-outline mb-4">
    <strong><label class="form-label" for="form2Example2">Student Contact</label></strong>
    <input type="number" name="new_con" id="form2Example2" class="form-control" value="<?php echo $studentContact; ?>" />
  </div>

  <div class="form-outline mb-4">
    <strong><label class="form-label" for="form2Example2">Email</label></strong>
    <input type="email" name="new_email" id="form2Example2" class="form-control" value="<?php echo $email; ?>" />
  </div>




 <div class="col d-flex justify-content-center">
  <button type="cancel" class="btn btn-primary btn-block mb-4" value="update">Cancel</button> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <button type="submit" class="btn btn-primary btn-block mb-4" value="update">Submit</button>
</div>


</form>
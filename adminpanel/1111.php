<?php
    $studentNumber = $firstName = $middleName = $lastName = "";
    $stdnumErr = $fnameErr = $mnameErr = $lnameErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["studentNumber"])){
            $stdnumErr = "Student number is required!";
        } else{
            $studentNumber = $_POST["studentNumber"];
        }

        if(empty($_POST["firstName"])){
            $fnameErr = "First name is required!";
        } else{
            $firstName = $_POST["firstName"];
        }

        if(empty($_POST["middleName"])){
            $mnamelErr = "Middle name is required!";
        } else{
            $middleName = $_POST["middleName"];
        }

        if(empty($_POST["lastName"])){
            $lnameErr = "Last name is required!";
        } else{
            $lastName = $_POST["lastName"];
        }
?>             









              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="form3Example1" name="firstName" value="<?php echo $firstName; ?>">First name:</label>
                    <input type="text" id="form3Example1" class="form-control" />
                    <span class="form-text"><?php echo $fnameErr; ?></span>
                  </div>
                </div>

                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="form3Example2" name="middleName" value="<?php echo $middleName; ?>">Middle name:</label>
                    <input type="text" id="form3Example2" class="form-control" />
                    <span class="form-text"><?php echo $mnameErr; ?></span>
                  </div>    
                </div>

                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="form3Example3" name="lastName" value="<?php echo $lastName; ?>">Last name:</label>
                    <input type="text" id="form3Example3" class="form-control" />
                    <span class="form-text"><?php echo $lnameErr; ?></span>
                  </div>
                </div>
              </div>






<table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Student number</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Middle Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Suffix</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Birth Date</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Email</th>  
                      </tr>
                    </thead>

                    <tbody>

                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>

                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>

                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>

                    </tbody>
              </table>
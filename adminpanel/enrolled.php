<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Website</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="adminpanel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        table{
            height: 100%;
        }
    </style>

</head>

<?php 
    
include('admin-nav.php');  

include("connect.php");

    $studentNumber = "";
    $stdnumErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["studentNumber"])){
            $stdnumErr = "Student number is required!";
        } else{
            $studentNumber = $_POST["studentNumber"];
        }
    }

?>


<section class="content">
    <div class="left-panel">
        <ul>
            <h4>Admin Panel</h4>
            <li><a href="adminpanel.php">Home</a></li>
            <li><a href="enrolled.php" style="color: green;"><strong>Enrolled</strong></a></li>
            <li><a href="studentInfo.php">Student Info</a></li>
            <li><a href="studentUser.php">Student User</a></li>
            <li><a href="includes/logout.php">Log Out</a></li>
        </ul>
    </div>



<!--START OF (FORM) INSERTING STUDENT NUMBER FORM IN DATABASE-->
    <div class="right-panel" >
            <form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
              <div class="mb-3">
                <label class="form-label">Student Number:</label>
                <input type="text" class="form-control" name="studentNumber" value="<?php echo $studentNumber; ?>">
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                          <?php echo $stdnumErr; ?>
                        </span>
                    </div>
              </div>

            <button type="submit" class="btn btn-primary">Insert Student Number</button>

            </form><br><br>
<!--END OF (FORM) INSERTING STUDENT NUMBER IN DATABASE-->


<!--START OF DISPLAYING DATA FROM DB-->
<?php

include('connect.php');
    if($studentNumber) {
        $query = mysqli_query($conn, "INSERT INTO enrolled(student_number) VALUES('$studentNumber') ");

        echo "<script language='javascript'>alert('New record has been inserted!')</script>";
        echo "<script>window.location.href='enrolled.php';</script>";
    } 

    $view_enrolled = mysqli_query($conn, "SELECT * FROM enrolled");
    echo "<table class='table table-bordered'>";;
    echo "<tr>
            <th>ID</th>
            <th>Student Number</th>
            <th>Reg Code</th>
            <th>Date</th>

            <th>Action</th>";
    while($row = mysqli_fetch_assoc($view_enrolled)) {

        $user_id = $row['id'];
        $studentNumber = $row['student_number'];
        $rcode = $row['reg_code'];
        $date = $row['date'];

        echo "<tr>
                <td>$user_id</td>
                <td>$studentNumber</td>
                <td>$rcode</td>
                <td>$date</td>
                <td>
                    <a href='confirmdel_enrolled.php?id=$user_id'><span class='glyphicon glyphicon-trash'></span></a> 
                    &nbsp &nbsp 
                    <a href='edit_enrolled.php?id=$user_id'><span class='glyphicon glyphicon-edit'></span></a>
                </td>";

    }

    echo "</table>";

?>
<!--END OF DISPLAYING DATA FROM DB-->
            



            </div>
        </div>
    </div> 

</section>



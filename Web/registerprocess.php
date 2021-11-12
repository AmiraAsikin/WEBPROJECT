<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <style>
      
        .container{
        background: #ADC2A9;
        padding-left:35%;
        padding-right:30%;
        padding-top:20px;
        padding-bottom:21%;

      }

      h3{
          
          font-size:25px;
          padding-top:10%;

        }

        label{
          font-size:20px;
        }


        button{
          background-color: #79B4B7;
          border-radius: 10px;
          margin-top: 5px;
          padding: 5px 15px 5px 15px;
          color: black;
          font-size: 15px;
          font-weight: bold;
        }

    </style>
  </head>  

<?php session_start();
 include 'db_con.php';

$user=$_SESSION['email'];

$sql = "SELECT * FROM user where emailaddress = '$user'";
$result = $conn->query($sql);

     //check if records were returned
  if ($result->num_rows > 0) {
      
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
       $email=$row["emailaddress"];
      ?>
      
  <body>
<header>
<div class="wrapper">
		<?php include "banner.php"; ?> <!-- Banner -->
</header>
  
      
      <!-- main content -->
      <div class="main-content">
        <div class="container">
          <!-- register area -->
          <div class="register-area">
            <!-- heading -->
           
            <form role="form" id="register-form" action="registersubmit.php" method='post'>
            <h3>IT Training Registration </h3> <br>
              <div class="form-group">
                <label for="email">Email Address : </label>
                <label><?php echo $row["emailaddress"]?></label>
              </div> <br>
              <div class="form-group">
                <label for="fname">Full Name : </label>
                <label><?php echo $row["fullname"]?></label>
              </div> <br>
              <div class="form-group">
                <label for="phoneno">Phone Number: </label>
                <label><?php echo $row["phoneno"]?></label>
              </div> <br>

<?php
    }//close while loop
  }//close if loop
  else{
    echo'<font color=red>No record found';
  }
?>

              <div class="form-group">
                <label for="training">Training ID : </label>
                <select name="training" required>
                        <option value="Select Option">Select Option</option>
                        <option value="1">Computer Networking</option>
                        <option value="2">Management Information System</option>
                        <option value="3">Operating System</option>
                        <option value="4">Mobile Application</option>
                        <option value="5">Database Fundamental</option>
                        <option value="6">Web Application Development</option>
                    </select>
              </div> <br>
              <button type="submit" class="btn btn-warning">Submit</button>&nbsp; 
              <button type="reset" class="btn btn-default">Reset</button>
            </form>
          </div>
        </div>
      </div>
  </body>
</html>



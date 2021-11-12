<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <style>
    

      .container{
        background: #ADC2A9;
        padding-left:30%;
        padding-right:30%;
        padding-top:20px;
        padding-bottom:20%;
      }

      table {
            border-collapse: collapse;
            width: 130%;
            
        }
      table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: center;
            font-size:20px;

        }

        th{
          background-color: #986D8E;
        }


        td {
            padding: 10px;
            text-align: center;
            background-color: #F0D9FF;
        }

        h3{
          
          font-size:25px;
          padding-top:10%;

        }

        label{
          font-size:20px;
        }
    </style>

  <body>
    <header>
    <div class="wrapper">
      <!-- navigation bar -->  
    <?php include "banner.php"; ?> 
    </header>
    

<?php 
session_start();
include 'db_con.php';

$user=$_SESSION['email'];

$sql = "SELECT * FROM  user u WHERE u.emailaddress= '$user'";
//$sql = "SELECT * FROM register r, user u, course c WHERE r.emailaddress = u.emailaddress AND c.trainingname = r.trainingname AND u.emailaddress = '$user'";

$result = $conn->query($sql);

     //check if records were returned
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
        $email=$row["emailaddress"];
        $fname=$row["fullname"];
        $phoneno=$row["phoneno"];
          
        }//close while loop
    }//close if loop
    else{
    echo'<font color=red>No record found';
    }
?>
     <!-- main content -->
      <div class="main-content">
        <div class="container">
          <!-- register area -->
          <div class="register-area">
            <!-- heading -->
            
            <form role="form" id="register-form" >
            <h3>IT Training Course Registration Slip</h3> <br>
              <div class="form-group">
                <label for="email">Email Address : </label>
                <label><?php echo $email?></label>
              </div> <br>
              <div class="form-group">
                <label for="fname">Full Name : </label>
                <label><?php echo $fname?></label>
              </div> <br>
              <div class="form-group">
                <label for="phoneno">Phone Number : </label>
                <label><?php echo $phoneno?></label>
              </div> <br>
                <table class="form-group">
                <tr>
                    <th>Training Name</th>
                    <th>Training Date</th>
                    <th>Duration</th>
                    <th>Registeration Date</th>
                </tr>
    
              
    <?php 
   

    $sql2 = "SELECT * FROM register r, course c WHERE r.courseid = c.courseid AND r.emailaddress = '$user'"; 
    //$sql2 = "SELECT * FROM register r, course c WHERE c.trainingname = r.trainingname AND r.emailaddress= '$email'"; 
    
    $result2 = $conn->query($sql2);
     //check if records were returned
    if ($result2->num_rows > 0) {
    // output data of each row
        while($row = $result2->fetch_assoc()) {

        $trainingname=$row["trainingname"];
        $traindate=$row["trainingdate"];
        $duration=$row["trainingduration"];
        $regdate=$row["registerdate"];
    ?>
          <tr>
                     <td><?php echo $trainingname?></td>
                    <td><?php echo $traindate?></td>
                    <td><?php echo $duration?></td> 
                    <td><?php echo $regdate?></td> 
                 </tr>  

<?php
        }//close while loop
    }//close if loop
    else{
    echo'<font color=red>No record found';
    }
?>
                </table>
              </form>
            </div>
        </div>
      </div>
     
 
  </body>
</html>



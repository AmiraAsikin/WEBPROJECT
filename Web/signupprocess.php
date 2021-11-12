<?php
 include 'db_con.php';
  //get input values from form
     extract($_POST);
     $sql = "INSERT INTO user (emailaddress, password, fullname, phoneno) 
     VALUES ('$email', '$password', '$fname','$phoneno')";

      //execute query
      if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
            echo "<script type='text/javascript'>alert('New record created successfully!');
    document.location='login.html'</script>";
      } 
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      //close connection
      $conn->close();
  ?> 

`Email Address`, `Password`, `Full Name`, `User ID`, `Phone Number

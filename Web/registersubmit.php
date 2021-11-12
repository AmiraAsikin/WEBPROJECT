<?php
    session_start();

    include 'db_con.php';
    extract($_POST);

    $user=$_SESSION['email'];

    $sql = "SELECT * FROM user where emailaddress = '$user'";
    $result = $conn->query($sql);

     //check if records were returned
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
        $email=$row["emailaddress"];
        }
    }

    $date=date("Y/m/d");
   $sql = "INSERT INTO register (emailaddress, courseid, registerdate) VALUES ( '$email','$training','$date')";
   
    //execute query
    if(mysqli_query($conn,$sql)){

        echo "<script type='text/javascript'>alert('You have succesfully register for IT Training Courses.');
        document.location='slipregister.php'</script>";
           

    }else{
     if(mysqli_errno($conn) == 1062)
     echo "<script type='text/javascript'>alert('You have already register for IT Training Courses');
     document.location='registerprocess.php'</script>";
     else
     echo "<script type='text/javascript'>alert('Database insertion error:'.$sql.'<br>');
     document.location='registerprocess.php'</script>";
      
    }//else end

    $conn->close();
?>

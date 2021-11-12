<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "training";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  
  //escape special characters in a string
  $fname=mysqli_real_escape_string($conn, $_POST['fname']);

  //create and execute query
  //$sql = "SELECT * FROM user, register, course WHERE fullname= '".$fname."'";

  $sql = "SELECT * FROM  user INNER JOIN register ON register.emailaddress = user.emailaddress INNER JOIN 
  course ON course.courseid = register.courseid WHERE fullname= '".$fname."' ";

  

  $result = $conn->query($sql);

  //check if records were returned
  if ($result->num_rows > 0) {

     //create a table to display the record
     echo '<h1>IT <span>Training</span> Courses';
     echo '<h2>Selected record as the following:</h2> <br><br>';
     echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
     echo '<tr>
     <th align="center"><b>ID</b></td>
     <th align="center"><b>Email Address</b></td>
     <th align="center"><b>Full Name</b></td>
     <th align="center"><b>Phone Number</b></td>
     <th align="center"><b>Course ID</b></td>
     <th align="center"><b>Training Name</b></td>
     <th align="center"><b>Training Date</b></td>
     <th align="center"><b>Training Duration</b></td>
     <th align="center"><b>Registration Date</b></td>
     </tr>';
     
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td align="center">'.$row["Id"].'</td>';
        echo '<td align="center">'.$row["emailaddress"].'</td>';
        echo '<td align="center">'.$row["fullname"].'</td>';
        echo '<td align="center">'.$row["phoneno"].'</td>';
        echo '<td align="center">'.$row["courseid"].'</td>';
        echo '<td align="center">'.$row["trainingname"].'</td>';
        echo '<td align="center">'.$row["trainingdate"].'</td>';
        echo '<td align="center">'.$row["trainingduration"].'</td>';
        echo '<td align="center">'.$row["registerdate"].'</td>';
        //echo "<td align='center'><a href='updaterecord.php?pid=$row[Id]'> UPDATE </a>   
        //</td>";
        echo '</tr>';
     }
     echo '</table></p>';
  } 
  else {
    echo '<font color=red>No record found';
  }

 //close connection 
 $conn->close();
 echo '<p class=button><a href="adminmenu.php">Back to Main Menu</a></p>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
        background-color: #F0D9FF;
    }
     table {
            border-collapse: collapse;
            width: 95%;
            
        }
      table,
        td,
        th {
            border: 1px solid black;
            text-align: center;
            font-size:18px;

        }

        th{
          background-color: #ADC2A9;
        }

        td {
            padding: 10px;
            text-align: center;
            background-color: #FFF9B6;
        }

        h2{
          font-size: 25px;
          text-align:center;
        }

        h1{
          font-size: 40px;
          font-weight: 800;
          text-align:center;
          padding-top: 20px; 
          font-family: Georgia, 'Times New Roman', Times, serif ;
          color: #364f6b;
        }
        span{
          color: chocolate;
        }

        .button a{
          background-color: #FFE699;
          width: 10%;
          padding: 5px 5px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid black;
          box-sizing: border-box;
          background-color: #87AAAA;
          font-size: 15px;
          text-decoration:none;
          color: black;
          font-weight: 400;
          text-align:center;
        }

  </style>
</head>
<body>
  
</body>
</html>

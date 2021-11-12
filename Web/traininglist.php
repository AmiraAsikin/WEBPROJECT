<html>
<head>
  <title>IT Training Courses</title>
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

        a{
          background-color: #FFE699;
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid black;
          box-sizing: border-box;
          background-color: #87AAAA;
          font-size: 15px;
          text-decoration:none;
          color: black;
          font-weight: 400;
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

        h2{
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
  </style>
 
</head>


<body>

<h2>IT <span>Training</span> Courses</h2>

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

  //create and execute query
  $sql = "SELECT * FROM  user INNER JOIN register ON register.emailaddress = user.emailaddress INNER JOIN 
  course ON course.courseid = register.courseid";

  $result = $conn->query($sql);

  //check if records were returned
  if ($result->num_rows > 0) {

     //create a table to display the record
     echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
     echo '<th align="center"><b>ID</b></td>
     <th align="center"><b>Email Address</b></td>
     <th align="center"><b>Full Name</b></td>
     <th align="center"><b>Phone Number</b></td>
     <th align="center"><b>Course ID</b></td>
     <th align="center"><b>Training Name</b></td>
     <th align="center"><b>Training Date</b></td>
     <th align="center"><b>Training Duration</b></td>
     <th align="center"><b>Registration Date</b></td>
     <th align="center"><b>Delete Operation</b></td>
     <th align="center"><b>Update Operation</b></td>
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
        ?>
        <td><a href="deleterecord.php?ID=<?php echo $row["Id"];?> " onclick="return confirm('Are you sure to delete data?') ">DELETE</a></td>
        <?php
        echo '<td> <a href="editrecord.php?ID='.$row["Id"].'">UPDATE</a></td>';
        echo '</tr>';
     }
  } 

  else {
    echo "no results ";  //if no record found in the database
  }

  //close connection 
  $conn->close();
  echo '<p class=button> <a href="adminmenu.php">Back to Main Menu</a></p>';
?>

</body>
</html>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration Slip</title>
    <style>
      .container{
        background: #ADC2A9;
        padding-left:35%;
        padding-right:30%;
        padding-top:30px;
        padding-bottom:20%;
      }

      table {
            border-collapse: collapse;
            width: 130%;
            
          
        }
      table,
        td,
        th {
            border: 1px solid black;
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
          text-align: center;

        }

        label{
          font-size:20px;
        }

        .btnbtn-warning{
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
  <body>
    <header>
      <!-- navigation bar -->  
    <?php include "banner.php"; ?> 
    </header>
       
    <?php session_start();
    include 'db_con.php';

    $user=$_SESSION['email'];

    $sql = "SELECT * FROM  register r, user u, course c WHERE  r.emailaddress= u.emailaddress AND c.courseid = r.courseid AND r.emailaddress = '$user'";

    $result = $conn->query($sql);

     //check if records were returned
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $email=$row["emailaddress"];
        $fname=$row["fullname"];
        $phoneno=$row["phoneno"];
        $trainingname=$row["trainingname"];
        $traindate=$row["trainingdate"];
        $duration=$row["trainingduration"];
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
            <h3>IT Training Course Registration Slip</h3> <br>
            <form role="form" id="register-form">
            <table align="center" border="1">
              <tr>
                  <th width="104">Email Address</td>
                  <td width="350"><?php echo $email?></td>
              </tr>

              <tr>
                  <th width="104">Full Name</td>
                  <td width="350"><?php echo $fname?></td>
              </tr>

              <tr>
                  <th width="104">Phone Number</td>
                  <td width="350"><?php echo $phoneno?></td>
              </tr>

              <tr>
                  <th width="104">Training Name</td>
                  <td width="350"><?php echo $trainingname?></td>
              </tr> 

              <tr>
                  <th width="104">Training Date</td>
                  <td width="350"><?php echo $traindate?></td>
              </tr>

              <tr>
                  <th width="104">Training Duration</td>
                  <td width="350"><?php echo $duration?></td>
              </tr>
              <tr>
                  <th width="104">&nbsp&nbsp</td>
                  <td width="350"><button type="submit" class="btnbtn-warning" onclick="window.print()">Print Registration Slip</button></td>
              </tr>
              </table>
          </div>
        </div>
      </div>
          
 
  </body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "training";
   
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }

$id=$_REQUEST['ID'];
//$query = "SELECT * FROM register r , user u , course c where Id ='".$id."'"; 
$query = "SELECT * FROM  user INNER JOIN register ON register.emailaddress = user.emailaddress INNER JOIN 
course ON course.courseid = register.courseid where Id='".$id."' ";

$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>

<style>
    form{
        padding-left: 500px;
        padding-right: 500px; 
        padding-top: 10px; 
    }

    h1{
        text-align:center;
        padding-top: 1px; 
        font-size: 40px;
    }

    body{
        background-color: #F0D9FF;
    }
    
    input{
        
            width: 100%;
            padding: 10px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid black;
            box-sizing: border-box;
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

    input[type=submit]{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid black;
      box-sizing: border-box;
      background-color: #4CAF50;
      font-size: 15px;
      font-weight: 400;
      font-family: Georgia, 'Times New Roman', Times, serif ;
    }

    input[type=button]{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid black;
      box-sizing: border-box;
      background-color: #4CAF50;
      font-size: 15px;
      font-weight: 400;
      font-family: Georgia, 'Times New Roman', Times, serif ;
    }


    

</style>
</head>
<body>
<div class="form">

<h2>IT <span>Training</span> Courses</h2>
<h1>Update Record</h1>

<div>
<form name="form" method="post" action="updaterecord.php"> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['Id'];?>" />
<p><input type="text" name="email" value="<?php echo $row['emailaddress'];?>" /></p>
<p><input type="text" name="fname" value="<?php echo $row['fullname'];?>" /></p>
<p><input type="text" name="phoneno" value="<?php echo $row['phoneno'];?>" /></p>
<p><input type="text" name="courseid" value="<?php echo $row['courseid'];?>" /></p> 
<p><input type="text" name="trainingname" value="<?php echo $row['trainingname'];?>" /></p>
<!-- <p><input type="text" name="trainingdate" value="<?php echo $row['trainingdate'];?>" /></p>
<p><input type="text" name="trainingduration" value="<?php echo $row['trainingduration'];?>" /></p>
<p><input type="text" name="registerdate" value="<?php echo $row['registerdate'];?>" /></p> -->
<p><input name="submit" type="submit" value="Update" /></p>
<input type="button" value="Back" onClick="history.back()">
</form>

</div>
</div>
</body>
</html>
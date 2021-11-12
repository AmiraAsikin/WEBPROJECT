<html>
<head>
  <title>IT Training Courses</title>
  <style>
    form{
            padding-left: 520px;
            padding-right: 500px; 
            padding-top: 5px; 
    }


    body{
        background-color: #F0D9FF;
    }

    input{
        
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid black;
        box-sizing: border-box;
    }

    
    h2{
        font-size: 40px;
        font-weight: 800;
        text-align:center;
        padding-top: 150px; 
        font-family: Georgia, 'Times New Roman', Times, serif ;
        color: #364f6b;
    }

    span{
        color: chocolate;
    }

    p{
      text-align:center;
      font-size: 18px;
      font-weight: bold;
      font-family: Georgia, 'Times New Roman', Times, serif ;
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

    p a{
      background-color: #4CAF50;
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid black;
      box-sizing: border-box;
      background-color: #4CAF50;
      font-size: 15px;
      text-decoration:none;
      color: black;
      font-weight: 400;
    }
    
  </style>
</head>

<body>

  <h2>IT <span>Training</span> Courses</h2>
  
  <form action="displayrecord.php" method="post">

     <p>Full Name: <input name="fname" type="text" size="40"><br></p> 
     <input type="submit" name="Submit" value="Search">
     <p><a href="adminmenu.php">Back to Main Menu</a></p>

  </form>

</body>
</html>
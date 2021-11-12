<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body, html {
           height: 100%;
           margin: 0;
           
           
        }
        
        h1{
            color: white;
            font-size:50px;
        }

        input{
            background-color: #02d1ae;
            color: Black;
            padding: 14px 20px;
            margin: 0px 0;
            border: none;
            cursor: pointer;
            width: 50%;
            font-size: 18px;
            font-weight: bold;
            font-family: Georgia, 'Times New Roman', Times, serif ;
            
        }

        h2{
            color:white;
            font-size: 30px;
            text-align:center;
            padding-top: 20px;
        }

        p2{
            font-size: 20px; 
            color:black;
            font-weight: bold;
        }

       

    </style>
 
</head>

<body>
    <header>
      <!-- navigation bar -->  
    <?php include "banneradmin.php"; ?> 
    </header>
     
    <br><br>
    <br><br>
    <br><br>
    
    <div class="wrapper">
        <!-- menu -->
        <section>
            <img src="photo/learning.jpg" alt="Learning" style="padding-top: 20px;">
            <div class="column">
                <div class="column-desc">
                    <h1>Welcome To Admin Page</h1>
                    <!-- <p2>Lorem ipsum dolor,sit amet consectetur adipisicing elit.</p2> -->

                    <form action="traininglist.php" method="post">
                        <p><input type="submit" value="View Record" name="cmdView"></p>
                    </form> <br>

                    <form action="searchrecord.php" method="post">
                        <p><input type="submit" value="Search Record" name="cmdSearch"></p>
                    </form>

                </div>
            </div>
        </section>
    </div>
    
    <!-- footer -->
    <footer>
        <div class="container" style="background-color: rgb(233, 233, 233); padding-top: 20px;">
            <p class="copy-right" style="color: rgb(0, 0, 0);">
                Copyrigh & copy @ 2021| IT Training Courses | All rights reserved.
            </p>
            <br>
        </div>
    </footer>

    </body>

</html> 

   


   
    
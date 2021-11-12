<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>IT Training Courses</title>
	</head>
    <style>
    .banner_pad{
        background-color: white;

    }

    .banner_pad span{
        color:#364f6b;
    }

    h1{
        padding-top: 100px;
        text-align:center;
    }

    p{
        text-align:center;
    }

    .session{
        text-align:center;
    }

    </style>

	
	<body>
	
		<div class="wrapper">
            <header>
            <?php include "banner.php"; ?> <!-- Banner -->
            </header>

            <br><br>
            <br><br>
            <br><br>
            <br><br>
		
			<!-- main content -->
			<div class="main-content bottom-0">
				<div class="container">
					<div class="banner_pad">
						<h1><span>IT TRAINING COURSES </span></h1>
						<p><strong>You can check your IT Training Courses information here.</strong></p>
					</div>
				</div>
                <div class="session">
                    <?php

                    session_start();
                    if(empty($_SESSION['email'])):
                        header('Location:login.html');
                    endif;

                    $servername="localhost"; // Host name
                    $username="root"; // Mysql username
                    $password=""; // Mysql password
                    $dbName="training"; // Database name

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbName);

                    session_destroy();

                    echo '<meta http-equiv="refresh" content="2;url=login.html">';
                    echo '<progress max=100><strong>Progress: 60% done.</strong></progress><br>';
                    echo '<span class="itext">Logging out please wait!....</span>';
                    ?>
                </div>
</body>
</html>


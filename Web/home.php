<?php 

session_start();

if(empty($_SESSION['email'])):
   header('Location:login.html');
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Training Courses</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /**team*/
        .team-list {
            width: 100%;
            position: relative;
            display: flex;
            flex-wrap: wrap;
        }

        .teams {
            width: 20%;
            margin: 0;
            padding-left: 150px;
        }

        .teams  a img {
            width: 100%;
            border-radius: 0;
            height: 250px;
            filter: grayscale(100%);
            transition: 0.4s all;

        }
        
        .teams a:hover > img{
            filter:none;
        }

        .teams p{
            font-size: 20px;
        }

        /**benefit*/
        .benefit-list {
            width: 100%;
            position: relative;
            display: flex;
            flex-wrap: wrap;
        }

        .benefit {
            width: 20%;
            margin: 0;
            padding-left: 150px;
        }

        .benefit  a img {
            width: 100%;
            border-radius: 0;
            height: 250px;
            /* filter: grayscale(100%);
            transition: 0.4s all; */

        }
        

        .benefit p{
            font-size: 20px;
        }

        /**training*/
        .training-list {
            width: 100%;
            position: relative;
            display: flex;
            flex-wrap: wrap;
        }

        .training {
            width: 20%;
            margin: 0;
            padding-left: 150px;
        }

        .training a img {
            width: 100%;
            border-radius: 0;
            height: 250px;
            /* filter: grayscale(100%);
            transition: 0.4s all; */

        }


        .training p {
            font-size: 20px;
            color: #105652 ;
        }





    </style>
</head>

<body>
<!-- Banner -->    
<?php include "banner.php"; ?> 

    <div class="wrapper">
        <!-- home -->
        <section id="home">
            <img src="photo/onlineeducation.jpg" alt="OnlineEducation" style="padding-left: 5px;">
            <div class="column">
                <div class="column-desc">
                    <h1>Welcome To IT Training <br> Course</h1>
                    <h2>Let's Learn Something New !</h2> <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam totam labore maxime sed nobis?
                        Maxime veniam aliquid possimus magnam! Doloribus error non, voluptates facere quae labore ut hic
                        eos quibusdam!</p>
                    <br>
                    <p><a href="" class="buttonpink">Join Us Now</a></p>
                </div>
            </div>
    </div>

    <div class="centered">
        <h1 class="description">Our Benefits</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus </p>
    </div>
    <br><br>

    <div class="benefit-list">
        <div class="benefit">
            <p>Training</p> <br>
            <a href="#"><img src="photo/learn1.jpg" alt="Picture 1"></a> <br>
            
        </div>
        <div class="benefit">
            <p>New Learn</p> <br>
            <a href="#"><img src="photo/learn2.jpg" alt="Picture 2"></a> <br>
            
        </div>
        <div class="benefit">
            <p>Certification</p>
            <a href="#"><img src="photo/learn3.jpg" alt="Picture 3"></a> <br>
            
        </div>

    </div>
    
    <br><br>

    <div class="centered">
        <h1 class="description">Our Top Team</h1>
        <h2>Team</h2> <br>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus </p>
    </div>
    <br><br>

    <div class="team-list">
        <div class="teams">
            <a href="#"><img src="photo/people2.jpg" alt="People1"></a> <br>
            <p>Micheal Kim</p>
        </div>
        <div class="teams">
            <a href="#"><img src="photo/people1.jpg" alt="People1"></a> <br>
            <p>James Smitch</p>
        </div>
        <div class="teams">
            <a href="#"><img src="photo/people3.jpg" alt="People1"></a> <br>
            <p>John Raden</p>
        </div>

    </div>
    </section>

    <br><br>

    <div class="wrapper">
        <!-- About -->
        <section id="about">
            <div class="column">
                <div class="column-desc">
                    <h1>About Us</h1>
                    <h2>Why You Need To Choose us?</h2> <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam totam labore maxime sed nobis?
                        Maxime veniam aliquid possimus magnam! Doloribus error non, voluptates facere quae labore ut hic
                        eos quibusdam!</p>
                    <br>
                    <p><a href="" class="buttonblue">Read More</a></p>
                </div>
            </div>
            <img src="photo/aboutus.jpg" alt="About">
            </div>
    <div class="centered">
        <h1>Location & Contact</h1>
        <p>Email: hcbmail@itu.int <br>
            Mailing address: <br>
            Capacity and Digital Skills Development Division <br>
            International Telecommunication Union <br>
            Place des Nations <br>
            1211 Geneva 20 <br>
            Switzerland</p>
    </div>
    </section>

    <br><br>
    <div class="wrapper">
        <!-- Training -->
        <section id="training">
            <div class="column">
                <div class="column-desc">
                    <h1>Our Popular Training</h1>
                    <h2>Join Us Now!</h2> <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam totam labore maxime sed nobis?
                        Maxime veniam aliquid possimus magnam! Doloribus error non, voluptates facere quae labore ut hic
                        eos quibusdam!</p>
                </div>
            </div>
    </div>
    <div class="centered">
        <div class="training-list">
            <div class="training">
                <p style="border: 3px solid black; padding-top: 10px; padding-bottom: 10px;" >Computer Networking</p> <br>
                <a href="#"><img src="photo/learn4.jpg" alt="Picture Learn 4"></a> <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus</p> <br>
                <p><a href="" class="buttonblue">Read More</a></p>
            </div>
            <div class="training">
                <p style="border: 3px solid black; padding-top: 10px; padding-bottom: 10px;" >Management Information System</p> <br>
                <a href="#"><img src="photo/learn5.jpg" alt="Picture Learn 5"></a> <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus</p> <br>
                <p><a href="" class="buttonblue">Read More</a></p>
            </div>
            <div class="training">
                <p style="border: 3px solid black; padding-top: 10px; padding-bottom: 10px;" >Operating System</p> <br>
                <a href="#"><img src="photo/learn6.jpg" alt="Picture Learn 6"></a> <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus</p><br>
                <p><a href="" class="buttonblue">Read More</a></p>
        
            </div>
        </div>

        <br><br>

        <div class="training-list">
            <div class="training">
                <p style="border: 3px solid black; padding-top: 10px; padding-bottom: 10px;"  >Mobile Application</p> <br>
                <a href="#"><img src="photo/learn7.jpg" alt="Picture 1"></a> <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus</p> <br>
                <p><a href="" class="buttonblue">Read More</a></p>
            </div>
            <div class="training">
                <p style="border: 3px solid black; padding-top: 10px; padding-bottom: 10px;" >Database Fundamental</p> <br>
                <a href="#"><img src="photo/learn8.jpg" alt="Picture 2"></a> <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus</p> <br>
                <p><a href="" class="buttonblue">Read More</a></p>
            </div>
            <div class="training">
                <p style="border: 3px solid black; padding-top: 10px; padding-bottom: 10px;" >Web Application Development</p> <br>
                <a href="#"><img src="photo/learn9.jpg" alt="Picture 3"></a> <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus</p> <br>
                <p><a href="" class="buttonblue">Read More</a></p>
            </div>
        </div>
    </div>
    </section>
    <br><br>
    <br><br>

    <div class="wrapper">
        <!-- FAQ -->
        <section id="faq">
            <img src="photo/FAQS.jpg" alt="FAQ" width="40%" height="40%" style="padding-top:50px">
            <div class="column">
                <h2>What is Training Course?</h2><br>
                <p style="border: 2px solid #105652; padding-left: 10px; padding-top: 10px; 
                padding-bottom: 10px; background-color: #d2f11f; padding-right: 10px;  border-radius: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p><br>

                <h2>How Can I Join It?</h2><br>
                <p style="border: 2px solid #105652; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; 
                background-color: #05a39b; padding-right: 10px; border-radius: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p><br>

                <h2>Where Can I ask for help?</h2><br>
                <p style="border: 2px solid #105652; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; 
                background-color: #e636ba;  padding-right: 10px; border-radius: 15px; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p><br>
            </div>
            <br><br>
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
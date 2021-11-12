<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="wrapper">
		<?php include "banner.php"; ?> <!-- Banner -->
    
    <form method="post" action="registersubmit.php" name="regForm">

        <h2 align="center">IT TRAINING COURSES 2021</h2>
        <h3 align="center">Registration Form</h3><br>

        <table align="center" border="1">


            <tr>
                <th width="104">Email Address</td>
                <td width="350"><input type="text" name="email" size="50"></td>
            </tr>

            <tr>
                <th width="104">Full Name</td>
                <td width="350"><input type="text" name="fname" size="50"></td>
            </tr>

            <tr>
                <th width="104">Phone Number</td>
                <td width="350"><input type="text" name="phoneno" size="50"></td>
            </tr>

        
            <tr>
                <th width="104">Training Name</td>
                <td width="350"><select name="trainingname">
                        <option value="Select Option">Select Option</option>
                        <option value="Computer Networking">Computer Networking</option>
                        <option value="Management Information System">Management Information System</option>
                        <option value="Operating System">Operating System</option>
                        <option value="Mobile Application">Mobile Application</option>
                        <option value="Database Fundamental">Database Fundamental</option>
                        <option value="Web Application Development">Web Application Development</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th width="104">Training Date</td>
                <td><input type="Date" class="form-control" name="trainingdate" placeholder="DD-MM-YYYY"></td>
            </tr>

            <tr>
                <th width="104">Duration</td>
                <td width="350"><select name="trainingduration">
                        <option value="Select Option">Select Option</option>
                        <option value="2 Hours">2 Hours</option>
                        <option value="4 Hours">4 Hours</option>
                    </select>
                </td>
            <tr>
                <td>&nbsp</td>
                <td>&nbsp</td>
            </tr>

            <tr>
                <td width="104"><input type="submit" name="submitBtn" value="Submit"></td>
                <td width="350"><input type="reset" name="resetBtn" value="Clear"></td>
            </tr>
        </table>
    </form>

</body>

</html>
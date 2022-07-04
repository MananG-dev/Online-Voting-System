<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Login</title>
    <link rel="stylesheet" href="css/stylesheet.css">

    <style>
        .content    {
            width: 30%;
            padding: 20px;
            float: left;
        }
        .image  {
            float: right;
            padding: 20px;
        }
    </style>
</head>
<body>
    
    <div class="headerSection">
        <h1><b>Welcome to Online Voting Portal</b></h1>
    </div>
    
    <br><br>
    <div class="content">
    <fieldset id="formPart">
        <center><legend id="heading"><h3>Login</h3></legend></center>
        <center>
        <form action="backend/login.php" method="POST">
            <label>Mobile Number: </label>                
            <input type="text" name="mobile" placeholder="Enter Mobile ">
            <br><br>
            <label>Password: </label>
            <input type="password" name="password" placeholder="Enter password">
            <br><br>
            <select name="role">
                <option value="1">Voter</option>
                <option value="2">Group</option>
            </select>
            <br><br>
            <button id="login" type="submit" name="loginbtn">Login</button>
    
            <br><br>
            New User? <a href="path/registration.php">Register here</a>
        </form>
        </center>
    </fieldset>
    </div>

    <div class="image">
        <img src = "resources/Voting-image-6-scaled.jpg" alt="image" height="700px" width="800px">
    </div>


    <!-- <br><br>
    <div class="footer">
        <a href="path/contact.html">Contact us</a>
    </div> -->
</body>
</html>
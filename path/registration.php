<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Register</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
    <div class="headerSection">
        <h1><b>Welcome to Online Voting Portal</b></h1>
    </div>

    <br>
    <div class="content">
    <fieldset id="formPart">
        <center><legend id="heading">Registration</legend></center>
        <hr>
        <center>
        <form action="../backend/register.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Enter Name" required>
                    
            <!-- <input type="text" name="mname" placeholder="Enter Middle Name"> -->
            <!-- <input type="text" name="lname" placeholder="Enter Last Name" required> -->
            <br><br>
            <input type="number" name="mobile" placeholder="Mobile" required><br><br>
            <input type="password" name="password" placeholder="Password" required>&nbsp
            <input type="password" name="cpassword" placeholder="Confirm Password" required><br><br>
            <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
            <div id="upload" style="width: 30%">
                Upload image: <input type="file" id="profile" name="image" required>
            </div><br>
            <div id="upload" style="width: 30%">
                Select your role:
                <select name="role">
                    <option value="1">Voter</option>
                    <option value="2">Group</option>
                </select><br>                   
            </div><br>
            <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
            <hr>
            Already user? <a href="../">Login here</a>
        </form>
        </center>
    </fieldset>
    </div>
</body>
</html>
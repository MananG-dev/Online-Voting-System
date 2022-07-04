<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        header("location: ../");
    }
    $data = $_SESSION['data'];
    $group = $_SESSION['groups'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <style>
        #logout-button, #back-button  {
            padding: 5px;
            font-size:12px;
            background-color: red;
            color: white;
            border-radius:2px;
        }

        .profile   {
            padding: 10px;   
        }

        .group  {
            padding: 10px;   
        }
    </style>
</head>
<body>
    <div class="headerSection">
        <h1><b>Welcome to Online Voting Portal</b></h1>
    </div>
        <br>
    <div id="profile">
        <fieldset>
        <center><img src="../uploads/<?php echo $data['image']?>" height="100" width="100"></center><br>
        <b>Name : </b><?php echo $data['name'] ?><br><br>
        <b>Mobile : </b><?php echo $data['mobile'] ?><br><br>
        <b>Address : </b><?php echo $data['address'] ?><br><br>
        <b>Status : </b><?php echo $status ?>
        <br><br>
                
        <a href="logout.php"><button id="logout-button">Logout</button></a>
        <br><br>
        <a href="../"><button id="back-button"> Back</button></a>        
        </fieldset>
    </div>

    <div class="group">
        <fieldset>
        <center><b>Available Groups</b></center>
        <hr>
        <?php
            if(isset($_SESSION['groups'])) {
                for($i=0; $i<count($group); $i++)   {
                    ?>
                    <div>
                        <img style="float: right" src="../uploads/<?php echo $group[$i]['image'] ?>" height="100" width="100">
                        <b>Name: </b><?php echo $group[$i]['name']?><br><br>
                        <b>No. of Votes: </b><?php echo $group[$i]['votes']?><br><br>
                        <form action="../backend/vote.php"  method="POST">
                            <input type = "hidden" name="gvotes" value="<?php echo $group[$i]['votes'] ?>">
                            <input  type = "hidden" name="gid" value="<?php echo $group[$i]['id'] ?>">
                            <input  type = "submit" name="votebtn" id="votebtn" value="Vote">
                        </form>
                    </div>
                    <hr>
                    <?php
                }
            }
            else    {
                ?>
                <b>No groups available right now.</b>
                <?php
            }
        ?>
        </fieldset>
    </div>
</body>
</html>
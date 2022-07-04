<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "online-voting";

    $conn = mysqli_connect($servername, $username, $password, $db_name);

    if(!$conn)  {
        die("Connection failed due to ".mysqli_connect_error());
    }
    // else    {
    //     echo "Connection established successfully";
    // }
?>
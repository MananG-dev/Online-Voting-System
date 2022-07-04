<?php
    include("connection.php");

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword= $_POST['password'];
    $address = $_POST['address'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    if($password==$cpassword)   {
        move_uploaded_file($tmp_name, "../uploads/$image");
        $sql = "INSERT INTO userinfo (name, mobile, password, address, image, role, status, votes) VALUES ('$name', '$mobile', '$password', '$address', '$image', '$role', 0, 0)";
        $insert = mysqli_query($conn, $sql);

        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../";
                </script>';
        }
    }
    else    {
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../path/registration.php";
            </script>';
    }
?>
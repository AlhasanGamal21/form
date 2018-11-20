<?php
    include 'DB.php';
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $phone=mysqli_real_escape_string($conn,$_POST['Phone']);
    $email=mysqli_real_escape_string($conn,$_POST['e-mail']);
    $sql="INSERT INTO users(Name,Phone,Email) VALUES ('$name','$phone','$email')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);

    ?>
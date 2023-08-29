<?php

    include ("../sqlConnection.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $Hpassword = crypt($password,'slt');
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];

    $target_dir = "../storage/images/";

    $f_tmp = $_FILES['profilePic']['tmp_name'];
    $f_name= $_FILES['profilePic']['name'];

    move_uploaded_file($f_tmp, $target_dir.$f_name);

    $query = " 
        INSERT INTO fanslist VALUES(
            '$username',
            '$Hpassword',
            '$email',
            '$fullName',
            '$gender',
            '$dob',
            '$nationality',
            '$f_name'
    );
";
    
if(mysqli_query($connection, $query)){
    header("location: ../login.php");
}else{
    echo mysqli_error($connection);
}

    mysqli_close($connection);


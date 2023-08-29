<?php
  
    include ("../sqlConnection.php");
    
    $sql = mysqli_query($connection, "SELECT * FROM fanslist WHERE username ='$_GET[username]'");
    $data = mysqli_fetch_array($sql);
   
    
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


    $query = "UPDATE fanslist SET 
        `password`='$Hpassword', 
        email='$email',
        fullName='$fullName'
        gender='$gender',
        dob='$dob',
        nationality='$nationality',
        profilePic='$f_name'
                 
        WHERE username='$_GET[username]'
    ";

    if(mysqli_query($connection, $query)){
        header("location: ../home.php");
    }else{
        echo mysqli_error($connection);
    }
    
        mysqli_close($connection);
    

?>
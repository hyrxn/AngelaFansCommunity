<?php

    include('sqlConnection.php');

    $username = $_GET['username'];

    $query = "SELECT * FROM fanslist WHERE username='$username'";

    $fans = mysqli_query($connection, $query);

    while($fans_details = mysqli_fetch_assoc($fans)){
        $profilePic = $fans_details['profilePic'];
        $fullName = $fans_details['fullName'];
        $email = $fans_details['email'];
        $gender = $fans_details['gender'];
        $dob = $fans_details['dob'];
        $nationality = $fans_details['nationality'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angela Fans Club Community - View Detail</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="theme">
        <h1 class="theme-content">Angela Fans Club Community - View Detail</h1>
    </div>

    <div class="title-box">
        <h2 class>View Detail: <?php echo $username ?></h2>
    </div>
    
    <div class="box">
        <br>
        <div>
            <img src="storage/images/<?php echo $profilePic?>" alt="ProfilePic" height="200px" width="200px" class="picList">
        </div>
        <br><br>
        <table class="detail-box">
            <tr>
                <td>
                    <label for="full-name">Full Name</label>
                </td>
                <td>
                    <?php echo $fullName?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                <?php echo $email?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gender">Gender</label>
                </td>
                <td>
                <?php echo $gender?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dob">Date of Birth</label>
                </td>
                <td>
                    <?php echo $dob?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nationality">Nationality</label>
                </td>
                <td>
                    <?php echo $nationality?>
                </td>
            </tr>
        </table>
        <br>
        <form action="">
             <button type="button" onclick="Back()">Back</button>
        </form>
        
        <br><br>
    </div>

    <script>
        function Back(){
            window.location.replace('home.php')
        }
    </script>

</body>
</html>
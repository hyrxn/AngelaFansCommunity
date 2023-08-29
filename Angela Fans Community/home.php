<?php
include('sqlConnection.php');

session_start();

if($_SESSION['status'] != "login"){
    header("location: login.php");
}

$username = $_SESSION['username'];

$query = "SELECT * FROM fanslist WHERE username = '$username'";
$show = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($show)){
    $username = $row['username'];
    $fullName = $row['fullName'];
    $nationality = $row['nationality'];
    $gender = $row['gender'];
    $profilePic = $row['profilePic'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angela Fans Club Community - Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="theme">
        <h1 class="theme-content">Angela Fans Club Community - Home Page</h1>
    </div>
        <div>
        <img src="storage/images/<?php echo $profilePic ?>" width="100" height="100" alt="Profile Picture">
        </div>
        <div>
            <table>
            <tr>
                <?php
                echo "<td>";
                echo "Welcome, $username";
                echo "</td>";
                ?>
            </tr>
            <tr>
                <td>
                    <!-- <a href="editProfile.php">Edit Profile</a> -->
                    <a href="editProfile.php?username=<?php echo $username?>">Edit Profile</a>
                </td>
            </tr>
            <tr>
                <td><a href="php/logout.php">Logout</a></td>
            </tr>
            </table>
        </div>
    
    <!-- <div>
        INSERT IMAGE FROM DATABASE
    </div>
    <div>
        <label for="greet">Welcome, (Mr/Ms). (Name)</label> <br>
        <a href="editProfile.html">Edit Profile</a> <br>
        <a href="login.html">Logout</a>
    </div> -->
    

    <div class="home-title-box">
        <h2>Angela Fans List</h2>
    </div>

    <div>
        <table width="100%" border="1px" class="table-list">
            <thead bgcolor="#e35d5e">
                <th>Full Name</th>
                <th>Nationality</th>
                <th>Gender</th>
                <th>Photo</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                        
                        $query = "SELECT * FROM fanslist";
                        $fanslist = mysqli_query($connection, $query);

                        while($d = mysqli_fetch_array($fanslist)){
                    ?>
                    <tr>
                        <td> <?php echo $d['fullName']?> </td>
                        <td> <?php echo $d['nationality']?> </td>
                        <td> <?php echo $d['gender']?> </td>
                        <td>
                            <img src="storage/images/<?php echo $d['profilePic']?>" width="100" height="100" class="picList" alt="Profile Picture">
                        </td>
                        <td>
                            <a href="viewDetails.php?username=<?php echo $d['username']?>">View Detail</a>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

<br><br><br>

    <div class="home-title-box">
        <h2>Angela Fans Club Meeting Schedule</h2>
    </div>

    <table width="100%" border="1px" class="table-list">
        <thead bgcolor="#e35d5e">
            <th>Date</th>
            <th>Time</th>
            <th>Venue</th>
            <th>Contact Person</th>
        </thead>
        <tbody>
        <?php
                
                $query = "SELECT * FROM schedules";
                $schedules = mysqli_query($connection, $query);
                
                while($schedule = mysqli_fetch_array($schedules)){
                ?>
                    <tr>
                        <td>
                            <?php echo date_format(date_create($schedule['meetingDate']), "d M Y")?>
                        </td>
                        <td>
                            <?php 
                            echo date('h:i A', strtotime($schedule['startTime'])).'-'. date('h:i A', strtotime($schedule['endTime']));
                            ?>
                        </td>
                        <td>
                            <?php echo $schedule['venue']?>
                        </td>
                        <td>
                            <?php
                                echo $schedule['contactPerson'];
                            ?>
                        </td>
                    </tr>
                <?php }?>
        </tbody>
    </table>
    <br><br><br>
</body>
</html>
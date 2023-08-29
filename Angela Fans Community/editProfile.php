<?php
    include('sqlConnection.php');

    $username = $_GET['username'];
    $query = "SELECT * FROM fanslist WHERE username='$username'";
   

    $sql = mysqli_query($connection, $query); 
    $data = mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angela Fans Club Community - Edit Profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="theme">
        <h1 class="theme-content">Angela Fans Club Community - Edit Profile</h1>
    </div>

    <div class="outer-box">
        
        <div class="title-box">
            <h3 class>Edit Your Profile!</h3>
        </div>
    
        <div class="box">
            <br>
         <form action="php/UpdateUser.php" method="post" onsubmit=" return editValidation()" enctype="multipart/form-data" name="editForm">
         <table class="table">
                <tr>
                    <td>
                        <label for="username">Username</label>
                    </td>
                    <td>
                        <?php echo $username ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                    <td>
                        <input type="password" name="password" id="password" placeholder="Input your password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="retypePass">Retype Password</label>
                    </td>
                    <td>
                        <input type="password" name="retypePass" id="retypePass" placeholder="Retype your password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" placeholder="Input your email" value="<?php echo $data['email'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="fullName">Full Name</label>
                    </td>
                    <td>
                        <input type="fullName" name="fullName" id="fullName" placeholder="Input your full name" value="<?php echo $data['fullName'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">Gender</label>
                    </td>
                    <td>
                        <input type="radio" name="gender" value="male">
                        <label for="male">Male</label>
    
                        <input type="radio" name="gender" value="female">
                        <label for="female">Female</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">Date of Birth</label>
                    </td>
                    <td>
                        <input type="date" name="dob" id="dob">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nationality">Nationality</label>
                    </td>
                    <td>
                        <select name="nationality" id="nationality">
                            <option value="Indonesia">Indonesia</option>
                            <option value="America">America</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Korea">Korea</option>
                            <option value="Japan">Japan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="profilePic">Photo</label>
                    </td>
                    <td>
                        <input type="file" name="profilePic" id="profilePic">
                    </td>
                </tr>
            </table>
            <br>
    
            <div>
                <button type="submit">Update Profile</button>
                <button type="button" onclick="Back()">Back</button>
            </div>
            <br>
        </div>
        <br>
    </div>
    </form>

    <script>
        function Back(){
            window.location.replace('home.php');
        }

        function editValidation(){
            var password = document.forms['editForm']['password'].value
            var retypePass = document.forms['editForm']['retypePass'].value
            var email = document.forms['editForm']['email'].value
            var fullName = document.forms['editForm']['fullName'].value
            var gender = document.forms['editForm']['gender'].value
            var dob = document.forms['editForm']['dob'].value
            var nationality = document.forms['editForm']['nationality'].value
            var profilePic = document.forms['editForm']['profilePic'].value

            if(password === "" || retypePass === "" || email === "" || fullName === "" || dob === "" || nationality === "" || profilePic === "" || gender ===""){
                alert("All field must be filled!")
                return false;
            }else if(password != retypePass){
                alert("Your Password and RetypePassword entered are not matched!")
            }else if(profilePic.size > 5000 *1024){
                alert("Image Uploaded Exceeds 5 MB! It must be less than 5 MB.")
                return false;
            }else if(profilePic.substring((profilePic.length - 4), profilePic.length) != ".jpg"){
                alert("Image must be in .JPG!")
                return false;
            }else{
                alert("you've made a change to your account!")
                return true;
            }
    </script>

</body>
</html>
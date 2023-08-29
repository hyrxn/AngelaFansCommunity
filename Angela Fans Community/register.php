<!-- <?php
    // include('sqlConnection.php');

    // $query = "SELECT * FROM fanslist";

    // $sql = mysqli_query($connection, $query); 
    // $data = mysqli_fetch_array($sql);

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angela Fans Club Community - Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="theme">
        <h1 class="theme-content">Angela Fans Club Community - Registration Page</h1>
    </div>

    <div class="title-box">
        <h2>Register</h2>
    </div>
    <div class="box">
        <br>
        <form action="php/RegisterUser.php" method="post" onsubmit=" return regValidation()" enctype="multipart/form-data" name="regisForm">
            <table class="regis-box">
                <tr>
                    <td>
                        <label for="username">Username</label>
                    </td>
                    <td>
                        <input type="text" name="username" id="username" placeholder="Input your username">
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
                        <input type="email" name="email" id="email" placeholder="Input your email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="fullName">Full Name</label>
                    </td>
                    <td>
                        <input type="fullName" name="fullName" id="fullName" placeholder="Input your full name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">Gender</label>
                    </td>
                    <td>
                        <input type="radio" name="gender" id="male" value="Male">
                        <label for="male">Male</label>
    
                        <input type="radio" name="gender" id="female" value="Female">
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
                        <!-- validasi harus max 5mb dan format JPEG -->
                        <input type="file" name="profilePic" id="profilePic">
                    </td>
                </tr>
            </table>
            <br>
    
            <div>
                <button type="submit" name="register" value="register">Register</button>
                <input type="reset">
            </div>
        </form>
        <br>
    </div>

   <script>
        function regValidation(){
            var username = document.forms['regisForm']['username'].value
            var password = document.forms['regisForm']['password'].value
            var retypePass = document.forms['regisForm']['retypePass'].value
            var email = document.forms['regisForm']['email'].value
            var fullName = document.forms['regisForm']['fullName'].value
            var gender = document.forms['regisForm']['gender'].value
            var dob = document.forms['regisForm']['dob'].value
            var nationality = document.forms['regisForm']['nationality'].value
            var profilePic = document.forms['regisForm']['profilePic'].value

            if(username === "" || password === "" || retypePass === "" || email === "" || fullName === "" || dob === "" || nationality === "" || profilePic === "" || gender ===""){
                alert("All field must be filled!")
                return false;
            }else if(password != retypePass){
                alert("Your Password and RetypePassword entered are not matched!")
            }else if(profilePic.size > 5000 *1024){
                alert("Image Uploaded Exceeds 5 MB! It must be less than 5 MB.")
                return false;
            }else if(profilePic.substring((profilePic.length - 4), profilePic.length) != ".jpg"){
                alert("Image must be in .jpg!")
                return false;
            }else{
                alert("you've made an account!")
                return true;
            }

            // else if(username == echo "$data['username']"){
            //     alert("Username has been used!")
            //     return false;
            // }
    
        }
   </script>

</body>
</html>
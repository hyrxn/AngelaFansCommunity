<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angela Fans Club Community - Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="theme">
        <h1 class="theme-content">Angela Fans Club Community - Login Page</h1>
    </div>

    <div class="title-box">
        <h2>Login</h2>
    </div>
    <div class="box">
        <br>
        <form action="php/LoginUser.php" method="post" onsubmit=" return Validation()" name="loginForm">
            <table class="login-box">
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
            </table>
            <br>
            <div>
                <button type="submit">Login</button>
               <button type="button" onclick="Register()">Register</button>
            </div>
        </form>
        <br>
    </div>

    <script>
        function Register(){
            window.location.replace('register.php');
        }

        function Validation(){
            var username = document.forms['loginForm']['username'].value
            var password = document.forms['loginForm']['password'].value

            if(username==="" && password==="") {
                alert("All field must be filled!")
                return false;
            }else if (username===""){
                alert("username is still empty!")
            }else if (password===""){
                alert("password is still empty!")
            }else{
                return true;
            }
    
        }
        
    </script>
</body>
</html>
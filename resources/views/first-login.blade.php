<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
   
    <div class="container">
        <h3>Log in</h3> 
        <label for="username">User Name</label> 
        <input class="form-control" type="text" id="email" name="username" placeholder="Enter Name" style="margin-left: 20px"><br>
        <label for="user">Email</label> 
        <input class="form-control" type="text" id="email" name="email" placeholder="Enter Email " style="margin-left: 20px"><br>
        <label for="password">Password</label>
        <input class="form-control" type="text" id="password" name="passsword" placeholder="Password" style="margin-left: 30px"><br>
        <input class="button" type="submit" id="create" name="register" value="Send OTP"><br>
    </div> 

    <script>
        let send_otp = document.getElementById("create");

        send_otp.onclick = function() {
            window.location.href = '/otp';
        }
    </script>
</body>
</html>

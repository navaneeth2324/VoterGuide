<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    img {
    border-radius: 50%;
    }
    button {
        font-size: 12px;
        padding: 10px 24px;
        border-radius: 12px;   
        background-color:blueviolet; color: black;
        font-size: medium;
        transition-duration: 0.5s;
    }   
button:hover {
    background-color: indigo; 
    color:blueviolet;
  }
    </style>
</head>
<body>
    <center>
        <div class="container">
            <div class="jumbotron">
                <form action="register.php" method="POST">
                    <img src="signup.png" alt="signup" style="width:200px">
                    <p>
                        <label for="name">Userame:</label>
                        <input type="text" name="username" required>
                    </p>
                    <p>
                        <label for="emali">Email:</label>
                        <input type="email" name="email" required>
                    </p>
                    <p>
                        <label for="password">Password:</label>
                        <input type="password" name="password_1" required>  
                    </p>
                    <p>
                        <label for="password">Confirm Password:</label>
                        <input type="password" name="password_2" required>
                    </p>
                    <p>
                        <button type="submit" class="btn btn-primary" name="reg_user">Submit</button>
                    </p>
                    <p>
                        Already a user?<a href="login.php"><b>Log in</b></a>
                    </p>
                </form>
            
            </div>  
        </div>
    </center>
   
</body>
</html>
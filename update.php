<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
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
    <div class="container">
        <div class="jumbotron">
        <form action="update.php" method="POST">
            <h1 style="font-size: 3em;font-family: Verdana, Geneva, Tahoma, sans-serif;color: darkred;text-align: center;"><b>UPDATE DETAILS</b></h1>
            <br>
            <br>
            <center>
            <div class="form-group">
            <p>
                    <label for="pno">Enter Phone Number to update:</label>
                    <input type="text" name="pno" required>
                </p>
                <p>
                    <label for="name">New Name:</label>
                    <input type="text" name="name" required>
                </p>
                <p>
                    <label for="dob">New Birth Date:</label>
                    <input type="date" name="dob"  required>
                </p>
                <p>
                    <label for="address">New Address:</label>
                    <input type="text" name="address" 
                    required>
                </p>
                <p>
                        <button type="submit" class="btn btn-primary" name="update">update</button>
                </p>
            </div>
           
            </center>    
        </form>     
        </div>
    </div>
     
    

    
</body>

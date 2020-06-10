<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
	
	<div class="container">
        <div class="jumbotron">
                <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <?php endif ?>
            <center>
                <P><button type="button" class="btn btn-primary btn-block"  onclick="document.location = 'add.php'"><b>Click here to add voter</b></button></P>
                <p><button type="button" class="btn btn-primary btn-block"  onclick="document.location = 'update.php'"><b>Click here to update voter info</b></button></p>
                <p><button type="button" class="btn btn-primary btn-block" onclick="document.location = 'display.php'"><b>Click here to Search voter</b></button></p>
            </center>
           

        </div>
    
	</div>
		
</body>
</html>
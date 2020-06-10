<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = ($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO user (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = ($password);
			$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
    }
    //ADD DETAILS
    if (isset($_POST['save'])){
        $name=mysqli_real_escape_string($db,$_POST['name']);
        $dob=mysqli_real_escape_string($db,$_POST['dob']);
        $pno=mysqli_real_escape_string($db,$_POST['pno']);
        $address=mysqli_real_escape_string($db,$_POST['address']);


        $query1="INSERT INTO data (name,dob,pno,address) VALUES('$name','$dob','$pno','$address')";
        mysqli_query($db,$query1);


        $_SESSION['success'] = "Data Inserted Successfully";
			header('location: add.php');
	}
	
	//UPDATE DETAILS
	if (isset($_POST['update'])){
		$pno=mysqli_real_escape_string($db,$_POST['pno']);
        $name=mysqli_real_escape_string($db,$_POST['name']);
        $dob=mysqli_real_escape_string($db,$_POST['dob']);
        $address=mysqli_real_escape_string($db,$_POST['address']);


        $query2="UPDATE `data` SET `name`='".$name."',`dob`='".$dob."',`address`='".$address."' WHERE `pno`=$pno";
        mysqli_query($db,$query2);

        $_SESSION['success'] = "Data updated Successfully";
			header('location: update.php');
	}
	
	//DISPLAY 
	
	
	

?>
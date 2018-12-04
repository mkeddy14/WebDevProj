<?php
	session_start();

	$username = "";
	$email = "";
	$errors = array();
	$game = "";
	$rating = "";
	$id = 0;
	$pid = 0;
	$update = false;
	$update2 = false;
	$fullname = "";
	$address = "";
	$favgame = "";

	// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// if register button is clicked
	if (isset($_POST['register'])) 
	{
		$username = mysqli_real_escape_string($db, $_POST['username']);

		$email = mysqli_real_escape_string($db, $_POST['email']);

		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		if (empty($username)) 
		{
			array_push($errors, "Username is required");
		}

		if (empty($email)) 
		{
			array_push($errors, "Email is required");
		}

		if (empty($password_1)) 
		{
			array_push($errors, "Password is required");
		}

		if ($password_1 != $password_2) 
		{
			array_push($errors, "The two passwords do not match");
		}

		// first check the database to make sure 
	  	// a user does not already exist with the same username and/or email
		  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
		  $result = mysqli_query($db, $user_check_query);
		  $user = mysqli_fetch_assoc($result);
		  
		  if ($user) { // if user exists
		    if ($user['username'] == $username) {
		      array_push($errors, "Username already exists");
		    }

		    if ($user['email'] == $email) {
		      array_push($errors, "Email already exists");
		    }
		  }

		// if no errors, save user to database
		if (count($errors) == 0) 
		{
			$password = md5($password_1);
			$sql = "INSERT INTO users (username, email, password)
			 VALUES ('$username', '$email', '$password')";

			mysqli_query($db, $sql);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = '';
			header('location: index.php');
		}
	}

	if (isset($_POST['login'])) 
	{
		$username = mysqli_real_escape_string($db, $_POST['username']);

		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) 
		{
			array_push($errors, "Username is required");
		}

		if (empty($password)) 
		{
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) 
		{
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username= '$username' AND password= '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) 
			{
				$_SESSION['username'] = $username;
				$_SESSION['success'] = '';
				header('location: index.php');
			}
			else{
				array_push($errors, "Incorrect Username/Password");			
			}
		}
	}

	if (isset($_GET['logout'])) 
	{
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}

	//save button pressed games

	if (isset($_POST['save'])) {
		$game = $_POST['game'];
		$rating = $_POST['rating'];

		$sql = "INSERT INTO ratings (game, rating)
			 VALUES ('$game', '$rating')";

		mysqli_query($db, $sql);

		header('location: Profile.php');
	}

	//save button pressed info

	if (isset($_POST['saved'])) {
		$fullname = $_POST['fullname'];
		$address = $_POST['address'];
		$favgame = $_POST['favgame'];

		$sql2 = "INSERT INTO info (fullname, address, favgame)
			 VALUES ('$fullname', '$address', '$favgame')";

		mysqli_query($db, $sql2);

		header('location: Profile.php');
	}
	//delete button pressed games

	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		
		$sqldel = "DELETE FROM ratings WHERE id=$id";

		mysqli_query($db, $sqldel);
		header('location: Profile.php');
	}

	//delete button pressed info

	if (isset($_GET['deleted'])) {
		$pid = $_GET['deleted'];
		
		$sqldel2 = "DELETE FROM info WHERE pid=$pid";

		mysqli_query($db, $sqldel2);
		header('location: Profile.php');
	}

	//edit button pressed

	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$game = $_POST['game'];
		$rating = $_POST['rating'];

		$sqlupdate = "UPDATE ratings SET game='$game', rating='$rating' WHERE id=$id";

		mysqli_query($db, $sqlupdate);
		
		header('location: Profile.php');
	}
?>
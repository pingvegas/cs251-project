<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "data";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname) or die("Database Not Connected");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (isset($_POST['submit'])) {

		if (isset($_POST['term'])) {
			$user_id = $_POST['user_id'];
			$username =  $_POST['username'];
			$useremail = $_POST['email'];
			$userpassword =  $_POST['password'];
			$userage =  $_POST['age'];
			$userphone = $_POST['phone'];
			$usergender =  $_POST['gender'];
			$cpassword = $_POST['cpassword'];


			function validate($form_data)
			{
				$form_data = trim(stripcslashes(htmlspecialchars($form_data)));
				return $form_data;
			}
			// $vuser_id = validate($user_id);
			// $vusername = validate($username);
			// $vuseremail = validate($useremail);
			// $vuserpassword = validate($userpassword);
			// $vuserphone = validate($userphone);
			// $vusergender = validate($usergender);


			if (!empty($username) && !empty($useremail) && !empty($userpassword) && !empty($userphone) && !empty($usergender)) {

				//$pass = password_hash($vuserpassword, PASSWORD_BCRYPT);
				if ($cpassword == $userpassword) {
					$insert = "INSERT INTO  users (user_id,username, email, phone, gender, age, password) 
				VALUES (NULL, '$username', '$useremail', '$userphone', '$usergender', '$userage', '$userpassword')";
					mysqli_query($conn, $insert);
					$msg = "User Inserted";
					

					// else
					// {
					echo $username;
					echo $useremail;
					echo $userpassword;
					echo $userphone;
					echo $usergender;

					// 	$msg = "Not Inserted";
					// }
					header('Location: login.php');
				} else {
					$msg = "Passwords do not match.";
				}
			}
			//echo "Empty";
		} else {
			$msg = "Please Check Term And Condition.";
		}
	}
}

?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>


  </style>
</head>

<body>

  <nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top">
 
  <a class="navbar-brand" href="#home"><i class="fas fa-building"></i>Qigmo</a>
  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#">Home<i class="fa fa-fw fa-home"></i> </a>
      
    </li>
    <li class="nav-item">
      <a class="nav-link a" href="#">Booking<i class="fa fa-fw fa-book"></i></a>
    </li>

    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <h8 style > _____Myaccount_____</h8>
        <a class="dropdown-item" href="#">Profile</a>
        <a class="dropdown-item" href="#">My Booking</a>
        <a class="dropdown-item" href="#">Logout<i class="fa fa-fw fa-off"></i></a>
      </div>
    </li>
  </ul>
</nav>
  

</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
  <style>
    
    @import url(https://fonts.googleapis.com/css?family=Cookie|Raleway:300,700,400);

		* {
			box-sizing: border-box;
			font-size: 1em;
			margin: 0;
			padding: 0;
		}
		
		body {
			 background: url('http://tfgms.com/sandbox/dailyui/bg-1.jpg') center no-repeat; 
			 background: url('https://www.aroell.com/wp-content/uploads/2017/12/wallpapers-3d-hotel-design-hd-wallpaper-artistic-hd-wallpapers.jpg') center no-repeat; 
			margin: 0;
			padding: 0;
			text-align: left;
			background-image: url("pic/Tri.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
			font-family: sans-serif;

			font-family: "Times New Roman", Times, serif;

		}
		

		.container {
			border-radius: 0.5em;
			box-shadow: 0 0 1em 0 rgba(51, 51, 51, 0.25);
			display: block;
			max-width: 30%;
			overflow: hidden;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			padding: 2em;
			position: absolute;
			top: 55%;
			left: 50%;
			z-index: 1;
			width: 98%;
			
		}

		.container:before {
			background: url('pic/Tri.jpg') center no-repeat;
			background-size: cover;
			content: '';
			-webkit-filter: blur(10px);
			filter: blur(10px);
			height: 100vh;
			position: absolute;
			top: 50%;
			left: 50%;
			z-index: -1;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			width: 100vw;
		}

		.container:after {
			background: rgba(255, 255, 255, 0.6);
			content: '';
			display: block;
			height: 100%;
			position: absolute;
			top: 0;
			left: 0;
			z-index: -1;
			width: 100%;
		}

		form button.submit {
			background: rgba(255, 255, 255, 0.25);
			border: 1px solid #333;
			line-height: 1em;
			padding: 0.5em 0.5em;
			-webkit-transition: all 0.25s;
			transition: all 0.25s;
		}

		form button:hover,
		form button:focus,
		form button:active,
		form button.loading {
			background: #333;
			color: #fff;
			outline: none;
		}

		form button.success {
			background: #27ae60;
			border-color: #27ae60;
			color: #fff;
		}

		@-webkit-keyframes spin {
			from {
				transform: rotate(0deg);
			}

			to {
				transform: rotate(360deg);
			}
		}

		@keyframes spin {
			from {
				transform: rotate(0deg);
			}

			to {
				transform: rotate(360deg);
			}
		}

		form button span.loading-spinner {
			-webkit-animation: spin 0.5s linear infinite;
			animation: spin 0.5s linear infinite;
			border: 2px solid #fff;
			border-top-color: transparent;
			border-radius: 50%;
			display: inline-block;
			height: 1em;
			width: 1em;
		}

		form label {
			border-bottom: 1px solid #333;
			display: block;
			font-size: 1.25em;
			margin-bottom: 0.5em;
			-webkit-transition: all 0.25s;
			transition: all 0.25s;
		}

		form label.col-one-half {
			float: left;
			width: 50%;
		}

		form label.col-one-half:nth-of-type(even) {
			border-left: 1px solid #333;
			padding-left: 0.25em;
		}

		form label input {
			background: none;
			border: none;
			line-height: 1em;
			font-weight: 300;
			padding: 0.125em 0.25em;
			width: 100%;
		}

		form label input:focus {
			outline: none;
		}

		form label input:-webkit-autofill {
			background-color: transparent !important;
		}

		form label span.label-text {
			display: block;
			font-size: 0.5em;
			font-weight: bold;
			padding-left: 0.5em;
			text-transform: uppercase;
			-webkit-transition: all 0.25s;
			transition: all 0.25s;
		}

		form label.checkbox {
			border-bottom: 0;
			text-align: center;
		}

		form label.checkbox input {
			display: none;
		}

		form label.checkbox span {
			font-size: 0.5em;
		}

		form label.checkbox span:before {
			content: '\e157';
			display: inline-block;
			font-family: 'Glyphicons Halflings';
			font-size: 1.125em;
			padding-right: 0.25em;
			position: relative;
			top: 1px;
		}

		form label.checkbox input:checked+span:before {
			content: '\e067';
		}

		form label.invalid {
			border-color: #c0392b !important;
		}

		form label.invalid span.label-text {
			color: #c0392b;
		}

		form label.password {
			position: relative;
		}

		form label.password button.toggle-visibility {
			background: none;
			border: none;
			cursor: pointer;
			font-size: 0.75em;
			line-height: 1em;
			position: absolute;
			top: 50%;
			right: 0.5em;
			text-align: center;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			-webkit-transition: all 0.25s;
			transition: all 0.25s;
		}

		form label.password button.toggle-visibility:hover,
		form label.password button.toggle-visibility:focus,
		form label.password button.toggle-visibility:active {
			color: #000;
			outline: none;
		}

		form label.password button.toggle-visibility span {
			vertical-align: middle;
		}

		h1 {
			font-size: 3em;
			margin: 0 0 0.5em 0;
			text-align: center;
			font-family: 'Cookie', cursive;
		}

		h1 img {
			height: auto;
			margin: 0 auto;
			max-width: 240px;
			width: 100%;
		}

		html {
			font-size: 18px;
			height: 100%;
		}

		.text-center {
			text-align: center;
		}
    
    
		body {
            margin: 0;
            padding: 0;
            text-align: left;
            background-image: url("pic/Tri.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: sans-serif;

            font-family: "Times New Roman", Times, serif;

        }
    .font{
      font-family: "Times New Roman", Times, serif;
    }

    .contact-title {
      margin-top: 10%;
      color: #fff;
      text-transform: uppercase;
      transition: all 4s ease-in-out;


    }
  </style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <a class="navbar-brand" href="home.php">Qigmo</a>
    <div class="container-fluid">
      <div class="navbar-header ">

      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home<i class="fa fa-fw fa-home"></i></a></li>
        <li class="nav-link"><a href="login.php">Booking<i class="fa fa-fw fa-book"></i></a></li>
        <li class="nav-link"><a href="about_us.php">About us<i class="fa fa-fw fa-search"></i></a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        

        <li><a href="register2.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>

  








  <div class="container">
		<h1 class="text-center"  style=" font-family: Times New Roman, Times, serif;">Register</h1>



		<form class="registration" action="" method="post">
 
			<label for="username">
				<span class="label-text">Username</span>
				<input type="text" name="username" placeholder="Qigmo1234" require>

			</label>

			<!-- <label>
			<span class="label-text">Last Name</span>
			<input type="text" name="lastName">
        </label> -->

			<label for="email">
				<span class="label-text">Email</span>
				<input type="email" name="email" placeholder="Qigmo@email.com" require>
				<!-- <input type="email" name="email"  placeholder="Email" required/> -->
			</label>


			<label for="number">
				<span class="label-text">Phone</span>
				<input type="text" name="phone"require></br>
				<!-- <input type="number" name="phone" placeholder="Phone" require></br> -->
			</label>




			<label for="gender">
				
				<span  class="label-text">Gender</span>
				<select class="form-control" name="gender">
					<option class="label-text" value="Male"> Male</option>
					<option value="Female"> Female</option>
					<option value="Other"> Other</option>
				</select>
			</label>


			<label for="number">
				<span class="label-text">Age</span>

				<input type="number" name="age" min="1" require></br>

			</label>




			<label for="password">
				<span class="label-text">Password</span>

				<input type="password" name="password" require></br>

			</label>

			<label for="password">
				<span class="label-text">Confirm Password</span>


				<input type="password" name="cpassword" onchange="check()" require>

			</label>




			<input type="checkbox" name="term"> I Follow All Term & Condition <br>
			<br>

			<!-- <button  type="submit" name="submit" value="Register">Register</button> -->

			<div class="text-center">
				<button class="submit" name="submit" value="Register">Sign Me Up</button>
			</div>

			<h3 style="color:red; font-family: Times New Roman, Times, serif;"><?php echo @$msg; ?></h3>




</body>

</html>

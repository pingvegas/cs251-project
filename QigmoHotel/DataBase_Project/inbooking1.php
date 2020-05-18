<?php

session_start();

//create variable

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "data";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Can't connection to database");
}else{
	//echo"OK";
}

//if ($conn->connect_error) {
//  die("Can't connection to database");
//}
//echo "Connect";


?>
<!DOCTYPE html>


<style>
	@import url('https://fonts.googleapis.com/css?family=Muli:300,500&display=swap');

	* {
		box-sizing: border-box;
	}

	body {
		font-family: 'Muli', sans-serif;
		display: flex;
		align-items: center;
		justify-content: center;
		min-height: 100vh;
		margin: 0;
	}

	body::after {
		background-image: url('pic/r1.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
		content: '';
		filter: blur(5px);
		position: absolute;
		top: 0px;
		left: 0px;
		height: 100vh;
		width: 100vw;
		z-index: -1;
	}

	.panel-container {
		background-color: #222;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
		display: flex;
		height: 70vh;
		width: 70vw;
		max-width: 800px;
	}

	.left {
		color: #fff;
		display: flex;
		flex-direction: column;
		padding: 40px;
		position: relative;
		width: calc(50% - 10px);
	}

	.left h2 {
		margin: 0;
	}

	.left h3 {
		border-bottom: 1px solid #333;
		font-weight: 400;
		font-size: 16px;
		margin: 30px 0 0;
	}

	.left p {
		color: #8e44ad;
		font-weight: 500;
		font-size: 13px;
		margin: 3px 0;
	}

	.left button {
		background-color: transparent;
		border: 1px solid #8e44ad;
		color: #fff;
		cursor: pointer;
		font-weight: 500;
		padding: 15px 30px;
		margin-top: auto;
	}

	.left::after {
		border-top: 0 solid transparent;
		border-bottom: 70vh solid transparent;
		border-left: 30px solid #222;
		content: '';
		position: absolute;
		top: 0;
		left: 100%;
		height: 0%;
		width: 0;
	}

	.right {
		background-image: url('pic/r1.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
		width: calc(50% + 20px);
	}

	@media screen and (max-width: 700px) {
		.left {
			width: 100%;
		}

		.left::after {
			display: none;
		}

		.left h3 {
			margin-top: 20px;
		}

		.right {
			display: none;
		}
	}

	/* SOCIAL PANEL CSS */
	.social-panel-container {
		position: fixed;
		right: 0;
		bottom: 80px;
		transform: translateX(100%);
		transition: transform 0.4s ease-in-out;
	}

	.social-panel-container.visible {
		transform: translateX(-10px);
	}

	.social-panel {
		background-color: #fff;
		border-radius: 16px;
		box-shadow: 0 16px 31px -17px rgba(0, 31, 97, 0.6);
		border: 5px solid #001F61;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		font-family: 'Muli';
		position: relative;
		height: 169px;
		width: 370px;
		max-width: calc(100% - 10px);
	}

	.social-panel button.close-btn {
		border: 0;
		color: #97A5CE;
		cursor: pointer;
		font-size: 20px;
		position: absolute;
		top: 5px;
		right: 5px;
	}

	.social-panel button.close-btn:focus {
		outline: none;
	}

	.social-panel p {
		background-color: #001F61;
		border-radius: 0 0 10px 10px;
		color: #fff;
		font-size: 14px;
		line-height: 18px;
		padding: 2px 17px 6px;
		position: absolute;
		top: 0;
		left: 50%;
		margin: 0;
		transform: translateX(-50%);
		text-align: center;
		width: 235px;
	}

	.social-panel p i {
		margin: 0 5px;
	}

	.social-panel p a {
		color: #FF7500;
		text-decoration: none;
	}

	.social-panel h4 {
		margin: 20px 0;
		color: #97A5CE;
		font-family: 'Muli';
		font-size: 14px;
		line-height: 18px;
		text-transform: uppercase;
	}

	.social-panel ul {
		display: flex;
		list-style-type: none;
		padding: 0;
		margin: 0;
	}

	.social-panel ul li {
		margin: 0 10px;
	}

	.social-panel ul li a {
		border: 1px solid #DCE1F2;
		border-radius: 50%;
		color: #001F61;
		font-size: 20px;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 50px;
		width: 50px;
		text-decoration: none;
	}

	.social-panel ul li a:hover {
		border-color: #FF6A00;
		box-shadow: 0 9px 12px -9px #FF6A00;
	}

	.floating-btn {
		border-radius: 26.5px;
		background-color: #001F61;
		border: 1px solid #001F61;
		box-shadow: 0 16px 22px -17px #03153B;
		color: #fff;
		cursor: pointer;
		font-size: 16px;
		line-height: 20px;
		padding: 12px 20px;
		position: fixed;
		bottom: 20px;
		right: 20px;
		z-index: 999;
	}

	.floating-btn:hover {
		background-color: #ffffff;
		color: #001F61;
	}

	.floating-btn:focus {
		outline: none;
	}

	.floating-text {
		background-color: #001F61;
		border-radius: 10px 10px 0 0;
		color: #fff;
		font-family: 'Muli';
		padding: 7px 15px;
		position: fixed;
		bottom: 0;
		left: 50%;
		transform: translateX(-50%);
		text-align: center;
		z-index: 998;
	}

	.floating-text a {
		color: #FF7500;
		text-decoration: none;
	}

	@media screen and (max-width: 480px) {

		.social-panel-container.visible {
			transform: translateX(0px);
		}

		.floating-btn {
			right: 10px;
		}
	}
</style>


<html>

<head>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  </script>
</head>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
	<link href="style.css">
	<script src="script.js"></script>

</head>

<body>

  </nav>
	<div class="panel-container">
		<div class="left">
			<h1>QigmoHotel</h1>


			<form action="inbooking1.php" method="post">
				<div class="col-md-2">
					<div class="form-group">

						<label for="check-in" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
						<input type="text" class="floatLabel" name="arrive" id="datepicker" value="<?php echo date('Y-m-d'); ?>">
						
					</div>
				</div>
				<br>

				<div class="col-1-4 col-1-4-sm">
					<div class="controls">
						<label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>
						<input type="text" id="datepicker1" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />

					</div>
				</div>


				<h3>Room</h3>
				<div class="col-1-3 col-1-3-sm">
					<div class="controls">
						<br>

						<label for="fruit">Bedroom type</label>
						<select class="floatLabel" name="bed">
							<option value="Deluxe,9500 " selected>Deluxe 9500$</option>
							<option value="Suit,15000 ">Suit 15000$</option>
						</select>

					</div>
				</div>
				<br>
				<div class="col-1-3 col-1-3-sm">
					<div class="controls">

						<label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;People</label>
						<select class="floatLabel" name="people">
							<option value="blank"></option>
							<option value="1">1</option>
							<option value="2" selected>2</option>
							<option value="3">3</option>
						</select>

					</div>
				</div><br><br><br>
				<div>



					<button  class="button" href="receipt.php" name="button">
						Confirm Reservation
						<!-- <a href="receipt.php">Confirm Reservation -->
					</button>

					<button type="button" onclick="window.location.href = 'receipt.php';" name="button">Receipt</button>
					<button type="button" onclick="window.location.href = 'home1.php';" name="button">Back</button>
				</div>



		</div>
		<div class="right"></div>
	</div>

</body>

</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//  $checkin = $_POST['arrive'];
	//  $checkout = $_POST['depart'];
	//  $bed = $_POST['bed'];
	//  $peo = $_POST['people'];
	//  $bedd = explode(",",$bed);
	//  $in = "INSERT INTO indexx (arrive,depart,bedroom,price,people)
	// VALUES('$checkin','$checkout','$bedd[0]','$bedd[1]','$peo')";
	// mysqli_query($conn,$in);
	if (isset($_POST['arrive']) && ['depart'] &&['bed'] &&['people']&&['price']){
		//  if (isset($_POST['arrive']) && ['depart'] &&['bed'] &&['people']&&['price']){
		$arrive = $_POST['arrive'];
		$depart = $_POST['depart'];
		$room_des = $_POST["bed"];
		$room_type_price = explode(",",$room_des);
		$room_type = $room_type_price[0];
		$room_price = $room_type_price[1];
		$guest = $_POST['people'];
		$price = $_POST['price'];
		$user = $_SESSION['user'];
		$user_id = $_SESSION['uid'];

		$_SESSION['arrive'] = $arrive;
		$_SESSION['depart'] = $depart;
		$_SESSION['room_type'] = $room_type;
		$_SESSION['guest'] = $guest;
		$_SESSION['price'] = $room_price;
		
		

	}

	if (isset($_POST['button'])) {
		
		$checkin = $_POST['arrive'];
		$checkout = $_POST['depart'];
		$bed = $_POST['bed'];
		$peo = $_POST['people'];
		$bedd = explode(",", $bed);
		$go = $_POST['button'];
		// echo $checkin;
		// echo $checkout;
		// echo $bedd[0];
		// echo $bedd[1];
		// echo $peo;
		// echo " uid ".$user_id;
		//echo $c;
		$in = "INSERT INTO booking (arrive,depart,room_type,price,guest,book_id,user_id)
   VALUES('$checkin','$checkout','$bedd[0]','$bedd[1]','$peo','$user_id',$user_id)";
		mysqli_query($conn, $in);
	}
}

?>
</form>
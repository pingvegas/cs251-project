<?php


session_start();
//create variable

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "data";

//create connection


$conn = new mysqli($servername, $username, $password, $dbname);




//if ($conn->connect_error) {
//  die("Can't connection to Project_DB");
//}
//echo "Connect";


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
 <style>
    body {
      margin: 0;
      padding: 0;
      text-align: center;
      background-image: url("pic/Tri.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      font-family: sans-serif;

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
    <a class="navbar-brand" href="home1.php">Qigmo</a>
    <div class="container-fluid">
      <div class="navbar-header ">

      </div>
      <ul class="nav navbar-nav">
        <li class="nav-link"><a href="home1.php">Home<i class="fa fa-fw fa-home"></i></a></li>
        <li class="active"><a href="booking1.php">Booking<i class="fa fa-fw fa-book"></i></a></li>
        <li class="nav-link"><a href="about_us1.php">About us<i class="fa fa-fw fa-search"></i></a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user"></span> : <?php echo $_SESSION['uid']?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="myaccount.php">My Acccount</a></li>
            <li><a href="#">Booking History</a></li>
            <!-- <li><a href="#">Page 1-3</a></li> -->
          </ul>
        </li>

        <!-- <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>

  <!-- <h2>Hello</h2> -->

  

</body>

</html>
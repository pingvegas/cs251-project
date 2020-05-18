<?php

session_start();
// if (isset($_SESSION["uid"])) header('Location: home.php');
//create variable
$error = false;
$error_message = "";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "data";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Can't connection to Project_DB");
}

//check post method valiable
if (isset($_POST['username']) && ['password'] ) {
    $user = $_POST['username'];
    $pwd = $_POST['password'];
    
    
    
    //echo $user."  ".$pwd;

    $stmt = $conn->prepare("SELECT user_id FROM users WHERE username = ? AND password = ?");
    
    $stmt->bind_param('ss', $user, $pwd);

    $stmt->execute();

    $result = $stmt->get_result();
    //echo $username;
    //echo $pwd;
    //print_r($result);
    if ($uid = $result->fetch_assoc()) {
        //echo cant print arry
        // print_r($uid);
        // echo $uidp['user_id'];
        // $_SESSION["user"] = $user;
       
        $_SESSION['uid'] = $uid['user_id'];
        
       $_SESSION["user"] = $user;
        
        
        
        
        echo "hello";
         header('Location: home1.php');
    } else {
        $error = true;
        $error_message = "Wrong Username or Password";
    }
}


?>

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
        <li class="nav-link"><a href="home.php">Home<i class="fa fa-fw fa-home"></i></a></li>
        <li class="nav-link"><a href="login.php">Booking<i class="fa fa-fw fa-book"></i></a></li>
        <li class="nav-link"><a href="about_us.php">About us<i class="fa fa-fw fa-search"></i></a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        

        <li><a href="register2.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>
<div class="contact-title" >
        <h1 class="font" style="font-size: 200%; text-shadow: 1px 1px 2px black, 0 0 25px LightGray, 0 0 5px white;">Welcome to Qigmo</h1>
        <h2 class="font" style="font-size: 100%;">
            Expireance that you never seen
        </h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <!--<h1>Login</h1> <br />-->
                <form action="login.php" method="post" style="margin-top:8%; ">
                    <div class="from-group">
                        <label for="username" style="color: white;">Username</label>
                        <input type="text" class="form-control" id="username" name="username" style="opacity: 0.8;">
                    </div>
                    <div class="form-group">
                        <label for="password"  style="color: white;" >Password</label>
                        <input type="password" class="form-control" id="password" name="password" style="opacity: 0.8;">
                    </div>
                    <form>
                    <button type="submit" class="btn btn-warning" >login</button>
                
                    <a href="register2.php"  style="color:grey" type="submit" class="btn btn-warning">sign up</a>
                    </form>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    
</body>
<script>
<?php if($error) { ?>
    swal("Error", "<?php echo $error_message?>", "error");
<?php }?> 
</script>

</html>
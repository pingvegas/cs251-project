<?php


session_start();
//create variable

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "data";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);




$a = "SELECT * FROM Booking";
$aa =  mysqli_query($conn ,$a);


if(mysqli_num_rows($aa) >0){
  $row = $aa -> fetch_assoc();
  
}
// if (isset($_POST['arrive']) && ['depart']) {
//   	$checkout = $_POST['depart'];
//   	$_SESSION['depart'] = $checkout;
//   //   }
// }

?>
<!DOCTYPE html>

<html>
<style>


@import url("https://fonts.googleapis.com/css?family=Lato:400,700");
html {
  display: grid;
  min-height: 100%;
  font-family: "Lato", sans-serif;
}

body {
  display: grid;
  background: url('pic/k3.jpg');
}

h1 {
  font-weight: 200;
  color: #ea0b8c;
}

h2 {
  text-transform: uppercase;
  font-weight: 100;
  letter-spacing: 2px;
  font-size: 1em;
  margin-top: -1em;
}
.font{
      font-family: "Times New Roman", Times, serif;
    }

h3 {
  font-weight: 300;
  font-size: 1em;
}

p {
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 0.7em;
  color: #352384;
  margin-top: -0.5em;
}

a {
  text-decoration: none;
}

span {
  font-size: 0.6em;
  margin-left: 1em;
}

.container {
  position: relative;
  margin: auto;
  overflow: hidden;
  background: #f9f9fa;
  width: 500px;
  height: 700px;
  border-radius: 20px;
  box-shadow: 5px 5px 20px rgba(17, 17, 31, 0.3);
}

#logo {
  width: 50px;
  height: auto;
  position: absolute;
  right: 1em;
  margin: 1em;
}

.fa-lyft {
  color: #ea0b8c;
  font-size: 3em;
}

.main {
  margin: 3.5em 3em 1em 3em;
}

.location {
  border: 1px solid transparent;
  width: 100%;
  height: 30%;
  margin-top: -1.5em;
  padding-bottom: 1.7em;
}
.location p {
  margin-top: -0.8em;
}
.location img {
  position: absolute;
  left: 50%;
  height: 190px;
  margin-top: 38px;
}

.location__pickup {
  margin: 2.7em 4.5em;
}

.location__dropoff {
  margin: 0 4.5em;
  padding-top: 1px;
}
.location__dropoff p {
  color: #ea0b8c;
}

.dot {
  border-radius: 50%;
  width: 14px;
  height: 14px;
  position: absolute;
  top: 180px;
  left: 3em;
}
.dot .inner {
  background: #f9f9fa;
  position: absolute;
  width: 45%;
  height: 45%;
  border-radius: 50%;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.pickup {
  background: #352384;
}

.dropoff {
  background: #ea0b8c;
  top: 293px;
}

.location__line {
  background: linear-gradient(#352384, #ea0b8c);
  width: 2px;
  height: 105px;
  position: absolute;
  left: 54px;
  margin-top: 55px;
}

.receipt__title {
  margin: 0.5em 3em -2.5em 3em;
}

.receipt {
  margin: 3em 4.5em 0 3.5em;
  height: 150px;
  display: grid;
  grid-template-columns: 2fr 1fr;
}

.receipt__grid1 {
  margin-top: 1.1em;
}
.receipt__grid1 p {
  color: #11111f;
}

.receipt__grid2 {
  margin-top: 1.1em;
}
.receipt__grid2 p {
  text-align: right;
}

.receipt__line {
  position: absolute;
  left: 11%;
  top: 68.5%;
  width: 75%;
  height: 1px;
  background: #ea0b8c;
}

.total {
  margin-top: 2em;
}

.rate {
  width: 100%;
  margin-top: -1.3em;
  text-align: center;
}
.rate .fa-star {
  padding: 5px 8px;
  color: #ea0b8c;
}

.lyft__footer {
  background: #352384;
  padding-bottom: 25px;
  width: 100%;
  height: 12%;
  position: absolute;
  bottom: 0;
}
.lyft__footer p {
  color: #f9f9fa;
  margin: 2.5em 3.2em;
}
.lyft__footer .lyft__social {
  position: absolute;
  width: 50%;
  height: 50px;
  text-align: right;
  top: 0;
  right: 0;
  margin-top: 3em;
  margin-right: 1.2em;
}
.lyft__footer .lyft__social .fab {
  padding: 14px;
  color: #f9f9fa;
}
.lyft__footer .lyft__social .fab:hover {
  color: #f533a3;
  transition: all 0.8s ease;
  transform: scale(1.3);
}

footer {
  position: absolute;
  bottom: 0;
  right: 0;
  text-transform: uppercase;
  padding: 10px;
  font-size: 0.7em;
}
footer p {
  letter-spacing: 3px;
  color: #352384;
}
footer a {
  color: #f9f9fa;
  text-decoration: none;
}
footer a:hover {
  color: #7d7d7d;
}



</style>


<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
    <link href="receipt2.css">

</head>



<div class="container">
  
  <div class="main">
    <h1 class="font">Qigmo Hotel</h1>
    <h2 class="font">Thank you for booking !</h2>
    <!-- <p>(July 17, 2018 at 5:21pm)</p> -->
  </div>
  <div class="location">
    <img class="map" src="pic/Tri.jpg" />
    <div class="location__line"></div>
    <div class="dot pickup">
      <div class="inner"></div>
    </div>
    <div class="location__pickup">
      <h3>Check-in </h3>
      <p><?php echo $_SESSION['arrive'];?> <br></p>
    </div>
    <div class="dot dropoff"><div class="inner"></div></div>
    <div class="location__dropoff"><br>
      <h3>Check-Out</h3>
      <p><?php echo $_SESSION['depart']?> <br></p>
    </div>
  </div>
  
  <h2 class="receipt__title">Booking Details</h2>
  <div class="receipt">
    <div class="receipt__grid1">
      <p>ประเภทห้องพักที่เลือก</p>
      <p>จำนวนคน</p>
      
      <p class="total">Room Price</p>
    </div>
    <div class="receipt__grid2">
      <p><?php echo $_SESSION['room_type'];?></p>
      <p><?php echo $_SESSION['guest'];?></p>
     
      <p class="total"><?php echo $_SESSION['price'];?></p>
    </div>
  </div>
  <div class="receipt__line"></div>
  <div class="rate">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="far fa-star"></i>
  </div>
  <div class="lyft__footer">
    <p><i class="far fa-copyright"></i> QigmoHotel<br><br>
      Address : หมู่ที่ 6 60/1  ภูเก็ต 83110 <br>
      Tel : 076 310 100</p>
    <div class="lyft__social">
    <button class="submit"> 
      <a href="home1.php">Done</a>
      </button>
      <a href="https://facebook.com/lyft" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="https://twitter.com/lyft" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="https://instagram.com/lyft" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
  </div>
  
</div>



</html>
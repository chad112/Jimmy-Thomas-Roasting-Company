<?php 
if (isset($_COOKIE["order_complete"])) 
{
  if ($_COOKIE["order_complete"] != "") {
  $complete = true; }
  setcookie("order_complete", "", time()-3600);
} else { 
  $complete = false;
}
?>

<!DOCTYPE HTML>
<html>
<head>
  <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Bowlby+One+SC' rel='stylesheet' type='text/css'>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src='js/notify.js'></script>
  <link rel="stylesheet" media="screen" href="css/normalize.css">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <title> Jimmy Thomas Roasting Company </title>
</head>
<body>
  <img class="bgimg" src="img/woodbg2.jpg" alt="wood Background">
  
  <img class="logo" src="img/logowhite.png" alt="Jimmy Thomas Roasting Company Logo">
  <ul class="nav">
  <li> <a href="index.php"> HOME</a> </li>
  <li> <a href="menu.html">MENU</a> </li>
  <li> <a href="order.html">ORDER</a> </li>
</ul>
  <div class="title_content">

  <img class="media"src="img/coffee1.png" alt="Coffee is good">

  <p class="body_content">
    Welcome to Jimmy Thomas Roasting Company! We're thankful that you've taken the time to take a glimpse at the luxuries of having fresh roasted beans to consume and enjoy. Our mission is to provide fresh, delicious beans to create a atmosphere promoting conversations, and ultimately friendship. Please, take a look at the various bean choices, and if you have any questions, feel free to email us at sales@jtroasting.com. Thank you!
</p>
</div>
<script>



</script>

<?php
if ($complete == true) {
  echo '<script>$.notify("Thank you for your order. We will contact you shortly.", "success");</script>';
}
?>

</body>
</html>

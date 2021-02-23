<!DOCTYPE html>
<html>
<head>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Newsreader&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@700&display=swap" rel="stylesheet">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Online Bakery Store</title>
  <style type="text/css">

.header {
  padding: 10px;
  text-align: center;
  background:   #8B4513;
  color: white;
  font-size: 25px;
  font-family: 'Newsreader', serif;
}
</style>
</head>

<body style="background-color: #CD853F">
  <div class="header">
    <h2>Welcome to Online Bakery Store</h2>
    <p> Website Made by Pra Mpoi</p>
  </div>
  <center><b><p style="color: white; font-family: 'Newsreader', serif;font-size: 30px;">Here is our Menu :</p></b></center>

<div class="row">
    <div class="col-md-4 .offset-md-2">
      <div class="item"><img src="bagel.jpg" alt="Bagel" height="300" width="400">
      <center><b><p style="color: white; font-size: 25px; font-family: 'Newsreader', serif;">Bagel ₱450 for 12 pieces</p></b></center></div>
    </div>
    <div class="col-md-4 .offset-md-2">
     <div class="item"><img src="Pandesal.jpg" alt="Pandesal" height="300" width="400">
     <center> <b><p style="color: white; font-size: 25px; font-family: 'Newsreader', serif;">Pandesal ₱120 for 12 pieces</p></b></center></div></div>
    <div class="col-md-4 .offset-md-2">
        <img src="Garlic B.jpg" alt="Garlic Bread" height="300" width="400">
      <center><b><p style="color: white; font-size: 25px; font-family: 'Newsreader', serif;">Garlic Bread ₱250 for 12 pieces</p></b> </center></div>
    </div>
  </div>

<center><div class="row">
    <div class="col-md-6 .offset-md-2">
      <div class="item"><img src="brownie.jpg" alt="Brownie" height="300" width="400">
      <center><b><p style="color: white; font-size: 25px; font-family: 'Newsreader', serif;">Brownie ₱270 for 12 pieces</p></b></center></div>
    </div>
    <div class="col-md-6 ">
     <div class="item"><img src="pretzel.jpg" alt="Pretzel" height="300" width="400">
     <center> <b><p style="color: white; font-size: 25px; font-family: 'Newsreader', serif;">Pretzel ₱75 for 1 piece</p></b></center></div></div>
  </div></center>
<hr>
<form method="POST" action="">
<h2 style="color: white; font-family: 'Newsreader', serif;">Order Form</h2>
<br>
<p>Full Name: <input type="text" name="fullName" size="10"></p>
<p>Home Address:<input type="text" name="hmAddress" size="20"></p>
<p>Age:<input type="number" name="age" size="20"></p>
<div class="multiselect">
    <div class="selectBox" >
      <div class="overSelect">
      <p>Select Your Order</p>
      <label for = "orderBagel">
        <input type="checkbox" id="orderBagel" name="item_Bagel" value="450" />Bagel</label>
      <label for = "orderPandesal">
        <input type="checkbox" id="orderPandesal" name="item_Pandesal" value="120" />Pandesal</label>
      <label for = "orderGB">
        <input type="checkbox" id="orderGB" name="item_GB" value="250" />Garlic Bread</label>
      <label for = "orderBrownie">
        <input type="checkbox" id="orderBrownie" name="item_Brownie" value="270" />Brownie</label>
      <label for = "orderPretzel">
        <input type="checkbox" id="orderPretzel" name="item_Pretzel" value="75" />Pretzel</label>
    </div>
  </div>
</div>
Number of People Ordered: <input type="number" name="users">
<input type="submit" value="submit" name="submit">


<?php
$priceBagel=450;  //450 is price of Bagel
$pricePandesal=120; //120 is price of Pandesal
$priceGB=250;  //250 is price of Garlic Bread
$priceBrownie=270; //270 is price of Brownie
$pricePretzel=75;  //75 is price of Pretzel

if (isset($_POST["submit"])) {
$order_Bagel=$_POST["item_Bagel"];  //retrieve input from form
$order_Pandesal=$_POST["item_Pandesal"]; //retrieve input from form
$order_GB=$_POST["item_GB"];  //retrieve input from form
$order_Brownie=$_POST["item_Brownie"];  //retrieve input from form
$order_Pretzel=$_POST["item_Pretzel"];  //retrieve input from form

$totalPrice = $pricePandesal+$priceBagel+$priceGB+$priceBrownie+$pricePretzel;
$total = 0;

$users=$_POST["users"];
$age=$_POST["age"];

switch ($users) {
    case ($users <= 20):
        $total = $totalPrice * .50;
        echo "The total you have to pay is $totalPrice";
        break;
    case ($users > 20):
        switch ($age) {
            case ($age >= 60):
                $total = $price * .20;
                break;
            default:
                $total = $price * .10;
        }

        break;
}}
?>
</form>
</body>
</html>
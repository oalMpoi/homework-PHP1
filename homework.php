<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
        <div class="item">
          <img src="bagel.jpg" alt="Bagel" height="300" width="400">
          <center>
            <b><p style="color: white; font-size: 25px; font-family: 'Newsreader', serif;">Bagel ₱450 for 12 pieces</p></b>
          </center>
        </div>
      </div>
      <div class="col-md-4 .offset-md-2">
        <div class="item">
          <img src="Pandesal.jpg" alt="Pandesal" height="300" width="400">
          <center> <b><p style="color: white; font-size: 25px; font-family: 'Newsreader', serif;">Pandesal ₱120 for 12 pieces</p></b></center>
        </div>
      </div>
      <div class="col-md-4 .offset-md-2">
        <div class="item">
          <img src="Garlic B.jpg" alt="Garlic Bread" height="300" width="400">
          <center>
            <b><p style="color: white; font-size: 25px; font-family: 'Newsreader', serif;">Garlic Bread ₱250 for 12 pieces</p></b>
          </center>
        </div>
      </div>
    </div>

    <center>
      <div class="row">
        <div class="col-md-6 .offset-md-2">
          <div class="item">
            <img src="brownie.jpg" alt="Brownie" height="300" width="400">
            <center>
              <b><p style="color: white; font-size: 25px; font-family: 'Newsreader', serif;">Brownie ₱270 for 12 pieces</p></b>
            </center>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="item">
            <img src="pretzel.jpg" alt="Pretzel" height="300" width="400">
            <center>
              <b><p style="color: white; font-size: 25px; font-family: 'Newsreader', serif;">Pretzel ₱75 for 1 piece</p></b>
            </center>
          </div>
        </div>
      </div>
    </center>
    <hr />
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
              Bagel
              <input type="checkbox" id="orderBagel" name="item_Bagel"/>
            </label>
            <label for="orderPandesal">
              Pandesal
              <input type="checkbox" id="orderPandesal" name="item_Pandesal" />
            </label>
            <label for="orderGB">
              Garlic Bread
              <input type="checkbox" id="orderGB" name="item_GB" />
            </label>
            <label for="orderBrownie">
              Brownie
              <input type="checkbox" id="orderBrownie" name="item_Brownie" />
            </label>
            <label for="orderPretzel">
              Pretzel
              <input type="checkbox" id="orderPretzel" name="item_Pretzel" />
            </label>
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

          $totalPrice = 0;
          $overallTotal = 0;

          $users = $_POST["users"];
          $age = $_POST["age"];

          if (isset($order_Pandesal)) {
            // User ordered pandesal
            $totalPrice += $pricePandesal;
          }

          if (isset($order_Bagel)) {
            // User ordered bagel
            $totalPrice += $priceBagel;
          }

          if (isset($order_GB)) {
            // User ordered garlic bread
            $totalPrice += $priceGB;
          }

          if (isset($order_Brownie)) {
            // User ordered brownie
            $totalPrice += $priceBrownie;
          }

          if (isset($order_Pretzel)) {
            // User ordered pretzel
            $totalPrice += $pricePretzel;
          }

          switch ($users) {
            case ($users <= 20):
              $overallTotal = $totalPrice - ($totalPrice * .50);
              break;
            case ($users > 20):
              switch ($age) {
                case ($age >= 60):
                $overallTotal = $totalPrice - ($totalPrice * .20);
                break;
              default:
                $overallTotal = $totalPrice - ($totalPrice * .10);
              }

            break;
          }

          echo "The total the customer has to pay is $overallTotal";
        }
      ?>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>

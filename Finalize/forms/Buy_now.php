<?php
include('server_buy.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Buy Now form</title>
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/Styles b-form.css" />
  </head>
  <body>
    <div class="main-block">
      <h1>Buy Now</h1>
      <form method="post">
        <div class="info">
          <input class="fname" type="text" name="fullname" placeholder="Full name"/>
          <input type="text" name="phonenumber" placeholder="Email" />
          <input type="text" name="requiredpackage" placeholder="Phone number" />
        </div>
        <h3>Method</h3>
        <div class="metod">
          <div>
            <input
              type="radio"
              value="none"
              id="radioOne"
              name="metod"
              checked
            />
            <label for="radioOne" class="radio">For pick up</label>
          </div>
          <div>
            <input type="radio" value="none" id="radioTwo"  />
            <label for="radioTwo" class="radio">For delivery</label>
          </div>
        </div>
        <button type="submit" name="buy">Submit</button>
      </form>
    </div>
  </body>
</html>

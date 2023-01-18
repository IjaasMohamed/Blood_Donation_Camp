<?php
include('server.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Consult us</title>
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/Styles C-form.css" />
  
    
  </head>
  <body>
  <section class="header">
    
  </section>
    <form method="post">
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <h1>Consult us</h1>
        <input type="text" name="username" placeholder="Username" />
        <input type="email" name="email" placeholder="Email" />
        <textarea placeholder="Message..." name="message" rows="5"></textarea>
        <button type="submit" name="consult">Submit</button>
      </div>
    </form>
  </body>
  <a href="consult_list.php">List</a>

</html>
